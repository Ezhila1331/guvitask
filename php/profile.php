<?php

// this page is to store the  profile information into mangoDb
session_start();

if(!isset($_SESSION['user_id'])) {
  
  header('Location: login.php');
  exit();
}
$mongo = new ("mongodb://localhost:27017");
$user_id = $_SESSION['user_id'];
$filter = ['_id' => new ($user_id)];
$options = [];
$cursor = $mongo->executeQuery('database_name.collection_name', $query);
$user_profile = current($cursor->toArray());

echo "EducationQualication: " . $user_profile->EducationQualication . "<br>";
echo "Age: " . $user_profile->age . "<br>";
echo "DOB: " . $user_profile->dob . "<br>";
echo "Contact number: " . $user_profile->contactnumber . "<br>";
echo "skills: " . $user_profile->skills . "<br>";
echo "language: " . $user_profile->language . "<br>";
?>

