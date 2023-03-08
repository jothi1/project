<?php
  //   $host = "host= localhost";
  //   $port = "port= 5432";
  //   $dbname = "dbname = test";

  // $credentials= "user = postgres password = user";
    
  //  $db = pg_connect("$host $port $dbname $credentials");
     
  $db=pg_connect("host=localhost port=5432 dbname=test user=postgres password=user");
  if($db)
  echo "connected";
//else
   //echo "connection failed";
?>