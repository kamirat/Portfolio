<?php

define('DSN', 'mysql:host=localhost;dbname=Portfolio;charset=utf8;');
define('USER', 'admin');
define('PASSWORD', '9999');

function connectDb()
{
  // $dsn = 'mysql:host=localhost;dbname=nowall;charset=utf8;';
  // $user = 'testuser';
  // $password = '9999';

  try
  {
        $dbh = new PDO(DSN, USER, PASSWORD);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbh;


  }
  catch (PDOException $e)
  {
      echo $e->getMessage();
      exit;
  }
}

?>