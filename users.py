import nltk
from nltk import *
filein = open('data/data.py')
rawdata = filein.read()
filein.close()
tokens = nltk.word_tokenize(rawdata)
freqdata = FreqDist(tokens)
resultdata = freqdata.keys()
fileout = open('data/userlist.txt', 'w')
fileout.write(', '.join(resultdata[0:20]))
fileout.close()
