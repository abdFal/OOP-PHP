<?php

try {
  // code that might throw an exception
  $file = fopen("non_existent_file.txt", "r");
  if (!$file) {
    throw new Exception("File not found");
  }
  // other code here
} catch (Exception $e) {
  // exception handling code
  echo "An exception was caught: " . $e->getMessage();
} finally {
  // code to be executed regardless of exception
  if ($file) {
    fclose($file);
  }
}
?>
