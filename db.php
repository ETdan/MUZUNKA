<?php
   $servername = "localhost";
   $username = "root";
   
   // Create connection
   $conn = new mysqli($servername, $username);
   
   // Check connection
   if ($conn->connect_error) {
     die("Connection failed: " .$conn->connect_error);
   }
  //  echo "Connected successfully";

//  creat a database

$sql = "CREATE DATABASE playlist";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
$sql = "CREATE DATABASE music";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

//select database

$conn->select_db('playlist');
// create a table

// $sql="
// CREATE TABLE users(
//   id INT primary key AUTO_INCREMENT,
//   name VARCHAR(10),
//   password VARCHAR(32),
//   email VARCHAR(255)
// );";
// $sql="
// CREATE TABLE musics(
//   id INT primary key AUTO_INCREMENT,
//   mname VARCHAR(10),
//   url VARCHAR(255),
//   artist VARCHAR(50)
//   album VARCHAR(50)
// );";
$sql="
CREATE TABLE playlist(
  id INT primary key AUTO_INCREMENT,
  pname VARCHAR(10),
  name VARCHAR(10),
  list VARCHAR(255)
);";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully</br>";
} else {
  echo "Error creating table: " . $conn->error;
}

// insert to table

// $sql = "insert into users (fname,lname,email)
// values ('daniel','asfaw','da@gmil.com');";
// if ($conn->query($sql) === TRUE) {
//   echo "data inserted successfully</br>";
// } else {
//   echo "Error creating table:</br> " . $conn->error;
// }

// data selection
// static $number=1;
// function getstatment($number){
//   return "SELECT * FROM php WHERE id>=$number limit 5;";
// }

//   $num=$_REQUEST['sql'];
//   $search=$_REQUEST['search'];
//   $limit=$_REQUEST['limit'];

// if($num==null)
//   die("error</br>");
// else
//   $num=($num*$limit);
// $sql = "SELECT * FROM php WHERE id>=$num limit $limit;";
// $se = "SELECT * FROM php WHERE firstname='$search';";
// // $se = "SELECT * FROM php WHERE MATCH(firstname) AGAINST($search WITH QUERY EXPANSION);";
// $re = $conn->query($se);
// $result = $conn->query($sql);
// echo "<h1>Results</h1>";
// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "<table>";
//     // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]." -email: ".$row['email'].' -salary '.$row['salary'] ."<br>";
//     echo "<tr>" . $row['id']."</tr>".
//          "<tr>" . $row["firstname"]."</tr>".
//          "<tr>" . $row["lastname"]."</tr>".
//          "<tr>" . $row['email']."</tr>".
//          "<tr>" . $row['salary'] ."</tr>";
//     echo "</table>";
//   }
// } else {
//   echo "0 results";
// }
// echo "<h1>Search Results</h1>";
// if ($re->num_rows > 0) {
//   // output data of each row
//   while($row = $re->fetch_assoc()) {
//     echo "<table>";
//     // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]." -email: ".$row['email'].' -salary '.$row['salary'] ."<br>";
//     echo "<tr>" . $row['id']."</tr>".
//          "<tr>" . $row["firstname"]."</tr>".
//          "<tr>" . $row["lastname"]."</tr>".
//          "<tr>" . $row['email']."</tr>".
//          "<tr>" . $row['salary'] ."</tr>";
//     echo "</table>";
//   }
// } else {
//   echo "0 results";
// }
// echo "<br><br>";
$conn->close();
?>