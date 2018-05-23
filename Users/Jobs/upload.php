<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["resume"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["resume"]["tmp_name"]);
    if($check !== false) {
        echo "File is a Document - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not a Document. Accepts .docx, .doc, .odt, .pdf, .rtf, .txt up to 1MB.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["resume"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "pdf" && $imageFileType != "docx" && $imageFileType != "doc"
    && $imageFileType != "odt" ) {
    echo "Sorry, Accepts .docx, .doc, .odt, .pdf, .rtf, .txt up to 1MB.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["resume"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["resume"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}