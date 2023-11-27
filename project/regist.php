<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $owner_name = $_POST["owner_name"];
    $contact_number = $_POST["contact_number"];
    $pet_name = $_POST["pet_name"];
    $pet_type = $_POST["pet_type"];
    $special_requirements = $_POST["special_requirements"];

    // Perform any necessary processing or database storage here

    echo "Registration successful!";
} else {
    // Redirect or handle other cases as needed
    echo "Invalid request.";
}
?>
