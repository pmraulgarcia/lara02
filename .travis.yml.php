language: php

php:
 - 5.6

install:
 composer install

script:
 vendor/bin/phpunit