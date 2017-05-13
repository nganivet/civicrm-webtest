<?php
  /**
    * CRM-19742
    */
  $I = new AcceptanceTester($scenario);
  $I->amLoggedIn();
  
  $I->amOnCiviPage('/civicrm/contact/view?reset=1&cid=3&selectedChild=contribute');
  $I->waitForElement('#Search');
  $I->seeElement('#contribution_recur-1');
  
  $I->click('Edit', \Codeception\Util\Locator::elementAt('#contribution_recur-1', 1));
  $I->waitForElement('.crm-recurcontrib-form-block');
  $I->performOn('.ui-dialog', \Codeception\Util\ActionSequence::build()
    ->see('Next Scheduled Contribution Date')
  );
