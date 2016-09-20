
***Don't use this, it's outdated***


# Slim Skeleton Application

This repo is meant to be a Skeleton, Blueprint for setting up a new Slim Framework application, just clone the repo and you're ready to roll.

It is based on PHPAcademy's "Simple blog with slim framework" video.



## Install

To install Slim-Skeleton type the following into the command line (If you're using Windows I recommend [Cmder](http://cmder.net/)).

```
git clone https://github.com/HelgeSverre/Slim-skeleton.git
cd Slim-skeleton
composer install
```

Composer will then create the vendor/ folder, download any dependecies and generate the autoload.php file inside the vendor folder.



## Directory Structure

```
/app - contains all application code.
   /routes - Slim framework routes
   /views - all views
   /views/master - master layouts that you can extend with twig
/public - contains all assets, javascript and stylesheets.
/vendor - contains dependencies handled by composer.
```


## Configuration

All configuration variables like database credentials and any custom configuration you might want to set, should be put in the config file here:

``` /app/config.ini ```

Here is the default configuration:

```ini
; Database Configuration
[database]
db_host = "localhost"
db_name = "databasename"
db_user = "root"
db_pass = "password"
```

this file is not publicly accesible if you set up your hosting environment properly (Having the /public directory as the document root).

The values in the config.ini file will be available inside the application under the $app->config variable.

This variable is an array of the configuration data you've specified, the slim skeleton application loads this file using the php built in function ```parse_ini_file()```.

See the documentation for that function [here](http://php.net/manual/en/function.parse-ini-file.php).



## Including routes

If you create a new route, you have to add it manually to the routes.php file inside the routes directory.

#### Example:

```php
<?php

require 'routes/hello.php';

?>
```


## Dependecies

- RedBean ORM
- Slim Framework
- Slim Views
- Twig

For a more specific list of dependencies, please read the composer.json file.



## Further documentation

Here are a list of documentation you should reference when writing an application using this skeleton.

- [Twig documentation](http://twig.sensiolabs.org/documentation)
- [Slim Framework documentation](http://docs.slimframework.com/)
- [RedBean ORM Documentation](http://www.redbeanphp.com/)
- [Composer Documentation](https://getcomposer.org/doc/01-basic-usage.md)



### See any mistakes?

If you see a horrible mistake or a bad practice in any of my code, feel free to create an issue on GitHub explaining it to me and I will fix it, or submit a Pull Request, documentation on how to do this is available [here](https://help.github.com/articles/using-pull-requests/).



### Recommended Services

These are the services I recommend for hosting and deploying your application.

- [Dploy](https://dploy.io)
- [ServerPilot](https://serverpilot.io)
- [DigitalOcean](https://digitalocean.com)
