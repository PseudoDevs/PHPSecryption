<?php

namespace iamjohndev;

class PHPSecryption
{
    private $encryptionKey;
    private $decryptionKey;

    public function __construct($encryptionKey)
    {
        $this->encryptionKey = $encryptionKey;
        // Set decryption key to the same as encryption key by default
        $this->decryptionKey = $encryptionKey;
    }

    public function encrypt($data)
    {
        $encryptedData = openssl_encrypt($data, 'AES-256-CBC', $this->encryptionKey, 0, $this->encryptionKey);
        return $encryptedData;
    }

    public function decrypt($encryptedData, $decryptionKey = null)
    {
        // If decryption key is provided, use it, otherwise use the default decryption key
        $decryptionKey = $decryptionKey ?? $this->decryptionKey;

        $decryptedData = openssl_decrypt($encryptedData, 'AES-256-CBC', $decryptionKey, 0, $decryptionKey);

        // Check if decryption was successful, if not, return an error message
        if ($decryptedData === false) {
            throw new \Exception('Decryption key mismatch or invalid encrypted data');
        }

        return $decryptedData;
    }

    public function setDecryptionKey($decryptionKey)
    {
        $this->decryptionKey = $decryptionKey;
    }
}
