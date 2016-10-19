#!/bin/sh

#HOW TO USE:
#initGit.sh [name] [url] [commit_msg]

echo "----Making directory to store introduced data..."
mkdir cfg_git
echo "----Saving the name of the repository (used locally)..."
[ -f ./cfg_git/Repo_name.txt ] && 
	echo "There was another name for the repo allready saved to the file." ||
	echo $1 >> ./cfg_git/Repo_name.txt
	
echo "----Saving the GitHub URL of the repository..."
[ -f ./cfg_git/Repo_url.txt ] && 
	echo "There was another URL for the repo allready saved to the file." ||
	echo $2 >> ./cfg_git/Repo_url.txt
	
echo "---Starting initialization..."
git init
echo "---Remotely adding the repo with the name $1..."
git remote add $1 $2
echo "---Pulling from repository (Just in case)..."
git pull $1 master
echo "---Adding to the repository..."
git add .
# Supposing gitignore was set
echo "---Commiting with message $3..."
git commit -m $3
echo "---Pushing..."
git push -u $1 master
echo "Git initialization is a succes!Bye!"

