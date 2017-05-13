<?php
 
$I = new AcceptanceTester($scenario);
$I->amLoggedIn();

$I->haveInDatabase('civicrm_extension', array(
  'type' => 'module',
  'full_name' => 'org.civicrm.module.cividiscount',
  'name' => 'CiviDiscount',
  'label' => 'CiviDiscount',
  'file' => 'cividiscount', 
  'is_active' => 1,
));

$I->amOnPage('/civicrm/a/#/mailing/new');
$I->waitForElement('#tab-mailing');
$I->see('Mailing Name');
