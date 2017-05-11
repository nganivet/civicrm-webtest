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
      $username = $I->getConfig('admin_username');
      $password = $I->getConfig('admin_password');

      $I->amOnPage('/');
      $I->fillField('#edit-name', $username);
      $I->fillField('#edit-pass', $password);
      $I->click('Log in');
      $I->see('CiviCRM');
      $I->saveSessionSnapshot('login');
    }
  }
}
