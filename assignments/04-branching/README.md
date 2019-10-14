Git Branching
=============

Goal
----

Become comfortable with Git's killer feature. Create new branches, 
switch to new branches, do some work, commit work. Integrate feature
branches into `master`, remove branches which are not needed any more.
Perform fast-forward or the three-way merges. Do some rebasing.

Setup
-----

* run `. ./init.sh` to setup the exercise

Tasks
-----

* Checkout the `experimental` branch
* Update the README.md file
* Commit the changes
* Switch back to the `master` branch
* Checkout the `hotfix` branch
* Do some hotfixing on README.md
* Commit the changes
* Do a fast-forward merge of `hotfix` branch into `master`
* List all the available branches
* List only merged branches
* List branches that were not merged yet
* Remove the `hotfix` branch
* Switch to the `experimental` branch
* Update the CONTRIBUTING.md file
* Commit the changes
* Switch back to the `master` branch
* Do a three-way merge into master (resolve conflicts if there are any)


Solution
--------

* `git checkout -b experimental`
* `echo "#Hi all from experimental" >> README.md`
* `git add README.md`
* `git commit`
* `git checkout master`
* `git checkout -b hotfix`
* `echo "#Hi all from hotfix" >> README.md`
* `git add README.md`
* `git commit`
* `git checkout master`
* `git merge exerimental`
* `git branch -v`
* `git branch --merged`
* `git branch --no-merged`
* `git branch -d hotfix`
* `git checkout experimental`
* `echo "#Hi all from experimental" >> CONTRIBUTING.md`
* `git add CONTRIBUTING.md`
* `git commit`
* `git checkout master`
* `git merge experimental`


