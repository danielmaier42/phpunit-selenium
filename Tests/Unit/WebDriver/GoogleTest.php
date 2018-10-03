<?php

namespace DanielMaier\Selenium\Tests\Unit\WebDriver;

use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\WebDriverCapabilityType;
use Facebook\WebDriver\WebDriver;
use Facebook\WebDriver\WebDriverBy;
use PHPUnit_Framework_TestCase;

class GoogleTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var WebDriver
     */
    protected $webDriver;

    /**
     * @var string
     */
    protected $webDriverHost = 'http://localhost:4444/wd/hub';

    /**
     * @var array
     */
    protected $webDriverCapabilities = [
        WebDriverCapabilityType::BROWSER_NAME => 'chrome'
    ];

    /**
     * This Endpoint should be Tested
     *
     * @var string
     */
    protected $url = 'https://www.google.com';

    protected function setUp()
    {
        $this->webDriver = RemoteWebDriver::create(
            $this->webDriverHost,
            $this->webDriverCapabilities
        );
    }

    public function testTitle()
    {
        $this->webDriver->get($this->url);

        $this->assertEquals('Google', $this->webDriver->getTitle());
    }

    public function testSearch()
    {
        $this->webDriver->get($this->url);

        $queryInput = $this->webDriver->findElement(WebDriverBy::name('q'));

        $this->assertNotNull($queryInput, 'Could not find Query Input with name q');

        $queryInput->sendKeys('GitHub');
        $queryInput->submit();
    }
}