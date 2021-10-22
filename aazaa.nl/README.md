Website Aazaa.org - Symfony 4
========================


Requirements
------------

-> url's for requirements are related to setup a environment on antagonist hosting.

  * PHP 7.1.3 or higher;
  * Redis [Antagonist Redis][1];
  * Ssh access [Antagonist setup ssh access][2];
  * Composer [Antagonist install composer][3];
  * and the [usual Symfony application requirements][4]

Installation
------------

Install this project by running the follow commandline commands:

Go to the domains folder and remove old folder (important, al files wil be deleted!)
```bash
$ cd domains
$ rm -rf aazaa.org
```

clone this project to the server and install all assets for production
```bash
$ git clone https://aazaa@bitbucket.org/aazaa/aazaa.org.git aazaa.org
$ cd aazaa.org
$ composer install
$ composer dump-autoload --optimize --classmap-authoritative
$ cp public/.htaccess.prod public/.htaccess
```

Make symlink to the public folder (Antagonist requirement)
```bash
$ ln -s public public_html
$ ln -s public private_html
```
Then we need to setup the environment settings, by editing .env file
```bash
$ nano .env
```

Change the follow setting to your enviroment:<br>
<b>!important</b> -> no spaces between = and the value
```apacheconfig
// Environment settings >> prod = production | dev = debug mode
APP_ENV=prod 
APP_SECRET=0c48703ef1d6db2ef3c9b8c156358a34
DATABASE_URL=mysql://deb116267_aazaa-prod:YxekXt2fn@aazaa.org:3306/deb116267_aazaa-prod

//Mailgun settings!
MAILER_URL=null://localhost
MAILER_USER=info@aazaa.org
MAILER_NO_REPLY=noreply@aazaa.org
MAILGUN_DOMAIN=aazaa.org 
MAILGUN_API_KEY=key-bd46e1caacfa20a6333bfc26e77e5b45

//Autodeploy settings
GIT_BRANCH=master
GIT_DOCTRINE_UPDATE=false
GIT_GITGUB_SECRET=''
GIT_PROJECT_PATH='/home/deb116267/domains/aazaa.org/'

//Molie payment settings
MOLLIE_API_KEY='live_8Dh6vQmE7BQr7dQu4bvsn4jP5SweNE'

WEB_DIR='/home/deb116267/domains/aazaa.org/public/'
IMAGE_DIR='/home/deb116267/aazaa.org/public/images/'

//Opentok settings
OPENTOK_KEY=46258432
OPENTOK_SECRET=7b858883d97f11fac8078460e9d0360e09d5a668
```

After saving the .env file, we can run the follow command, to setup the database
```bash
$ php bin/console doctrine:schema:update --force
```

Installation is done;

Debug commands
------------
There are some commands that you have to know 

* Clear cache:
```bash
$ php bin/console c:c --env=prod
$ php bin/console c:c --env=dev
```

* Create new admin user:
```bash
$ php bin/console fos:user:create username test@example.com p@ssword
$ php bin/console fos:user:promote username ROLE_ADMIN
```

* Upgrade existing user to admin:
```bash
$ php bin/console fos:user:promote username ROLE_ADMIN
```

* Remove admin rights from user:
```bash
$ php bin/console fos:user:demote username ROLE_ADMIN
```

* Change password from user:
```bash
$ php bin/console fos:user:change-password username newp@ssword
```


[1]: https://www.antagonist.nl/blog/2019/02/redis/
[3]: https://www.antagonist.nl/blog/2017/02/composer/
[2]: https://www.antagonist.nl/help/nl/webhosting/ssh
[4]: https://symfony.com/doc/current/reference/requirements.html
