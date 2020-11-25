<?php
require 'functions/testfunctions.php';
class LoginTest extends \PHPUnit_Framework_TestCase{
	public function checkLoginUsername(){
	  	$checkCrite = [
	  		'username' => '',
	  		'password' => 'demopassword'
  		];

  		$testLogin = loginTesting($checkCrite);
		$this->assertFalse($testLogin);
	}
	public function checkLoginPassword(){
	  	$checkCrite = [
	  		'username' => 'demousername',
	  		'password' => ''
  		];

  		$testLogin = loginTesting($checkCrite);
		$this->assertFalse($testLogin);
	}
	public function checkLoginAll(){
		$checkCrite = [
	  		'username' => 'demousername',
	  		'password' => 'demopassword'
  		];

  		$testLogin = loginTesting($checkCrite);
		$this->assertTrue($testLogin);
	}
}