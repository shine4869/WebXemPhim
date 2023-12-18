<?php
function view($view, $data = [])
{   
  $file = APPROOT . '\src\View' . '\\' . $view . '.php';
  // Check for view file
  //echo 'file: ' . $file;
  if (is_readable($file))
  {
    //$users = $data;
    if (isset($data['webxemphim'])) {
      $films = $data['webxemphim'];
    } else if (isset($data['webxemphim'])) {
      $films = $data['webxemphim'];
    } else {
      echo 'The key does not exist in the array.';
    }
    require_once $file;
  }
  else
  {
    // View does not exist
    die('<h1> 404 Page not found </h1>');
  }
}