<?php

class FTPTest extends PHPUnit_Framework_TestCase
{
	public $ftp;

	public function setUp()
	{
		parent::setUp();

		// We have to mock a connection...
		$config = array(
			'host' => "ftp.testing.com",
			'port' => 21,
			'user' => "test",
			'password' => "you'llneverguess"
		);

		$this->ftp = new \NWOPUG\FTP($config);
	}

	public function testConstructor()
	{
		$this->assertInstanceOf("NWOPUG\FTP", $this->ftp);
	}
}