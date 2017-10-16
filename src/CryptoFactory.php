<?php
namespace Harsh\Crypto;
require_once('Crypto.php');
class CryptoFactory
{
	
    public static function cryptoTech($key, $enc_cypher)
    {
		
     return new Crypto($key, $enc_cypher);
    }
}

?>