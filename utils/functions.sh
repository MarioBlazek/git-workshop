#!/bin/bash

initialize_repository() {

    DIR="exercise"
    if [[ -d "$DIR" ]]; then
        echo -n "Directory $DIR exists. Proceed with removal? [y/n] "
        read input

        case $input in
            [yY]) echo -n "Removing..."; rm -rf $DIR; echo "Done.";;
            *) echo "Please remove $DIR directory manually."; return;;
        esac
    fi

    git init $DIR
    cd $DIR
}
