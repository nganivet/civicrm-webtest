<?php

$I = new AcceptanceTester($scenario);
$I->amLoggedIn();

$I->amOnPage('civicrm/contact/search?reset=1');
$I->see('Find Contacts');
$I->see('Edit Search Criteria');

$I->submitForm('#Basic', ['sort_name' => 'Default Organization', 'select2-chosen-1' => 'Organization']);

// Only one result, and the correct one with all attributes
$I->see('1 Contact');
$I->see('Default Organization');
// $I->see('fixme.domainemail@example.org');

// There are only 2 links in the alphabetical filter ('D' and 'All', others are inactive)
$I->seeNumberOfElements('#alpha-filter a', 2);
