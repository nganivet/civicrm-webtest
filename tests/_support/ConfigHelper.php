<?php
namespace Codeception\Module;

class ConfigHelper extends \Codeception\Module
{
  protected $config = [];

  public function getConfig($key) {
    if (isset($this->config[$key])) {
      return $this->config[$key];
    } else {
      return null;
    }
  }
}