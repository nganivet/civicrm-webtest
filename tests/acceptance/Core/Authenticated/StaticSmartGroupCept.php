<?php
//CRM-19435

$I = new AcceptanceTester($scenario);
$I->amLoggedIn();

$I->amOnCiviPage('/civicrm/contact/view?reset=1&cid=3&selectedChild=group');
$I->wait(2);
$I->canSee('All organizations');
