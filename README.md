# xts-init

## Usage

1. Clone from github and rename to your project.

    git clone https://github.com/SyuTingSong/xts-init.git your_project_name

2. Enter your project directory

    cd your_project_name

3. Init and update the submodule.

    git submodule init
    git submodule update

4. Remove the xts-init git repo

    rm -rf .git .gitmodules framework/.git

5. Init your own git repo and commit files.

    git init
    git add .
    git ci -m "init from xts-init"

