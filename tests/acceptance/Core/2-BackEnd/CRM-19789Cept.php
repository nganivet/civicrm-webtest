<?php

$I = new AcceptanceTester($scenario);
$I->amLoggedIn();

$I->amOnPage('civicrm/event/search?reset=1');
$I->executeJS('cj("#event_id").val(1);');
$I->submitForm('#Search',[]);
$I->see('Results'); // We need to have at least 2 results

// $I->checkOption('#toggleSelect');
// click on the Action, Create Smart Group button
