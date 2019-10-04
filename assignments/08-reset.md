Git reset
=========

Goal
----

Familiarize with the doings of `git reset` command.

Intro
-----

The git reset command is a complex and versatile tool for undoing changes. 
It has three primary forms of invocation. 
These forms correspond to command line arguments --soft, --mixed, --hard.
The three arguments each correspond to Git's three internal state management mechanism's,
The Commit Tree (HEAD), The Staging Index, and The Working Directory.

Reference logs, or "reflogs" are a mechanism Git uses to record updates applied to tips of branches and other commit references. 
Reflog allows you to go back to commits even though they are not referenced by any branch or tag. 
After rewriting history, the reflog contains information about the old state of branches and allows you to go back to that state if necessary. 
Every time your branch tip is updated for any reason (by switching branches, pulling in new changes,
rewriting history or simply by adding new commits), a new entry will be added to the reflog.

Tasks
-----

* Discard the changes of previous commit and move them to untracked section
* Discard the changes of previous commit but leave them staged
* Completely remove the changes of previous commit
* Inspect a project's reflog
* Get to the state before all of this resetting came into play

Solution
--------

* `git reset HEAD~1`
* `git reset --soft HEAD~1`
* `git reset --hard HEAD~1`
* `git reflog`
* Find commit hash in reflog and do `git reset --hard <hash>`

Read more
---------
* [Atlassian Git reset](https://www.atlassian.com/git/tutorials/learn-undoing-changes-with-bitbucket#git-reset)
