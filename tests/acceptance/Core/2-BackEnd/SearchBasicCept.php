<?php

$I = new AcceptanceTester($scenario);
$I->amLoggedIn();

$I->amOnPage('civicrm/contact/search?reset=1');
$I->see('Find Contacts');
$I->see('Edit Search Criteria');

$I->executeJS('cj("#contact_type").val("Individual");');
$I->submitForm('#Basic', ['sort_name' => 'Sharyn Cruz-Wilson']);

// Only one result, and the correct one with all attributes
$I->see('1 Contact');
$I->see('Cruz-Wilson, Sharyn');
$I->see('773Z Second Way S');
$I->see('Dimmitt');
$I->see('TX');
$I->see('79027');
$I->see('United States');
$I->see('sharyncruz-wil...'); // Truncated email address
$I->see('747-5246');

// There are only 2 links in the alphabetical filter ('D' and 'All', others are inactive)
$I->seeNumberOfElements('#alpha-filter a', 2);