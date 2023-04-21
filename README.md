# PHPSecryption - A PHP Class for Encryption and Decryption
PHPSecryption is a PHP class that provides encryption and decryption functionality using the OpenSSL library. It uses the Advanced Encryption Standard (AES) algorithm in Cipher-Block Chaining (CBC) mode for secure data encryption.

#### Features
- Strong encryption using AES-256-CBC cipher.
- Supports custom encryption and decryption keys.
- Error handling for key mismatches and invalid encrypted data.
- Namespaced under iamjohndev for easy integration into your PHP projects.
- Simple and easy-to-use API.

#### Installation
You can install PHPSecryption via Composer using the following command:

`composer require iamjohndev/phpencryption:dev-main`

Alternatively, you can manually download and include the PHPSecryption.php file in your PHP project.

# Usage
Here's an example of how to use PHPSecryption in your PHP code:

```php
use iamjohndev\PHPSecryption;

// Instantiate PHPSecryption with encryption key
$encryptionKey = 'mysecretencryptionkey';
$phpEncryption = new PHPSecryption($encryptionKey);

// Encrypt data
$data = 'Hello, world!';
$encryptedData = $phpEncryption->encrypt($data);

// Decrypt data
$decryptedData = $phpEncryption->decrypt($encryptedData);

// Display results
echo "Original data: $data\n";
echo "Encrypted data: $encryptedData\n";
echo "Decrypted data: $decryptedData\n";

```

You can also set a custom decryption key using the setDecryptionKey() method if you want to use a different key for decryption than the one used for encryption.

```php
// Set custom decryption key
$decryptionKey = 'mysecretdecryptionkey';
$phpEncryption->setDecryptionKey($decryptionKey);

```

# Error Handling
PHPSecryption provides error handling for key mismatches and invalid encrypted data. If the decryption key does not match the encryption key used, or if the encrypted data is invalid, an exception will be thrown with an appropriate error message.

```php
try {
    // Decrypt data with incorrect key
    $invalidDecryptionKey = 'incorrectdecryptionkey';
    $decryptedData = $phpEncryption->decrypt($encryptedData, $invalidDecryptionKey);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}

```

## Security Considerations
- Properly manage encryption keys and keep them confidential and protected from unauthorized access.
- Store encrypted data and encryption keys securely with appropriate access controls.
- Validate and sanitize input data to prevent potential security vulnerabilities.
- Regularly audit and review the implementation for security risks.
- Ensure compliance with applicable data protection laws and industry regulations, especially when handling sensitive data.


## Contribution
Contributions to PHPSecryption are welcome! Please submit issues and pull requests to the GitHub repository at https://github.com/iamjohndev/phpencryption.

## License
PHPSecryption is released under the MIT License, which allows for both personal and commercial use. Please see the LICENSE file for more details.

## Credits
PHPSecryption was created by [iamjohndev](https://github.com/iamjohndev) and is inspired by various PHP encryption libraries and best practices for encryption and key management.