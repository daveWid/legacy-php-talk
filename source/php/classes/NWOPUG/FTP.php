<?php

namespace NWOPUG;

class FTP
{
	private $file;
	private $connection_id;

	public function __construct(array $file, array $config)
	{
		$this->file = $file;
		$this->connection_id = ftp_connect($config['host']) or die('Cannot connect to host');
		ftp_login($this->connection_id, $config['user'], $config['password']);
	}

	public function isFileValid()
	{
		$valid = array(
			'application/msword',
			'application/pdf'
		);

		return in_array($this->file['filetype'], $valid);
	}

	public function upload($path)
	{
		return ftp_put($this->connection_id, $path, $this->file['filename'], \FTP_ASCII);
	}

	public function __destruct()
	{
		if ($this->connection_id !== null) {
			ftp_close($this->connection_id);
		}
	}
}
