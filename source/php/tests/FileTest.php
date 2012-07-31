<?php

class FileTest extends PHPUnit_Framework_TestCase
{
	public $file;

	public function setUp()
	{
		parent::setUp();

		// We have to mock an uploaded file...
		$file = array(
			'name' => "test_file.doc",
			'type' => "application/msword",
			'size' => "1000000",
			'tmp_name' => "Lhdf8yajskdl",
			'error' => 0
		);

		$this->file = new \NWOPUG\FTP\File($file);
	}

	public function testConstructor()
	{
		var_dump($this->file);
		$this->assertInstanceOf("NWOPUG\FTP\File", $this->file);
	}
}