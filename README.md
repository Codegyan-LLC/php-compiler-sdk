# Codegyan PHP Compiler SDK

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE.txt)
[![PHP](https://img.shields.io/badge/php-%5E8.1.0-blue)](https://www.php.net/)
[![Packagist](https://img.shields.io/packagist/v/codegyan/php-compiler-sdk)](https://packagist.org/packages/codegyan/php-compiler-sdk)
[![Packagist](https://img.shields.io/packagist/dt/codegyan/php-compiler-sdk)](https://packagist.org/packages/codegyan/php-compiler-sdk)


This SDK provides a convenient way to interact with the Codegyan PHP Compiler API, allowing you to compile PHP code programmatically.

## Installation

You can install the SDK via [Composer](https://getcomposer.org/). Run the following command:

```bash
composer require codegyan/php-compiler-sdk
```

## Usages
Before using the SDK, you need to obtain an API key and client ID from CodeGyan. Follow these steps to get your API credentials:

1. **Sign Up/Login**: If you don't have an account, sign up for a [Codegyan account](https://www.codegyan.in/). If you already have an account, log in to your dashboard.

2. **Get Credentials**: Once logged in, navigate to the [Developer Console](https://developer.codegyan.in/) or API settings in your account dashboard. Here, you will find your API key and client ID. Copy these credentials and use them when initializing the SDK client in your code.

Here's an example of how to initialize the SDK client with your API key and client ID:


```php
<?php

require_once 'vendor/autoload.php';

use Codegyan\Compiler\Client;

// Replace 'YOUR_API_KEY' and 'YOUR_CLIENT_ID' with your actual API key and client ID
$apiKey = 'YOUR_API_KEY';
$clientId = 'YOUR_CLIENT_ID';

// Initialize the SDK client
$compiler = new Client($apiKey, $clientId);

// PHP code to be compiled
$code = '<?php echo "Hello, world!"; ?>';

try {
    // Compile PHP code
    $compiledCode = $compiler->compilePHPCode($code);

    // Check if the compiled code is equal to 15
    if ($compiledCode === 15) {
        echo "Compiled code: " . $compiledCode;
    } else {
        echo $compiledCode;
    }
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}

?>
```

## Features

- Compile PHP Code: The SDK allows you to compile PHP code using the Codegyan PHP Compiler API.
- Error Handling: Proper error handling is implemented to catch and handle exceptions thrown during API requests.
- Customization: You can customize the SDK by passing different parameters to the constructor or by modifying the code to fit your specific requirements.

##Testing

The SDK includes PHPUnit tests to ensure its functionality is working as expected. You can run the tests using the following command:

```bash
vendor/bin/phpunit
```

## Contributing
Contributions are welcome! Feel free to submit bug reports, feature requests, or pull requests to help improve this SDK.

## License
This Codegyan SDK is open-sourced software licensed under the **[MIT license](https://opensource.org/licenses/MIT)**.
