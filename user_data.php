<?php

$name = <?php echo $_POST["name"]; ?><br>
$email = <?php echo $_POST["email"]; ?><br>
$dob = <?php echo $_POST["dob"]; ?>!<br>
$gender = <?php echo $_POST["gender"]; ?><br>
$country = <?php echo $_POST["country"]; ?>!<br>

// Create an array of elements
$list = array(
    ['Name', 'Email', 'DOB', 'Gender', 'Country'],
    ['name', 'email', 'dob', 'gender', 'country']);

// Open a file in write mode ('w')
$fp = fopen('userdata.csv', 'w');

// Loop through file pointer and a line
foreach ($list as $fields) {
    fputcsv($fp, $fields);
}

fclose($fp);

print_r($list)

?>