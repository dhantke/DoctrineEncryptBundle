<?php

namespace Bytescreen\DoctrineEncryptBundle\Encryptors;

/**
 * Class for aes-128-gcm encryption
 * 
 * @author Bytescreen
 */
class AES256CBCEncryptor extends OpenSSLEncryptor {

    protected $method = "aes-256-cbc";
    
}
