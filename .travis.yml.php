language: php

php:
 - 5.5
 - 5.6

install:
 composer install

script:
 vendor/bin/phpunit