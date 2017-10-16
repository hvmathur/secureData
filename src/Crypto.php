<?php
/**
 * This class implements Icrypter and overrides the function
 * This class cannot be inherited by any class
 * It uses BLOWFISH for encryption
 */
 
namespace Harsh\Crypto;
require_once('Icrypter.php');

 final class Crypto implements Icrypter{
	private $Key;
	private $Algo;

	public function __construct($Key, $Algo = MCRYPT_BLOWFISH){
		$this->Key =substr($this->getKeyLength($Key), 0, mcrypt_get_key_size($Algo, MCRYPT_MODE_ECB));
		$this->Algo = $Algo;
	}
	 public function getKeyLength($key)
	 {
		 if (strlen($key) < 16)
		 {
			 $key = $key.str_repeat('x', max(0, 16 - strlen($key))); 
		 }
		 else
		 {
			$key=$key; 
		 }
		 return $key;
	 }
	public function Encrypt($data){
		if(!$data){
			return false;
		}
		
		$iv_size = mcrypt_get_iv_size($this->Algo, MCRYPT_MODE_ECB);
		$iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
		
		$crypt = mcrypt_encrypt($this->Algo, $this->Key, $data, MCRYPT_MODE_ECB, $iv);
		return trim(base64_encode($crypt));
	}
	
	public function Decrypt($data){
		if(!$data){
			return false;
		}
		$crypt = base64_decode($data);
		
		$iv_size = mcrypt_get_iv_size($this->Algo, MCRYPT_MODE_ECB);
		$iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
		
		$decrypt = mcrypt_decrypt($this->Algo, $this->Key, $crypt, MCRYPT_MODE_ECB, $iv);
		return trim($decrypt);
	
	}
}

?>