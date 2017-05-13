<?php


/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = NULL)
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
  use _generated\AcceptanceTesterActions;

   /**
    * Login & logout actions
    */
  function amLoggedIn() {
    $I = $this;

    // if no session snapshot exists - login
    if (!$I->loadSessionSnapshot('login')) {
      $cmsUsername = $I->getConfig('cmsUsername');
      $cmsPassword = $I->getConfig('cmsPassword');

      $cms = $I->getConfig('cms');
      switch ($cms) {
        case 'drupal':
          $I->amOnPage('/user/login');
          $I->fillField('#edit-name', $cmsUsername);
          $I->fillField('#edit-pass', $cmsPassword);
          $I->click('Log in');
          $I->seeElement('body.logged-in');
          break;
        case 'wordpress':
          $I->amOnPage('/wp-login');
          $I->fillField('#edit-name', $cmsUsername);
          $I->fillField('#edit-pass', $cmsPassword);
          $I->click('Log in');
          $I->seeElement('body.logged-in');
          break;
        case 'joomla':
          $I->amOnPage('/');
          $I->fillField('#edit-name', $cmsUsername);
          $I->fillField('#edit-pass', $cmsPassword);
          $I->click('Log in');
          $I->seeElement('body.logged-in');
          break;
      }
      $I->saveSessionSnapshot('login');
    }
  }
}
