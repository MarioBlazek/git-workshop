#!/bin/bash

source ../../utils/functions.sh

initialize_repository

for i in {A..L}
do
    echo "$i" > "$i.txt"
    git add "$i.txt"
    git commit -m "$i"
done
