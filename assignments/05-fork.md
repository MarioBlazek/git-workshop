Fork a central repository
=========================

Goal
----

Fork the repo you want to contribute to. Create feature branch and push commits to your fork. Maintain the fork.

Intro
-----

You probably don't have any permissions on a repository that you want to contribute to. That's why you need to fork the repository
in order to make it yours. Which basically means that you need to follow a GitHub flow.

Tasks
-----

* Fork [this](https://github.com/MarioBlazek/git-workshop) repository through Github user interface
* Clone with SSH your fork locally
* Set the original repository as upstream remote 
* Create new feature branch
* Add 5 books of your choice to `writers.yml` and try to stick with the format
* Commit and push to your remote

Solution
--------

* [Fork a repository](https://help.github.com/en/articles/fork-a-repo)
* `git clone git@github.com:janedoe/git-workshop.git`
* `git remote add upstream git@github.com:MarioBlazek/git-workshop.git`
* `git checkout -b feature_something`
* `git commit -m 'Added something'`
* `git push origin feature_something`


Read more
---------

* [GitHub flow](https://guides.github.com/introduction/flow/)
