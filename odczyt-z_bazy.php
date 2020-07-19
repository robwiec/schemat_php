<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Make Me Elvis - Send Email</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<?php
  
  $dbc = mysqli_connect('localhost', 'login', 'haslo', 'nazwa_bazy')
    or die('Brak połączenia z serwerem MySQL.');

  $query = "SELECT * FROM email_list";
  $result = mysqli_query($dbc, $query)
    or die('Błąd w zapytaniu do bazy danych.');
 
  while ($row = mysqli_fetch_array($result)){
    $to = $row['email'];
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    
    echo ' adres : ' . $to . '<br />';
    echo 'imie : ' . $first_name . '<br />';
    echo 'nazwisko : ............... ' . $last_name . '<br />';
  } 

  mysqli_close($dbc);
?>

</body>
</html>
