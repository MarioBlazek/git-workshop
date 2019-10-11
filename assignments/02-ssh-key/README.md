Generate a new SSH key and add it to the ssh-agent
====================================

Goal
----

Generate a new SSH key to use it for authentication. After generating key,
if you don't want to reenter your passphrase every time you use it, you need to add 
it to the SSH agent, which manages your SSH keys and remembers your passphrase.

Tasks
-----

* Generate new ssh key with email address linked to your github account.
* Save generated key to default or custom location (default location is recommended).
* Start ssh-agent in the background.
* Add your private key to ssh agent
* Add the SSH key to your GitHub account.


Solution
--------

#### Generating ssh key

1. Open Terminal.

2. Paste the text below, substituting in your GitHub Enterprise email address.

    `$ ssh-keygen -t rsa -b 4096 -C "your_email@example.com"`

3. Select file location and passphrase

#### Adding key to ssh-agent

1. Start the ssh-agent in the background.
   
    ```
    $ eval "$(ssh-agent -s)"
    > Agent pid 59566
    ```
    
2. Add your SSH private key to the ssh-agent. If you created your key with a different name, or if you are adding an 
   existing key that has a different name, replace id_rsa in the command with the name of your private key file.

    `$ ssh-add ~/.ssh/id_rsa`
    
3. [Add the SSH key to your GitHub account.](https://help.github.com/en/enterprise/2.16/user/articles/adding-a-new-ssh-key-to-your-github-account)
