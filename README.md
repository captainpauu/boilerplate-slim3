# boilerplate-slim3-smarty

Boilerplate-Slim3-Smarty uses latest Slim-3 framework with Smarty template Engine as views. This includes Controller, Dao, Middleware and Service. Database used is MySQL.

Want to build slim 3 application with smarty, use this boilerplate to quickly setup application. 

This application is built using Composer. This contains es6 and sass for frontend if you want to use.

## Install
Git clone
```
git clone https://github.com/captainpauu/boilerplate-slim3-smarty.git
cd boilerplate-slim3-smarty
```

Install packages
```
composer install
```

If using es6 and sass
```
npm install
```
Change virtual host document root to application's `public/` folder.

Add your database configuration to `config/config.ini` file.

To see if application is working 
* run following command Or run npm script `run`
```
php -S localhost:8080 -t public public/index.php
```
* and hit URL `http://localhost:8080`, you will see `Hello World!!`.


## Folder Structure
```
boilerplate-slim3-smarty
|-- config             //includes all configuration setup (slim, smarty, db)
|-- node     
|   |-- es6            //includes es6 files to build
|   |-- scss           //includes scss files to compile
|-- public             //directory root
|   |-- assets   
|   |   |-- css        //.css files 
|   |   |   |-- build  //compiled scss files
|   |   |-- js         //.js files 
|   |   |   |-- build  //build es6 files
|   |-- index.php      //application entry point
|-- src                //.php files
|   |-- Controllers
|   |-- Dao 
|   |-- Middleware
|   |-- Service
|-- templates          //smarty templates
|-- tmp                //temporary files
|   |-- cache
|   |-- compile
|-- .babelrc           //babel options
|-- composer.json
|-- package.json
|-- webpack.config.js  //webpack configuration
```

### Hurray!! Now let's build our application!!