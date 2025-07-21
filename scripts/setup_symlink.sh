#!/bin/bash
# Setup symlink for MyMI-Media campaigns within MyMI-Wallet

# Directory where MyMI Wallet expects campaign folders
TARGET_DIR="/var/www/MyMI-Media/Campaigns"
# Local repository campaigns directory
SOURCE_DIR="$(dirname "$(realpath "$0")")/../writable/MyMI-Media/Campaigns"

# Create target directory if it doesn't exist
sudo mkdir -p "$TARGET_DIR"

# Create parent folder for source if missing
mkdir -p "$SOURCE_DIR"

# Create symlink
if [ ! -L "$TARGET_DIR" ]; then
    sudo ln -s "$SOURCE_DIR" "$TARGET_DIR"
    echo "Symlink created from $SOURCE_DIR to $TARGET_DIR"
else
    echo "Symlink already exists: $TARGET_DIR"
fi
