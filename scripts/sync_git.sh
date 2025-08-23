#!/bin/bash

# This script is used to sync the web application from a git repository.
# It is intended to be run by a cron job.

# Get the app name and installation directory from the environment variables
app=$YNH_APP_INSTANCE_NAME
install_dir=$YNH_APP_INSTALL_DIR

# Navigate to the web root directory
cd "$install_dir/www" || exit 1

# Fetch the latest changes from the git repository
git fetch --all

# Reset the local branch to the remote branch
# This will discard all local changes and commits
git reset --hard origin/$(git rev-parse --abbrev-ref HEAD)

# Pull the latest changes
git pull
