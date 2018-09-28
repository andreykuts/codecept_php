<?php

use Page\SecondPage;
use Behat\Behat\Context;

class SecondContext extends AcceptanceTester implements Context\Context
{
    /**
     * @When I click on button :arg1 in Second context
     */
    public function iClickOnButtonInSecondContext($arg1)
    {
        $this->iClickOn(SecondPage::$elements[$arg1]);
    }
}