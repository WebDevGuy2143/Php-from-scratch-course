<?php

class StringUtility {

  public static function shout($string) {
    return strtoupper($string) . '!';
  }

  public static function whisper($string) {
    return strtolower($string) . '.';
  }

  public static function repeat($string, $times = 2) {
    return str_repeat($string, $times);
  }
  
}

echo StringUtility::shout('hello');
echo '<br><br>';
echo StringUtility::whisper('Hello World');
echo '<br><br>';
echo StringUtility::repeat('Hello World '); // default value is set to 2
echo '<br><br>';
echo StringUtility::repeat('Hello World ', 4);