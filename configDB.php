<?php

  $link=mysqli_connect("shareddb-w.hosting.stackcp.net","hope_database-3134392bcf","Baba@123","hope_database-3134392bcf");
  //mysql_select_db("hope");
  if(mysqli_connect_error()){
    die("There was an error connecting to the database");
  }