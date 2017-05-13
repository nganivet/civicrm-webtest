# CiviCRM Web Tests 

This repository contains Web Tests for CiviCRM.

# Setup

* Clone the civicrm-webtests repository.
* Create a testing CiviCRM instance.
* [Install Codeception](http://codeception.com/install)
* Codeception tests can be run with local browser or headless.
    * To watch the tests with a local browser, [install Selenium Server and the Chrome WebDriver](http://codeception.com/docs/modules/WebDriver#Selenium).
        * [Download the lastest Selenium .jar](http://docs.seleniumhq.org/download/).  Selenium 3.x requires Java 1.8.  Selenium 2.x requires Java 1.7.
        * [Download ChromeDriver](https://sites.google.com/a/chromium.org/chromedriver/getting-started) to use Chrome.  GeckoDriver is available to use Firefox.  Anecdotally Chrome is faster.  ChromeDriver 2.29 requires Chrome 58+
    * For headless testing, [install PhantomJS](http://codeception.com/docs/modules/WebDriver#PhantomJS).
* Copy of local.tpl.yml file to local.yml and complete with your testing envrionment settings.  Note that some tests require a database connection.
* Run all the included tests with 
    ``` 
    codecept run
    ```
    * Run a single Acceptance test, e.g. the Basic Search test, with
        ``` 
        codecept run tests/acceptance/Core/Authenticated/BasicSearchCept.php
        ```
