Make a Pull Request
===================

Goal
----

Make a Pull Request from your fork.

Tasks
-----

* Open a new Pull Request on the main repository
* Wait for CI to finish
* Address maintainer's comments if there are any
* Maybe some rebasing would be needed 

Hints
-----

* [How to rebase a PR](https://akrabat.com/the-beginners-guide-to-rebasing-your-pr/)
* Steps to rebase the PR:
    - get the newest changes from the upstream set in previous assignment
        ```bash
        git fetch upstream
        ```
    - switch to the master branch
        ```bash
        git checkout master
        ```
    - merge changes from the upstream/master into master (the should not be any conflicts, if there are any probably you've did something wrong)
        ```bash
        git merge upstream/master
        ```
    - push changes to your fork (GitHub interface should show something like `this branch is now even...`)
        ```bash
        git push origin master
        ```
    - now switch back to the feature branch
        ```bash
        git checkout feature_*
        ```
    - rebase feature branch against master
        ```bash
        git rebase master
        ```
    - force push the changes to your fork (the PR will be updated automatically)
        ```bash
        git push origin feature_* -f
        ```

Solution
--------

* [GitHub Creating a pull request](https://help.github.com/en/articles/creating-a-pull-request-from-a-fork)

Read more
---------

* [Making a Pull Request](https://www.atlassian.com/git/tutorials/making-a-pull-request)
