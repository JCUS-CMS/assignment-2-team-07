# CMS: Assignmnet 2
## Group 007

------------------------------------
### Group Members -

1. Ayushman Kapoor - ayushman.kapoor@my.jcu.edu.au
2. Matthew Cabinian - matthew.cabinian@my.jcu.edu.au
3. Abhay Anil - abhay.anil@my.jcu.edu.au
4. SeongNyeon Kim - v1999vvv@gmail.com
5. Alexander Steven Citrawinarno - alexander.stevenc@yahoo.com
------------------------------------

------------------------------------
## Local Environment Setup -

**Setting up VVV in your local machine**

*run the following commands:*
```
git clone https://github.com/Varying-Vagrant-Vagrants/VVV.git
cd VVV
vagrant plugin install vagrant-hostsupdater --local
vagrant up
```

**ADDING NEW WP-SITE TO VVV**
go to your VVV directory and look for _'config.yml'_ under VVV/config/
and add the following to your file.
###### new website for cms classroom repo
  wordpress-cms:
    skip_provisioning: false
    description: "A standard WP install, useful for building plugins, testing things, etc"
    repo: https://github.com/Varying-Vagrant-Vagrants/custom-site-template.git
    custom:
      # locale: it_IT
      delete_default_plugins: true
      install_plugins:
        - query-monitor
    hosts:
      - cms.wordpress.local
      
If you are setting this for first time then it should be added on the line 47 after the two.wordpress.test

and then run this command from VVV/ directory:
```vagrant reload --provision```

**Setting up GITHUB in your new website/public_html**

Assuming you are already in your VVV directory
```cd www/wordpress-cms/```

now we make a copy of your public_html/wp-config.php
```cp public_html/wp-config.php wp-config.php```

then we delete the public_html and create a new directory with same name
```rm -rf public_html && mkdir public_html```

then cd inside public_html
```cd public_html```

Setup git in your directory
```git init```

Create a new branch for easier push and pull
```git checkout -b development```

Link your local git with the remote
```git remote add origin https://github.com/JCUS-CMS/assignment-2-team-07.git```

now setup upstream
```git branch --set-upstream-to=origin/development development```

not pull from the remote branch
```git pull```

now copy the wp-config.php file back to your public_html
```cp ../wp-config.php wp-config.php```

now edit your wp-config.php and change the DB settings to:

  define( 'DB_NAME', '<YOUR DB_NAME>' );
  define( 'DB_USER', '<YOUR DB_USERNAME>' );
  define( 'DB_PASSWORD', '<YOUR DB_PASSWORD>' );
  define( 'DB_HOST', '<YOUR DB_SERVER IP>' );

**SETTING UP STAGING ON YOUR LOCAL ENVIRONMENT:**

create a new branch and link it with your git remote staging <branch>:
```git checkout -b staging```
  
now for easy pull and push upstream it to your origin/<branch>=staging
```git branch --set-upstream-to=origin/staging staging```
  
now pull the latest staging branch commits:
```git pull```
  
**CHANGING GIT BRANCH IN LOCAL ENVIRONMENT:**

this is the command to shift between branches in your local environment:
```git checkout <branch-name>```

for example if you are in staging branch and want to shift to development branch:
```git checkout development```

**EXAMPLE - FOR STAGING**

_For example lets say you have added some new feature to your development branch and now want to update it to staging branch
Then follow the following command:
You have to run the following command from your development branch -_

Add the changed files to your git:
```git add .```

now commit the changes you have made:
```git commit -m "<your-commit-message>"```

now push the changes from development to staging :
```git push origin staging```
_**origin =** your remote git repo
**staging =** your <branch> that you want to push to_
  
now check out the staging URL for changes:
http://staging.cms-a2.ayushmank.sgedu.site/group-007/

------------------------------------



#### Test command:
test 01 - testing echo command
test 02 - setting up branches in local
test 03 - adding all the users to DB
