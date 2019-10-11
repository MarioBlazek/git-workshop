Git log
=======

Goal
----

Use `log` command to inspect commits and commit history.

Tasks
-----

* Use `git log` to display the contents of each commit
* Limit the previous command to two commits
* Display statistics per file for every commit
* Show only commit message and hash for every commit
* Use custom format to display hash, author name, author date relative and subject
* Display commits from the last two weeks without merge commits
* Display commit hash and subject from commits made since 2019-10-01 and before 2019-10-03, by author Jane Doe, without merge commits
* Search for usage of dump function
* Display graph 


Hints
-----

Useful options for `git log --pretty=format`

| Option | Description of Output |
|:--------|:-----------------------|
| %H     | Commit hash           |
| %h     | Abbreviated commit hash |
| %T     | Tree hash |
| %t     | Abbreviated tree hash |
| %P     |  Parent hashes |
| %p     |  Abbreviated parent hashes |
| %an    | Author name |
| %ae    |  Author email |
| %ad    | Author date (format respects the --date=option) |
| %ar    | Author date, relative |
| %cn    | Committer name |
| %ce    | Committer email |
| %cd    | Committer date |
| %cr    | Committer date, relative |
| %s    | Subject |


Common options to `git log`

| Option | Description           |
|:--------|:-----------------------|
| -p     | Show the patch introduced with each commit           |
| --stat     | Show statistics for files modified in each commit |
| --shortstat     | Display only the changed/insertions/deletions line from the --stat command |
| --name-only     | Show the list of files modified after the commit information |
| --name-status     |  Show the list of files affected with added/modified/deleted information as well |
| --abbrev-commit     |  Show only the first few characters of the SHA-1 checksum instead of all 40 |
| --relative-date    | Display the date in a relative format (for example, “2 weeks ago”) instead of using the full date format |
| --graph    |  Display an ASCII graph of the branch and merge history beside the log output |
| --pretty    | Show commits in an alternate format. Options include oneline, short, full, fuller, and format (where you specify your own format) |
| --oneline    | Shorthand for --pretty=oneline --abbrev-commit used together |

Options to limit the output of `git log`

| Option | Description           |
|:--------|:-----------------------|
| -<n>     | Show only the last n commits           |
| --since, --after     | Limit the commits to those made after the specified date |
| --until, --before     | Limit the commits to those made before the specified date |
| --author     | Only show commits in which the author entry matches the specified string |
| --committer     |  Only show commits in which the committer entry matches the specified string |
| --grep     |  Only show commits with a commit message containing the string |
| -S    | Only show commits adding or removing code matching the string |

Solution
--------

* `git log -p`
* `git log -p -2`
* `git log --stat`
* `git log --pretty=oneline`
* `git log --pretty=format:"%h - %an, %ar : %s"`
* `git log --since=2.weeks --no-merges`
* `git log --pretty="%h - %s" --author='Jane Doe' --since="2019-10-01" --before="2019-10-03" --no-merges`
* `git log --pretty="%h - %s" -S dump`
* `git log --pretty=format:'%h %s' --graph`
