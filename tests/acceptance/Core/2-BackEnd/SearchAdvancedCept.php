<?php

$I = new AcceptanceTester($scenario);
$I->amLoggedIn();

$I->amOnPage('civicrm/contact/search/advanced?reset=1');
$I->see('Advanced Search');
$I->see('Search Criteria');

// CRM-19957
// $I->submitForm('#Advanced');
// $I->dontSee('DB Error');