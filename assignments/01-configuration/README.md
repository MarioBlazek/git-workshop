Git config
==========

Goal
----

Customize your Git environment. Configure standard Git options only once on any given computer, 
they’ll stick around between upgrades. You can also change them at any time by running through the commands again.


Intro
-----

Git comes with a tool called git config that lets you get and set configuration variables that control all aspects of how Git looks and operates. 
These variables can be stored in three different places:

1. `/etc/gitconfig` file: Contains values applied to every user on the system and all their repositories. 
If you pass the option --system to git config, it reads and writes from this file specifically. 
(Because this is a system configuration file, you would need administrative or superuser privilege to make changes to it.)

2. `~/.gitconfig` or `~/.config/git/config` file: Values specific personally to you, the user. 
You can make Git read and write to this file specifically by passing the --global option, 
and this affects all of the repositories you work with on your system.

3. config file in the Git directory (that is, `.git/config`) of whatever repository you’re currently using: 
Specific to that single repository. 
You can force Git to read from and write to this file with the --local option, but that is in fact the default. 
(Unsurprisingly, you need to be located
somewhere in a Git repository for this option to work properly.)

Each level overrides values in the previous level, so values in `.git/config` trump those in
`/etc/gitconfig`.

Tasks
-----

* Show all available Git options
* Set up your Git identity (name and email)
* Set default Git editor to Vim
* Check your current Git settings
* Define your personal `.gitignore` file
* Define alias of any kind

Hints
-----

* Create `.gitignore_global` file in your home directory
* [Git aliases](https://git-scm.com/book/en/v2/Git-Basics-Git-Aliases)

Solution
--------

* `git config --list --show-origin`
* `git config --global user.name "John Doe"`
* `git config --global user.email johndoe@example.com`
* `git config --global core.editor vim`
* `git config --list`
* `git config --global core.excludesfile "~/.gitignore_global"`

Read more
---------

* [Git configuration](https://git-scm.com/book/en/v2/Customizing-Git-Git-Configuration)
* [.gitignore](https://labs.consol.de/development/git/2017/02/22/gitignore.html)
