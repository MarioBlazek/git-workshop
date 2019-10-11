Git Commit Messages
===================

Goal
----

Be able to form a good commit message.

Intro
-----

A commit message should be written in a simple understandable language. 
It should be splitted into two parts, a subject line and a message body that can contain multiple lines.

Both the subject and the body should be written in imperative mood. 
Without this rule you will get this weird mix of tenses and when forming the message in imperative mood you get a quick feeling if the message sounds understandable.


*DO*

Write the summary line and description of what you have done in the imperative mood, that is as if you were commanding someone.
Use max 50 characters. 
Start the line with "Fix", "Add", "Change" instead of "Fixed", "Added", "Changed".
Always leave the second line blank.

*DON'T*

Don't end the summary line with a period - it's a title and titles don't end with a period.

*Tips*

If it seems difficult to summarize what your commit does, it may be because it includes several logical changes or bug fixes, and are better split up into several commits using git add -p.

Some bad commit messages:
* Fixed it
* Misc bug fixes
* More code
* Added tests
* Changed X to Y
* Some stupidly long Shakespearean retelling of bug fixes

Tasks
-----

* Write a good commit message

Hints
-----
A properly formed Git commit subject line should always be able to complete the following sentence:
If applied, this commit will `your subject line here`.

Solution
--------

* If applied, this commit will `refactor subsystem X for readability`
* If applied, this commit will `refactor subsystem X for readability`
* If applied, this commit will `remove deprecated methods`


Read more
---------

* [How to Write a Git Commit Message](https://chris.beams.io/posts/git-commit/)
* [8 commit messages](https://www.codemopolitan.com/8-commit-messages/)
* [A Note About Git Commit Messages](https://tbaggery.com/2008/04/19/a-note-about-git-commit-messages.html)
* [The art of the commit](https://alistapart.com/article/the-art-of-the-commit/)
