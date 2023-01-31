<?php
// Types of error
// Throwable
// Error
// ArithmeticError
// AssertionError
// ParseError
// TypeError
// ArgumentCountError
// Exception
// InvalidArgumentException

// RuntimeException
class Connection{
  public function connect(){
    throw new RuntimeException('Anda harus mengimplement asikan method connect() sesuai dengan database driver yang anda gunakan.');   
}
}

try{$myConnect = new Connection;
  $myConnect->connect();
} catch(RuntimeException $e){
  echo $e -> getMessage();
  echo PHP_EOL;
}
// DivisionByZeroError
class Errorable
{
public static function calculate(int $number)
{ 
  return ($number % 0);
}
}
// Multiple catch
try{
  Errorable::calculate(7);
} catch(RuntimeException $e){
  echo "Harusnya tidak tampil";
} catch(DivisionByZeroError $e){
  echo $e -> getMessage();
  echo PHP_EOL;
} finally{
  echo "error nya tidak sesuai";
}

echo PHP_EOL;
echo 'Ini dieksekusi';
echo PHP_EOL;

// More example
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
