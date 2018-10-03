# PHPUnit Selenium Examples

This Repository was created for showing examples of how Automated Regression Testing could be implemented in existing Projects with Selenium.

Therefore i created example tests for both, the official `phpunit/phpunit-selenium` and `facebook/webdriver` implementations found under separate directories underneath `Tests/Unit/*`
Additionally you'll find a folder called `Integration` which is for demonstrating how a "standard PHPUnit" Test could look like and to demonstrate that selenium could be used very similar.

### Installation 

```
composer install
```

### Run Unit Tests

**All Tests**
```
./vendor/bin/phpunit --verbose --testdox Tests/*
```

**Integration Tests**
```
./vendor/bin/phpunit --verbose --testdox Tests/Integration/*
```

**PHPUnit Selenium Package**
```
./vendor/bin/phpunit --verbose --testdox Tests/Selenium/*
```

**Facebook WebDriver Package**
```
./vendor/bin/phpunit --verbose --testdox Tests/WebDriver/*
```