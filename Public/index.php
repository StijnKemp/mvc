<?php

require_once "autoloader.php";

function slugify($text, $seperator = false) {
    // replace non letter or digits by -
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);
  
    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
  
    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);
  
    // trim
    $text = trim($text, '-');
  
    // remove duplicate -
    $text = preg_replace('~-+~', '-', $text);
  
    // lowercase
    $text = strtolower($text);
  
    if($seperator) {
      $text = preg_replace('/-/', $seperator, $text);
    }
  
    if (empty($text)) {
      return 'n-a';
    }
  
    return $text;
  }