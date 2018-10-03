<?php

namespace DanielMaier\Selenium\Tests\Unit\Selenium;

use PHPUnit_Extensions_Selenium2TestCase;

class GoogleTest extends PHPUnit_Extensions_Selenium2TestCase
{
    /**
     * This Endpoint should be Tested
     *
     * @var string
     */
    protected $url = 'https://www.google.com';

    protected function setUp()
    {
        $this->setBrowser('chrome');
        $this->setBrowserUrl($this->url);
    }

    public function testTitle()
    {
        $this->url($this->url);
        $this->assertEquals('Google', $this->title());
    }

    public function testSearch()
    {
        $this->url($this->url);
        $queryInput = $this->byName('q');

        $this->assertNotNull($queryInput, 'Could not find Query Input with name q');

        $queryInput->value('GitHub');
        $queryInput->submit();
    }
}