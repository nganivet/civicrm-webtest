<?php
  /**
   * CRM-19789
   */

  $I = new AcceptanceTester($scenario);
  $I->amLoggedIn();
  
  $I->amOnPage('/civicrm/event/search?reset=1');
  $I->submitForm('#Search',[]);
  $I->see('Results');
  
  $I->click(\Codeception\Util\Locator::elementAt('//input[@class="crm-form-radio"][1]', 1));
  //$I->checkOption("/descendant::input[@type='checkbox'][2]");
  $I->wait(1);

  $I->selectOption('#select2-chosen-7', 'Group - create smart group');
