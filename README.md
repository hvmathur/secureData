This code is done using core PHP. Application developemnt in framework will met all the coding standards along with norms and is widely supported by dependency manager (COMPOSER)

# Explanation

Encryption and decryption class (Crypto.php).

A sample working file "CryptoExecute.php" contails both procedural and class call, run in localhost or in cmd.

An Interface base class (Icrypter.php).

Class "Crypto.php" which inherit "Icrypter.php" which is easily pluggable with any application.This call cannot be further inherited for security reasons.

A factory Class providing instance (CryptoFactory.php).

A unit test class (CryptoTest.php) under "tests/" folder, with Assertions

Followed PSR4 norms.

Followed PSR2 coding guidelines.

Tested on php 5.3 only.


# Steps (Windows setup)
   Use composer to insall dependent library
   
1. Download the all the files and folder into local-folder and name it as "Crypto".
2. Using Composer Run 'composer install' in win-CMD, command will install dependent libraries in this case "phpunit test library is only required".



      . Namespace path already set to "Harsh\Crypto", feel free to change as per your need, just modify "composer.json"   
      
      
      
# Pre-requisite
  XAMPP or WAMPP with php 5.3 
