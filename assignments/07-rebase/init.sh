#!/bin/bash

source ../../utils/functions.sh

initialize_repository

touch A.txt
git add A.txt
git commit -m "A"

touch B.txt
git add B.txt
git commit -m "B"

echo "Something in B" >> B.txt
git add B.txt
git commit -m "C"

echo "Again in B" >> B.txt
git add B.txt
git commit -m "D"

touch E.txt
git add E.txt
git commit -m "E"

git rm E.txt
git add E.txt
git commit -m "F"

touch G.txt
git add G.txt
git commit -m "G"

touch I.txt
git add I.txt
git commit -m "H"

