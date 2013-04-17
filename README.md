# Introduction to Behat Mink Selenium Testing

Basically I just wanted to show you very very quickly how to get your
first Behat, Mink, and Selenium test up and running.

## 1. Installing Requirements

### Composer and Libraries

    curl -s https://getcomposer.org/installer | php
    php composer.phar install

### Selenium Server

You will want to fetch the latest Selenium Server JAR file from [here](http://seleniumhq.org/download/)

    wget http://selenium.googlecode.com/files/selenium-server-standalone-2.32.0.jar
    java -jar selenium-server-standalone-2.32.0.jar

## 2. Running Your Tests

    php bin/behat

That's it! For more information, look at `features/basic.feature`
