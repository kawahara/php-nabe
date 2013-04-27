How to use
==========

Get php-nabe
------------

mkdir ~/.php-nabe
cd ~/.php-nabe
git clone https://github.com/kawahara/php-nabe
$HOME/.php-nabe/php-nabe/php-nabe setup

export PATH=$HOME/.php-nabe/php-nabe/bin:$PATH

Install and change version
--------------------------

Use *php-nabe install*.

Example:

  php-nabe install 5.4.0

And if you want to change php's version,
please use *php-nabe use*.

Example:

    php-nabe use 5.4.0
    php -v
    PHP 5.4.0 (cli) (built: Apr 14 2012 09:37:13)
    Copyright (c) 1997-2012 The PHP Group
    Zend Engine v2.4.0, Copyright (c) 1998-2012 Zend Technologies

List up installed version
-------------------------

Use *php-nabe ls*

Example:

    php-nabe ls
       5.3.10
    => 5.4.0
       5.4.1RC1


Install extension
-----------------

Use *php-nabe ext-install*.
You MUST select any php version.

Example:

    php-nabe ext-install mbstring

Get composer
------------

You can install the [composer](http://getcomposer.org/) by
*php-nabe composer-install*.

Example:

    php-nabe composer-install
    composer -v

FPM Process Control
-------------------

If you have installed php with *--enable-fpm*,
you can start/stop/reload php-fpm process.

Example:

    sudo php-nabe fpm-start

You can set the listen address by a first argument.

Example:

    sudo php-nabe fpm-start localhost:9000

And reload and stop is also very easy!

Example:

    # reload
    sudo php-nabe fpm-reload

    # stop
    sudo php-nabe fpm-stop
