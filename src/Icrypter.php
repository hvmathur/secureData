<?php
/**
 * When a class implements an interface it has to implement the methods given in that interface (Standard)
 */
namespace Harsh\Crypto;
interface Icrypter{
	public function __construct($Key, $Algo = MCRYPT_BLOWFISH);
	public function Encrypt($data);
	public function Decrypt($data);
}

?>