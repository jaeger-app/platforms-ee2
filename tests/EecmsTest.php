<?php
/**
 * Jaeger
 *
 * @copyright	Copyright (c) 2015-2016, mithra62
 * @link		http://jaeger-app.com
 * @version		1.0
 * @filesource 	./tests/EecmsTest.php
 */
namespace JaegerApp\tests;

use JaegerApp\Platforms\Eecms;

/**
 * Jaeger - Craft object Unit Tests
 *
 * Contains all the unit tests for the \mithra62\Platforms\Craft object
 *
 * @package Jaeger\Tests
 * @author Eric Lamb <eric@mithra62.com>
 */
class EecmsTest extends \PHPUnit_Framework_TestCase
{

    public function testInit()
    {
        $eecms = new Eecms();
        $this->assertTrue(method_exists($eecms, 'getDbCredentials'));
        $this->assertTrue(method_exists($eecms, 'getEmailConfig'));
        $this->assertTrue(method_exists($eecms, 'getCurrentUrl'));
        $this->assertTrue(method_exists($eecms, 'getSiteName'));
        $this->assertTrue(method_exists($eecms, 'getTimezone'));
        $this->assertTrue(method_exists($eecms, 'getSiteUrl'));
        $this->assertTrue(method_exists($eecms, 'getEncryptionKey'));
        $this->assertTrue(method_exists($eecms, 'getConfigOverrides'));
        $this->assertInstanceOf('JaegerApp\\Platforms\\AbstractPlatform', $eecms);
    }
}