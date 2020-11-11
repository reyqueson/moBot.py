# -*- coding: utf-8 -*-

import json, simplejson
import sys, codecs, locale
import nltk
#from nltk.stem import WordNetLemmatizer
#lemmatizer = WordNetLemmatizer()

from nltk.stem import SnowballStemmer
#from nltk.stem import PorterStemmer
#from nltk.stem import WordNetLemmatizer


lemmatizer = SnowballStemmer('spanish')
words = ['Organizar', 'organizado', 'organización', 'organizaciones', 'órgano']
stemed_words = [lemmatizer.stem(w.lower()) for w in words]
print(stemed_words)

print (sys.stdout.encoding)
s = 'organización'
print(s)

data_file = open('intents.json', encoding='utf-8').read()
json_spa = json.dumps(s, ensure_ascii=False)
print(json.loads(data_file))
print(json_spa)



#intents = json.loads(data_file)
#print(intents)


# this is the rocks! ------------------------------------  
data_file = open('intents.json', encoding='utf-8').read()

# beautifulsoup
from bs4 import BeautifulSoup
mess = "<me><b>tú : </b><m>ok</m><time>1:11.54p.m.</time></me>"
j = json.dumps(mess, ensure_ascii=False)
print(json.loads(j))
soup = BeautifulSoup(mess, features="html.parser")
print(soup.m.string)
#tags = soup('me')

# ---  qna knowledge + tsv to json ------------------------
witty = open('intents_mak.json', encoding='utf-8').read()
extracto = json.loads(witty)
print(extracto)

# -----------------   mission : jueves para viernes 240920 extraer datos de json qna para alimentar el dataset del moBot ----------------
# tsv a json en progreso viernes

import codecs
from tinydb import TinyDB, Query
#db = TinyDB('db.json')
db = TinyDB(str('db.json'), ensure_ascii=False, encoding='utf-8') #this is da clue inicode 😂

chatbotresponde = '😂 El que solo se ríe de sus maldades se acuerda jajaja 😂😂😂'
print('raw: ', chatbotresponde)
b = chatbotresponde.encode('utf-8')
print('encode: ', b)
b = b.decode('utf-8')
print('decode: ', b)
#print('string unicode : ', str(unicode(b)) )
print('<bot><b>moBot : </b><m>' + b + '</m></bot>')
db.insert( { 'answer' : u"😂 El que solo se ríe de sus maldades se acuerda" } )
datajson = { 'datajson' : b }
d = json.dumps(datajson, ensure_ascii=False)
db.insert(datajson)
