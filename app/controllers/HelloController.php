<?php

use Phalcon\Mvc\Controller;

class HelloController extends Controller {
  public static function says($name) {
    echo "Haii $name!";
  }
}
