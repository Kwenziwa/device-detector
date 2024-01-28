<?php

namespace Kwenziwa\DeviceDetector;

use Detection\MobileDetect;

class DeviceDetector
{
    protected $detector;

    public function __construct()
    {
        $this->detector = new MobileDetect;
    }

    public function isMobile()
    {
        return $this->detector->isMobile();
    }

    public function isTablet()
    {
        return $this->detector->isTablet();
    }

    public function isDesktop()
    {
        return !$this->isMobile() && !$this->isTablet();
    }

    public function isIOS()
    {
        return $this->detector->is('iOS');
    }

    public function isAndroidOS()
    {
        return $this->detector->is('AndroidOS');
    }

    public function getOSType()
    {
        if ($this->detector->is('iOS')) {
            return 'iOS';
        } elseif ($this->detector->is('AndroidOS')) {
            return 'Android';
        } elseif ($this->detector->is('WindowsMobileOS') || $this->detector->is('WindowsPhoneOS')) {
            return 'Windows Mobile';
        } elseif ($this->detector->is('BlackBerryOS')) {
            return 'BlackBerry';
        } elseif ($this->detector->is('Symbian')) {
            return 'Symbian';
        } else {
            return 'Unknown';
        }
    }

    public function getDeviceType()
    {
        if ($this->isTablet()) {
            return 'tablet';
        } elseif ($this->isMobile()) {
            return 'mobile';
        } else {
            return 'desktop';
        }
    }

    public function getBrowser()
    {
        $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';
        $browserInfo = get_browser($userAgent, true);
        return $browserInfo['browser'] ?? 'Unknown';
    }
}
