# PHP BDD with Behat + PHPUnit

This is a demo testing with Behat and with PHPUnit integrated.

Install demo project

    $ composer install

Run demo project

    $ ./vendor/bin/behat

---

## BDD Testing Steps

Create initial composer project

    $ composer init

Install testing packages

    $ composer require behat/behat
    $ composer require phpunit/phpunit

Initialize Behat project

    $ ./vendor/bin/behat --init

Create *.feature File (e.g. `Calculator.feature`)

```
Feature: Calculator
    In order to sum up numbers
    As a user
    I should get the result from it

Scenario: Add two numbers
    Given I have entered 50 into the calculator
    And I have entered 70 into the calculator
    When I press add
    Then the result should be 120 on the screen
```

Execute Testing - Until meet all requirement with GREEN!

    $ ./vendor/bin/behat

## Integrated with PHPUnit

When testing final result, using assertion to detect success or fail.

Put following syntax to `*Context.php` file

    use PHPUnit_Framework_Assert as PHPUnit;

Usage see [PHPUnit Assertions](https://phpunit.de/manual/current/en/appendixes.assertions.html)

---

Author: Winnie Lin

Visit [{ oc.tech.notes }](https://devmanna.blogspot.com) and welcome to discuss with me.