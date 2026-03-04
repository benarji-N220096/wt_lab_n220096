# Industry-Level Git Commands Practice

## Student Name
Benarji

---

# 1. Git Configuration Commands

## Command
git config --global user.name

### Syntax
git config --global user.name "Your Name"

### Purpose
Sets the global username used for commits.

### Example
git config --global user.name "Benarji"

### Screenshot
(Add screenshot here)

---

## Command
git config --global user.email

### Syntax
git config --global user.email "email@example.com"

### Purpose
Sets the global email used for commits.

### Example
git config --global user.email "benarji@gmail.com"

### Screenshot
(Add screenshot here)

---

## Command
git config --list

### Syntax
git config --list

### Purpose
Displays all Git configuration settings.

### Example
git config --list

### Screenshot
(Add screenshot here)

---

## Command
git config --unset

### Syntax
git config --global --unset user.name

### Purpose
Removes a configuration value.

### Example
git config --global --unset user.name

### Screenshot
(Add screenshot here)

---

# 2. Repository Setup Commands

## Command
git init

### Syntax
git init

### Purpose
Initializes a new Git repository.

### Example
git init

### Screenshot
(Add screenshot here)

---

## Command
git clone

### Syntax
git clone <repository-url>

### Purpose
Copies a remote repository to the local machine.

### Example
git clone https://github.com/user/repo.git

### Screenshot
(Add screenshot here)

---

## Command
git clone --branch

### Syntax
git clone --branch branch-name <repo-url>

### Purpose
Clones a specific branch.

### Example
git clone --branch dev https://github.com/user/repo.git

### Screenshot
(Add screenshot here)

---

## Command
git clone --depth

### Syntax
git clone --depth 1 <repo-url>

### Purpose
Clones only the latest commit history.

### Example
git clone --depth 1 https://github.com/user/repo.git

### Screenshot
(Add screenshot here)

---

# 3. Repository Status & Inspection

## git status

### Purpose
Shows the working directory status.

### Example
git status

---

## git log

### Purpose
Displays commit history.

### Example
git log

---

## git log --oneline

### Purpose
Shows commits in a single-line format.

### Example
git log --oneline

---

## git log --graph

### Purpose
Displays commit history with branch graph.

### Example
git log --graph

---

## git show

### Purpose
Shows details of a commit.

### Example
git show

---

## git diff

### Purpose
Shows differences between commits.

### Example
git diff

---

## git diff --staged

### Purpose
Shows staged changes.

### Example
git diff --staged

---

## git blame

### Purpose
Shows who modified each line in a file.

### Example
git blame file.txt

---

## git reflog

### Purpose
Shows reference logs of commits.

### Example
git reflog

---

## git shortlog

### Purpose
Summarizes commit history.

### Example
git shortlog

---

# 4. File Tracking Commands

## git add

### Purpose
Adds files to staging area.

### Example
git add file.txt

---

## git add .

### Purpose
Adds all files to staging.

### Example
git add .

---

## git add -p

### Purpose
Adds changes interactively.

### Example
git add -p

---

## git restore

### Purpose
Restores working directory files.

### Example
git restore file.txt

---

## git restore --staged

### Purpose
Unstages staged files.

### Example
git restore --staged file.txt

---

## git rm

### Purpose
Removes file from repo.

### Example
git rm file.txt

---

## git mv

### Purpose
Moves or renames a file.

### Example
git mv old.txt new.txt

---

# 5. Commit Commands

## git commit

### Purpose
Records staged changes.

### Example
git commit

---

## git commit -m

### Purpose
Commits with message.

### Example
git commit -m "Initial commit"

---

## git commit --amend

### Purpose
Modifies the last commit.

### Example
git commit --amend

---

## git commit --no-edit

### Purpose
Amends commit without changing message.

### Example
git commit --amend --no-edit

---

# 6. Branch Management

## git branch

### Purpose
Lists branches.

### Example
git branch

---

## git branch -a

### Purpose
Lists all branches.

### Example
git branch -a

---

## git branch -d

### Purpose
Deletes branch.

### Example
git branch -d feature

---

## git branch -D

### Purpose
Force deletes branch.

### Example
git branch -D feature

---

## git checkout

### Purpose
Switch branch.

### Example
git checkout dev

---

## git checkout -b

### Purpose
Creates and switches branch.

### Example
git checkout -b feature-ui

---

## git switch

### Purpose
Switch branch (modern command).

### Example
git switch dev

---

## git switch -c

### Purpose
Creates and switches branch.

### Example
git switch -c new-feature

---

# 7. Merge Commands

## git merge

### Purpose
Merges branches.

### Example
git merge feature-ui

---

## git merge --no-ff

### Purpose
Creates merge commit even if fast-forward possible.

### Example
git merge --no-ff feature-ui

---

# 8. Remote Repository Commands

## git remote

Example
git remote

---

## git remote -v

Example
git remote -v

---

## git remote add

Example
git remote add origin repo-url

---

## git remote remove

Example
git remote remove origin

---

## git fetch

Example
git fetch

---

## git fetch --all

Example
git fetch --all

---

## git pull

Example
git pull

---

## git pull --rebase

Example
git pull --rebase

---

## git push

Example
git push

---

## git push -u origin branch-name

Example
git push -u origin feature-ui

---

## git push --force

Example
git push --force

---

# 9. Stash Commands

## git stash
git stash

## git stash list
git stash list

## git stash pop
git stash pop

## git stash apply
git stash apply

## git stash drop
git stash drop

## git stash clear
git stash clear

---

# 10. Reset & Undo Commands

## git reset
git reset

## git reset --soft
git reset --soft HEAD~1

## git reset --mixed
git reset --mixed HEAD~1

## git reset --hard
git reset --hard HEAD~1

## git revert
git revert commit-id

## git clean -f
git clean -f

## git clean -fd
git clean -fd

---

# 11. Rebasing Commands

## git rebase
git rebase main

## git rebase -i
git rebase -i HEAD~3

## git rebase --continue
git rebase --continue

## git rebase --abort
git rebase --abort

---

# 12. Cherry Pick & Patch

## git cherry-pick
git cherry-pick commit-id

## git format-patch
git format-patch -1

## git apply
git apply patchfile

## git am
git am patchfile

---

# 13. Tagging Commands

## git tag
git tag v1.0

## git tag -a
git tag -a v1.1 -m "version 1.1"

## git tag -d
git tag -d v1.0

## git push origin --tags
git push origin --tags

---

# 14. Submodule Commands

## git submodule add
git submodule add repo-url

## git submodule init
git submodule init

## git submodule update
git submodule update

---

# 15. Debugging Commands

## git bisect
git bisect

## git bisect start
git bisect start

## git bisect good
git bisect good

## git bisect bad
git bisect bad

---

# GitHub Features Demonstration

- Create repository
- Add README
- Add .gitignore
- Create issue
- Assign issue
- Create branch
- Push branch
- Create pull request
- Review pull request
- Merge pull request
- Resolve merge conflict
- Close issue
- Add labels
- Add collaborators

(Screenshots must be added for each feature)

---

# Final Commit

git add git_industry_commands.md

git commit -m "Added industry level Git commands practice"

git push