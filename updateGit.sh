#!/bin/sh

#HOW TO USE:
#updateGit.sh [commit_msg]

repo_name=$(cat ./cfg_git/Repo_name.txt)
# Read the name cfg for git for repository
# from file
git add .
echo "----Making the commit $1..."
git commit -m $1
echo "----Pushing..."
git push -u $repo_name master
echo "----Git Hub updated succesfully!"