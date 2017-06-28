[![Build Status](https://travis-ci.org/esilvajr/linio-challenge.svg?branch=master)](https://travis-ci.org/esilvajr/linio-challenge)
[![Code Climate](https://codeclimate.com/github/esilvajr/linio-challenge/badges/gpa.svg)](https://codeclimate.com/github/esilvajr/linio-challenge)

# Linio Challenge

## Challenge
Write a program that prints all the numbers from 1 to 100. However, for
multiples of 3, instead of the number, print "Linio". For multiples of 5 print
"IT". For numbers which are multiples of both 3 and 5, print "Linianos".
 
But here's the catch: you can use only one `if`. No multiple branches, ternary
operators or `else`.
 
### Requisites
* 1 if
* You can't use 'else', 'else if' or ternary
* Unit tests
* You can write the challenge in any language you want. Here at Linio we are
big fans of PHP, Kotlin and TypeScript
 
### Submission
You can create a public repository on your GitHub account and send the
link to us.

## Environment

### Requirements

- php-cli or wamp/lamp
- PHP 7.1, preferred 7.1.6
- Composer (see: https://getcomposer.org/doc/00-intro.md)

### Installation

1. Download or clone the repository
2. Execute the composer command in project root:
```
    composer install
```
4. Run challenge php script in project root:
```
    php sample.php
```

### Unit test

To run the PHPUnit tests execute the follow command in Terminal from project root:

```
    cd vendor/bin
    phpunit ../../tests/MultipleTest
    phpunit ../../tests/ResponsibilityTest
```

or, only if you've phpunit in environment, in project root:

```
    phpunit -c ./tests/phpunit.xml
```

### Usage

```
<?php
    require_once 'vendor/autoload.php';
    
    /*
     * Linio Client: uses chain of responsibility pattern
     */
    $linioClient = new \Linio\Client();
    $linioClient->getResult()->toPrintConsole();
    
    /*
     * Linio Lookup: uses recursion and lookup table
     */
    $linioLookup = new \Linio\Lookup();
    $linioLookup->getResult()->toPrintConsole();
    
    /*
     * The method getResult():
     *
     * getResult()->toJson() : strings
     * getResult()->toArray() : array
     * getResult()->toPrintConsole() : void
     * getResult()->toPrintHtml() : void
     */
```
