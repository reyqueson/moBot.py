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