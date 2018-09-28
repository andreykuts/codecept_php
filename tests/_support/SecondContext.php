<?php

use Page\SecondPage;

class SecondContext extends AcceptanceTester implements Behat\Behat\Context\Context
{
    /**
     * @When I click on button :arg1 in Second context
     */
    public function iClickOnButtonInSecondContext($arg1)
    {
        $this->iClickOn(SecondPage::$elements[$arg1]);
    }
}