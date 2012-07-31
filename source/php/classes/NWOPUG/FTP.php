<?php

namespace NWOPUG;

class FTP
{
	private $config;

	private $connection = null;

	public function __construct(array $config)
	{
		$this->config = $config;

		$this->connection = ftp_connect($this->config['host'], $this->config['port']);
		if ($this->connection === false)
		{
			throw new \UnexpectedValueException('Can not connect to '.$this->config['host']);
		}

		$login = ftp_login($this->connection, $config['user'], $config['password']);
		if ($login === false)
		{
			throw new \UnexpectedValueException('Invalid login');
		}
	}

	public function upload($file, $path, $mode = \FTP_ASCII)
	{
		return ftp_put($this->connection, $path, $file, $mode);
	}

	public function __destruct()
	{
		ftp_close($this->connection);
	}
}
