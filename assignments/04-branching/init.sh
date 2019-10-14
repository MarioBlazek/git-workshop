#!/bin/bash

source ../../utils/functions.sh

initialize_repository

touch README.md
echo "#Hi all" >> README.md
git add README.md
git commit -m "README.md file added"

touch CONTRIBUTING.md
echo "#Hi all" >> CONTRIBUTING.md
git add CONTRIBUTING.md
git commit -m "CONTRIBUTING.md file added"

