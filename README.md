# phpUnit Testing on Travis CI with Code Coverage

> An example repo to get started with phpUnit on CI server

[![Build Status](https://travis-ci.org/ankurk91/phpunit-travis-ci-coverage-example.svg?branch=master)](https://travis-ci.org/ankurk91/phpunit-travis-ci-coverage-example)
[![Coveralls](https://coveralls.io/repos/github/ankurk91/phpunit-travis-ci-coverage-example/badge.svg?branch=master)](https://coveralls.io/github/ankurk91/phpunit-travis-ci-coverage-example?branch=master)
[![CodeCov](https://codecov.io/gh/ankurk91/phpunit-travis-ci-coverage-example/branch/master/graph/badge.svg)](https://codecov.io/gh/ankurk91/phpunit-travis-ci-coverage-example)

## Prerequisites
* php v7.1+, see [requirements](https://phpunit.de/manual/current/en/installation.html#installation.requirements)
* [phpUnit](https://github.com/sebastianbergmann/phpunit/) v6.5.5
* [php-coveralls](https://github.com/satooshi/php-coveralls) v2.0.0
* php [Xdebug](https://xdebug.org/) extension v2.5.5+
* [composer](https://getcomposer.org/download/) v1.6+

## Test on localhost
```
cd path/to/this-project
composer install
composer run test
```

### Resources
* https://docs.travis-ci.com/
* https://github.com/satooshi/php-coveralls
* http://code.tutsplus.com/tutorials/travis-ci-what-why-how--net-34771
* http://www.sitepoint.com/php-continuous-integration-travis-ci/
* http://www.sitepoint.com/tutorial-introduction-to-unit-testing-in-php-with-phpunit/
* https://phpunit.de/manual/current/en/installation.html
* https://phpunit.de/manual/current/en/phpunit-book.pdf
* http://codeutopia.net/blog/2011/06/30/how-to-automatically-run-unit-tests-from-a-git-push/


### Tools/Services Links
* https://phpunit.de/
* https://travis-ci.org/
* https://coveralls.io/
* https://codecov.io


### License
[MIT](LICENSE.txt) License
