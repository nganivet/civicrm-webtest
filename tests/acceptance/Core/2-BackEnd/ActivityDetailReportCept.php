<?php
  $I = new AcceptanceTester($scenario);
  $I->amLoggedIn();

  $I->amOnPage('/civicrm/report/instance/3?force=1&reset=1');
  $I->canSee('Activity Details');
  $I->canSee('Row(s) Listed');
