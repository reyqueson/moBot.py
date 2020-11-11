# -*- coding: utf-8 -*-
import codecs
from tinydb import TinyDB, Query
#db = TinyDB('db.json')
db = TinyDB(str('db.json'), ensure_ascii=False, encoding='utf-8')
from bs4 import BeautifulSoup

import nltk
from nltk.stem import WordNetLemmatizer
lemmatizer = WordNetLemmatizer()
import pickle
import numpy as np

from keras.models import load_model
model = load_model('chatbot_model.h5')
import json
import random
intents = json.loads(open('intents.json', encoding='utf').read())
words = pickle.load(open('words.pkl','rb'))
classes = pickle.load(open('classes.pkl','rb'))


def clean_up_sentence(sentence):
    # tokenize the pattern - split words into array
    sentence_words = nltk.word_tokenize(sentence)
    # stem each word - create short form for word
    sentence_words = [lemmatizer.lemmatize(word.lower()) for word in sentence_words]
    return sentence_words

# return bag of words array: 0 or 1 for each word in the bag that exists in the sentence

def bow(sentence, words, show_details=True):
    # tokenize the pattern
    sentence_words = clean_up_sentence(sentence)
    # bag of words - matrix of N words, vocabulary matrix
    bag = [0]*len(words)  
    for s in sentence_words:
        for i,w in enumerate(words):
            if w == s: 
                # assign 1 if current word is in the vocabulary position
                bag[i] = 1
                if show_details:
                    print ("found in bag: %s" % w)
    return(np.array(bag))

def predict_class(sentence, model):
    # filter out predictions below a threshold
    p = bow(sentence, words,show_details=False)
    res = model.predict(np.array([p]))[0]
    ERROR_THRESHOLD = 0.25
    results = [[i,r] for i,r in enumerate(res) if r>ERROR_THRESHOLD]
    # sort by strength of probability
    results.sort(key=lambda x: x[1], reverse=True)
    return_list = []
    for r in results:
        return_list.append({"intent": classes[r[0]], "probability": str(r[1])})
    return return_list

def getResponse(ints, intents_json):
    tag = ints[0]['intent']
    list_of_intents = intents_json['intents']
    for i in list_of_intents:
        if(i['tag']== tag):
            result = random.choice(i['responses'])
            break
    return result

def chatbot_response(msg):
    ints = predict_class(msg, model)
    res = getResponse(ints, intents)
    return res


from flask import Flask, render_template
from flask_socketio import SocketIO, send

app = Flask(__name__)
app.config['SECRET_KEY'] = 'secret!'
socketio = SocketIO(app)

@app.route('/')
def index():
    return render_template('home.html')

@app.route('/neural')
def neural():
    return render_template('neural.html')

@socketio.on('message')
def handleMessage(msg):
    
    #person send
    send(msg, broadcast = True)
    print('Message: ' + msg)
    
    #db
    msgcode = json.dumps(msg, ensure_ascii=False)
    soup = BeautifulSoup(msgcode, features="html.parser")
    botMind = soup.m.string
    db.insert( { 'ask' : botMind } )
    print('msgDB ask : ', botMind)
    #db.insert({ 'botMind' : botMind })

    #bot
    b = chatbot_response(msg)
    send('<bot><b>moBot : </b><m>' + b + '</m></bot>', broadcast = True)
    db.insert( { 'answer' : b } )
    print('moBot: ' + b )


if __name__ == '__main__':
    socketio.run(app)