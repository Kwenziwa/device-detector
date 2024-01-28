
# Device Detector

 Device Detector is a convenient package for  applications, offering easy detection of user devices and their operating systems. Utilizing the `mobiledetect/mobiledetectlib` library, this package enables applications to quickly identify device types (mobile, tablet, desktop) and operating systems (iOS, Android, etc.), enhancing the user experience and providing valuable insights.

## Features

- Detect whether the user's device is a mobile, tablet, or desktop
- Identify the operating system of the user's device (iOS, Android, etc.)
- Lightweight and easy to integrate into any  project

## Installation

Install the package via composer:

```bash
composer require kwenziwa/devicedetector
```

## Usage

After installation, you can use the DeviceDetector in your  application as follows:

```php
use Kwenziwa\DeviceDetector\DeviceDetector;

$deviceDetector = app(DeviceDetector::class);

if ($deviceDetector->isMobile()) {
    // Handle mobile device
}

if ($deviceDetector->isTablet()) {
    // Handle tablet device
}

if ($deviceDetector->isDesktop()) {
    // Handle desktop device
}
```

## Methods

### `isMobile()`

Determines if the user's device is a mobile phone.

```php
$deviceDetector->isMobile();
```

### `isTablet()`

Determines if the user's device is a tablet.

```php
$deviceDetector->isTablet();
```

### `isDesktop()`

Determines if the user's device is a desktop. This is typically the default if the device is neither a mobile nor a tablet.

```php
$deviceDetector->isDesktop();
```

### `isIOS()`

Checks if the user's device is running iOS.

```php
$deviceDetector->isIOS();
```

### `isAndroidOS()`

Checks if the user's device is running Android OS.

```php
$deviceDetector->isAndroidOS();
```
### `getDeviceType()`

Returns the type of the user's device as a string ('mobile', 'tablet', or 'desktop').

```php
$deviceType = $deviceDetector->getDeviceType();
```

### `getOSType()`

Returns the operating system of the user's device as a string (e.g., 'iOS', 'Android', 'Windows Mobile', 'BlackBerry', 'Symbian', or 'Unknown').

```bash
$osType = $deviceDetector->getOSType();
```

## Run the Tests

Run the tests using the PHPUnit command:

```php
./vendor/bin/phpunit
```
This command will execute all tests in your tests directory.
The above tests are basic and might not effectively cover all scenarios since the actual device type and OS will depend on the environment where the tests are run. In a more comprehensive test suite, you would mock the MobileDetect class to simulate different devices and operating systems. This would allow you to test all branches of your code.

## Contributing

Contributions are welcome and will be fully credited. We accept contributions via Pull Requests on [Github](https://github.com/Kwenziwa/device-detector).

## License

The  Device Detector is open-sourced software licensed under the [MIT license](LICENSE.md).
