#!/usr/bin/env bash

if [[ $TRAVIS_PHP_VERSION = 7.* ]]; then
	phpdbg -qrr ./vendor/bin/phpunit --coverage-clover build/logs/clover.xml
else
	./vendor/bin/phpunit --coverage-clover build/logs/clover.xml
	php ocular.phar code-coverage:upload --format=php-clover build/logs/clover.xml
fi
