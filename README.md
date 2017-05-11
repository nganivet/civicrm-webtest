# civicrm-webtest

This repository contains webtests for the CiviCRM software.

# Setup
- create a Drupal + CiviCRM instance from the database backups in the test/_data folder
- install codeception (cf. http://codeception.com/install)
- install selenium server and the chrome webdriver (cf. http://codeception.com/docs/modules/WebDriver#Local-Testing)
- copy the local.tpl.yml file to local.tpl and customize with your settings
- execute 'codecept run'