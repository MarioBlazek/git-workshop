Git Hooks
=========

Goal
----

Introduce developers to Git hook concept. Implement a custom Git hook script.

Intro
-----

Git hooks are scripts that run automatically every time a particular event occurs in a Git repository.
They let you customize Git’s internal behavior and trigger customizable actions at key points in the development life cycle.
Hooks reside in the `.git/hooks` directory of every Git repository.
Git automatically populates this directory with example scripts when you initialize a repository.

Here's a full list of hooks you can attach scripts to:
- applypatch-msg
- pre-applypatch
- post-applypatch
- pre-commit
- prepare-commit-msg
- commit-msg
- post-commit
- pre-rebase
- post-checkout
- post-merge
- pre-receive
- update
- post-receive
- post-update
- pre-auto-gc
- post-rewrite
- pre-push

Tasks
-----

* Implement a custom git hook that will run `composer test` command before every commit operation

Hints
-----

* Navigate to `.git\hooks` directory
* Check `pre-commit.sample` file

Solution
--------

* Create file `pre-commit` file inside `.git\hooks` directory
* Put this code inside `pre-commit` file

```bash
#!/bin/sh                                                                                                                                                                                                                                     
echo "Running tests..."

composer test
```

* Or a bit more advanced use case

```bash
#!/bin/sh  
echo "Running tests..."

for file in $(git diff --cached --name-only)
do
  if [ $file == "writers.yml" ]; then
      composer test
  fi
done
```

Read more
---------

[Atlassian - Git Hooks](https://www.atlassian.com/git/tutorials/git-hooks)

[githooks.com](https://githooks.com/)

[CaptainHook](https://github.com/CaptainHookPhp/captainhook)
