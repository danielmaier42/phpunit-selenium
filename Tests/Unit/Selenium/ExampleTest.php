<?php

namespace DanielMaier\Selenium\Tests\Unit\Selenium;

use PHPUnit_Extensions_Selenium2TestCase;

class ExampleTest extends PHPUnit_Extensions_Selenium2TestCase
{
    /**
     * This Endpoint should be Tested
     *
     * @var string
     */
    protected $url = 'http://www.example.com';

    protected function setUp()
    {
        $this->setBrowser('chrome');
        $this->setBrowserUrl($this->url);
    }

    public function testTitle()
    {
        $this->url($this->url);
        $this->assertEquals('Example Domain', $this->title());
    }
}