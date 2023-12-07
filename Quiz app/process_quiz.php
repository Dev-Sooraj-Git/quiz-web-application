<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process the uploaded question image
    $questionImagePath = 'question_images/';
    $questionImageName = 'question_' . time() . '.png';
    move_uploaded_file($_FILES['questionImage']['tmp_name'], $questionImagePath . $questionImageName);

    // Process the uploaded options image
    $optionsImagePath = 'options_images/';
    $optionsImageName = 'options_' . time() . '.png';
    move_uploaded_file($_FILES['optionsImage']['tmp_name'], $optionsImagePath . $optionsImageName);

    // Save the image file names and answer to a database or file as needed
    $answer = $_POST['answer'];

    // Redirect or perform any additional actions after processing
    header('Location: quiz_dashboard.php');
    exit();
}
?>
