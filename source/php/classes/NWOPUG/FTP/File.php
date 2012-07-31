<?php

namespace NWOPUG\FTP;

class File
{
  private $file;

  public function __construct($file)
  {
    $this->file = $file;
  }

  public function getName()
  {
    return $this->file['name'];
  }

  public function getType()
  {
    return $this->file['type'];
  }

  public function isValid()
  {
    $validTypes = array('application/msword', 'application/pdf');
    return in_array($this->getType(), $validTypes);
  }
}
