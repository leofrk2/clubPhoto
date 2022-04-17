#!/bin/bash

rsync -av ./ pi@192.168.1.183:Documents/clubPhoto/ --include=public/build --include=vendor --exclude-from=.gitignore --exclude=".*"
