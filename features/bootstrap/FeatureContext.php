<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, SnippetAcceptingContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given I have entered :arg1 into the calculator
     */
    public function iHaveEnteredIntoTheCalculator($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When I press add
     */
    public function iPressAdd()
    {
        throw new PendingException();
    }

    /**
     * @Then the result should be :arg1 on the screen
     */
    public function theResultShouldBeOnTheScreen($arg1)
    {
        throw new PendingException();
    }
}
