<?php

namespace DanielMaier\Selenium\Tests\Unit\Selenium;

use PHPUnit_Extensions_Selenium2TestCase;

class WebTest extends PHPUnit_Extensions_Selenium2TestCase
{
    protected function setUp()
    {
        $this->setBrowser('firefox');
        $this->setBrowserUrl('http://www.example.com/');
    }

    public function testTitle()
    {
        $this->url('http://www.example.com/');
        $this->assertEquals('Example WWW Page', $this->title());
    }
}