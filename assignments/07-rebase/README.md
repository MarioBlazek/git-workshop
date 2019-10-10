Rewriting history
=================

Goal
----

Get some in-depth knowledge of `git rebase` command.

Intro
-----

Rebase is one of two Git utilities that specializes in integrating changes from one branch onto another.
The other change integration utility is git merge.
Merge is always a forward moving change record.
Alternatively, rebase has powerful history rewriting features.

Rebasing is the process of moving or combining a sequence of commits to a new base commit.
Rebasing is most useful and easily visualized in the context of a feature branching workflow.

From a content perspective, rebasing is changing the base of your branch from one commit to another
making it appear as if you'd created your branch from a different commit.
Internally, Git accomplishes this by creating new commits and applying them to the specified base.
It's very important to understand that even though the branch looks the same,
it's composed of entirely new commits.

Setup
-----

* run `. ./init.sh` to setup the exercise

Tasks
-----

* Last commit message is not true, replace it with a better one
* Squash `C` and `D` commits, as both are modifying the same file
* Change the commit message the `F` commit as it is not very descriptive

Solution
--------

* `git commit --amend`
* `git rebase -i HEAD~n` where `n` is number of commits on which the operation is
going to be performed


Read more
---------

* [Atlassian Git rebase](https://www.atlassian.com/git/tutorials/rewriting-history/git-rebase)
* [Atlassian interactive rebase](https://www.atlassian.com/git/tutorials/rewriting-history#git-rebase-i)
* [Atlassian amend](https://www.atlassian.com/git/tutorials/rewriting-history#git-commit--amend)
