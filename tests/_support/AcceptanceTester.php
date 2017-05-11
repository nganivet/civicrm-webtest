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

  private $_amLoggedIn = false;

  function amLoggedIn() {
    if (!$this->_amLoggedIn) {
      $this->amOnPage('/');
      $this->fillField('#edit-name', '');
      $this->fillField('#edit-pass', '');
      $this->click('Log in');
      $this->see('CiviCRM');
      $this->_amLoggedIn = true;
    }
  }

  function amNotLoggedIn() {
    if ($this->_amLoggedIn) {
      $this->amOnPage('/user/logout');
      $this->see('User login');
      $this->_amLoggedIn = FALSE;
    }
  }
}
