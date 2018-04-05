<?php
$servername = "localhost";//put the required here
$username = "teamwfow_form_admin";//put the required here
$password = "O7XKuzrhwvIf";//put the required here
$dbname = "teamwfow_truttr_form";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//'".$_POST["username"]."',
//name
//contact number
//email id
//current occupation[options: student,employed,unemployed]
//scale web development
//scale server side
//scale android app
//scale ios app develo
//have you been involved product marketing
//have more skills? let us know
$full_name = mysqli_real_escape_string($conn, $_REQUEST['full_name']);
$contact_number = mysqli_real_escape_string($conn, $_REQUEST['contact_number']);
$email_id = mysqli_real_escape_string($conn, $_REQUEST['email_id']);
$occupation = mysqli_real_escape_string($conn, $_REQUEST['occupation']);
$web_dev = mysqli_real_escape_string($conn, $_REQUEST['web_dev']);
$server_dev = mysqli_real_escape_string($conn, $_REQUEST['server_dev']);
$android_dev = mysqli_real_escape_string($conn, $_REQUEST['android_dev']);
$ios_dev = mysqli_real_escape_string($conn, $_REQUEST['ios_dev']);
$marketing_skills = mysqli_real_escape_string($conn, $_REQUEST['marketing_skills']);
$other_skills = mysqli_real_escape_string($conn, $_REQUEST['other_skills']);


$sql = "INSERT INTO truttr_form_input (full_name, contact_number,email_id,occupation,web_dev,server_dev,android_dev,ios_dev,marketing_skills,other_skills)
VALUES ('$full_name', '$contact_number', '$email_id' , '$occupation' , '$web_dev' , '$server_dev' , '$android_dev' ,'$ios_dev','$marketing_skills','$other_skills')";

if (mysqli_query($conn, $sql)) {
    echo "Thanks for the reply . we will get in touch with you at the earliest.";
} else {
    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>