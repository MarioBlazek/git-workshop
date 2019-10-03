Basics
======

Goal
----

Get into shape with simple `git` operations like initializing an empty repository,
staging files, committing the changes. Manipulating the files and directories,
excluding files, removing files and pulling and pushing changes to remotes.

Tasks
-----

* Initialize an empty repository
* Create README.md file with some contents inside
* Check the current status of your repository
* Stage README.md file
* Check the short status of your repository
* Commit the changes
* Add some more content to README.md file
* Discard the changes in the README.md file
* In the new directory clone https://github.com/netgen/tagsbundle repository
* Inspect the commit history
* Show the remote
* Get some more data about remote

Solution
--------

* `git init`
* `touch README.md && echo "#Hi all" >> README.md`
* `git status`
* `git add README.md`
* `git status -s`
* `git commit -m "Add the README.md file"`
* `echo "##And to you" >> README.md`
* `git checkout README.md`
* `git clone clone https://github.com/netgen/tagsbundle`
* `git log`
* `git remote -v`
* `git remote show origin`
