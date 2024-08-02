<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = ($_POST['firstname']);
    $lastName = ($_POST['lastname']);
    $address = ($_POST['address']);
    $country = $_POST['country'];
    $gender = $_POST['gender'];
    $skills = isset($_POST['skills']) ? implode(', ', $_POST['skills']) : 'None';
    $department = isset($_POST['department']) ? $_POST['department'] : 'Not Provided';

}  


echo "<h1>Review</h1>";
echo "Thanks $gender $firstName $lastName<br><br>";
echo "Please Review Your Information:<br><br>";
echo "Name: $firstName $lastName<br>";
echo "Address: $address<br>";
echo "Your Skills: $skills<br>";
echo "Department: $department<br>";

?>