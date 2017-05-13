# CiviCRM Web Tests 

This repository contains Web Tests for CiviCRM.

# Setup

* Clone the civicrm-webtests repository.
* Create a CiviCRM testing instance.
    * This repository is intended for use with real data, but it's not a best practice to test on live sites.
* [Install Codeception](http://codeception.com/install)
* Codeception tests can be run with a local browser (Chrome or Firefox) or headless.
    * To watch the tests with a local browser, [install Selenium Server and a WebDriver](http://codeception.com/docs/modules/WebDriver#Selenium).
        * [Download the lastest Selenium .jar](http://docs.seleniumhq.org/download/).  Selenium 3.x requires Java 1.8.  Selenium 2.x requires Java 1.7.
        * [Download ChromeDriver](https://sites.google.com/a/chromium.org/chromedriver/getting-started) to use Chrome, or [download GeckoDriver](https://github.com/mozilla/geckodriver) to use Firefox.  Anecdotally Chrome is faster.  Be sure to check the Webdriver for their respective browser version requirements.
    * For headless testing, [install PhantomJS](http://codeception.com/docs/modules/WebDriver#PhantomJS).
* Copy the local.tpl.yml template file to local.yml and complete with your testing environment settings.  Note that some tests require a database connection.
* Run all the included tests with 
    ``` 
    codecept run
    ```
    * Run a single Acceptance test, e.g. the Basic Search test, with
        ``` 
        codecept run tests/acceptance/Core/Authenticated/BasicSearchCept.php
        ```
* [Write tests and share them!](http://codeception.com/docs/03-AcceptanceTests)
