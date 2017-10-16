<?php
/**
 * Below is the example call of custom encryption techniques using procedure or class in php
 * File contains call using namespaces
 */
namespace Harsh\Crypto;
require_once('CryptoFactory.php');

//Creating a new instance of the crypter with RIJNDAEL_256 encryption
$crypter=CryptoFactory::cryptoTech("dstryrt23k4lk", MCRYPT_RIJNDAEL_128);



//Procedual
echo "Procedual<br>";
proceduralFunction();

echo "<br>";

//Object oriented
echo "Object oriented<br>";
$obj = new classMethods();
$obj->tech();

//Procedual - Function
function proceduralFunction(){
	$data = "Come on over for hot dogs and soda!///&&&";
	$encrypted = $GLOBALS["crypter"]->Encrypt($data);
	$decrypted = $GLOBALS["crypter"]->Decrypt($encrypted);
	$keyLen = strlen($encrypted);
		echo "Original: ".$data."<br>";
		echo "Encrypted: ".$encrypted."<br>";
		echo "Decrypted: ".$decrypted."<br>";
		echo "Key Length: ".$keyLen."<br>";
}

//Object oriented - Method
class classMethods{
	public function tech(){
		$data = "ATestString";
		$encrypted = $GLOBALS["crypter"]->Encrypt($data);
		$decrypted = $GLOBALS["crypter"]->Decrypt($encrypted);
		$keyLen = strlen($encrypted);
		
		echo "Original: ".$data."<br>";
		echo "Encrypted: ".$encrypted."<br>";
		echo "Decrypted: ".$decrypted."<br>";
		echo "Key Length: ".$keyLen."<br>";
	}
}

?>