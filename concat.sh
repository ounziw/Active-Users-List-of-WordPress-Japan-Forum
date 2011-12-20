#!/bin/sh
rm data/data.py
touch data/data.py
cat rssdata/*.txt >> data/data.py
