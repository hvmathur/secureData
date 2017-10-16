<?php
/**
 * Test Assertions.
 */
use Harsh\Crypto\Crypto;
 
class CryptoTest extends PHPUnit_Framework_TestCase {
	
	  

  // will test if seed is of length 16 as MCRYPT_RIJNDAEL_128 support length param of 16, 32, 64 as of php 5.3.x
  public function testgetKeyLength()
  {
	   try{
   			 $crypto = new Crypto("fsdfs", MCRYPT_RIJNDAEL_128);
	 }
	 catch(Exception $e)
	 {
			throw new Exception('Failed to initialize class');
	 }
    
	$totLen=16;
	$getLen=strlen($crypto->getKeyLength('mykey'));
	$this->assertEquals($totLen, $getLen);
  }
  
   // Encrypt returns an encrypted value
   public function testEncrypt()
  {
	 try{
   			 $crypto = new Crypto("fsdfs", MCRYPT_RIJNDAEL_128);
	 }
	 catch(Exception $e)
	 {
			throw new Exception('Failed to initialize class');
	 }
	$a_string="ATestString";
	$encrypt_string=$crypto->Encrypt($a_string);
	$blankValue='';
	$this->assertNotEmpty($encrypt_string,"Eccrypt returns an empty string");
  }
  
 // check if Encrypt returns a string without '&' and can be passed as query string
   public function testEncryptDataIsPassesAsQueryString()
  {
	try{
   			 $crypto = new Crypto("fsdfs", MCRYPT_RIJNDAEL_128);
	 }
	 catch(Exception $e)
	 {
			throw new Exception('Failed to initialize class');
	 }
     $a_string="ATestString";
	 $encrypt_string=$crypto->Encrypt($a_string);
	 if (preg_match('/[&]/', $encrypt_string)) {
        $this->fail();
     }	
	  
  }
    // check if decrypt is returning same string thatr has been encrypted
    public function testDecrypt()
  {
	   try{
   			 $crypto = new Crypto("fsdfs", MCRYPT_RIJNDAEL_128);
	 }
	 catch(Exception $e)
	 {
			throw new Exception('Failed to initialize class');
	 }
	  $a_string="ATestString";
	$encrypt_string=$crypto->Encrypt($a_string);
	$decrypt_string=$crypto->Decrypt($encrypt_string);
	$this->assertEquals($a_string, $decrypt_string);
	 
  }
  
}