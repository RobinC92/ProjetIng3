# ProjetIng3

Here we have the principal folder of the Ing 3 project from Julien Rauber, Hugo Desgouillon and Robin Canaguier

# <a name="workflow"></a> Workflow

## The main branches
-   `master`: stable production, somehow and then tagged with a release number.
-   `develop`: develop version where developers merge the features branches

## Features branches
All feature development should take place in a [dedicated branch](https://www.atlassian.com/git/tutorials/comparing-workflows/feature-branch-workflow)
Prefer rebase over merge on your feature branches, [see reference](https://git-scm.com/book/en/v2/Git-Branching-Rebasing#_rebase_vs_merge)

``` bash
# Start with the develop branch
git checkout develop
git fetch origin
git reset --hard origin/develop

# Create a new-branch
git checkout -b new-feature

# Create a new-branch
git status
git add <some-file>
git commit

# Pull last merged changes from develop other

# Merge merges the changes from the source branch to the target branch using a merge commit,
# which becomes part of the commit history.
git pull origin develop #merging
# Rebase takes the changes made in the commits in your current branch and replays them on the history of another branch.
# The commit history of your current branch will be rewritten
# so that it starts from the most recent commit in the target branch of the rebase.
git rebase develop

# Push feature branch to remote
git push -u origin  new-feature
git push

# Open your pull request and wait for coworkers to review and merge the PL