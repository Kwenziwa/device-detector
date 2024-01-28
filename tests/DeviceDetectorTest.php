<?php

namespace Kwenziwa\DeviceDetector\Tests;

use Kwenziwa\DeviceDetector\DeviceDetector;
use PHPUnit\Framework\TestCase;

class DeviceDetectorTest extends TestCase
{
    public function testIsMobile()
    {
        $detector = new DeviceDetector();
        $this->assertFalse($detector->isMobile());
    }

    public function testIsTablet()
    {
        $detector = new DeviceDetector();
        $this->assertFalse($detector->isTablet());
    }

    public function testIsDesktop()
    {
        $detector = new DeviceDetector();
        $this->assertTrue($detector->isDesktop());
    }

    public function testGetDeviceType()
    {
        $detector = new DeviceDetector();
        $this->assertEquals('desktop', $detector->getDeviceType());
    }

    public function testGetOSType()
    {
        $detector = new DeviceDetector();
        $this->assertEquals('Unknown', $detector->getOSType());
    }
}
