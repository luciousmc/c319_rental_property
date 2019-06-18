<?php
require_once('credentials.php');
require_once('functions.php');

$target_dir = "uploads/";
$file_path = $target_dir . basename($_FILES["imageToUpload"]["tmp_name"]);
$file_name = $target_dir . basename($_FILES["imageToUpload"]["name"]);
$property = $_POST['property_id'];
$path = '/api/' .$file_name;
$uploadOk = 1;
if (!(is_dir($target_dir))) {
    mkdir($target_dir);
}

$imageFileType = strtolower(pathinfo($file_name,PATHINFO_EXTENSION));

if ($_FILES["imageToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    print($imageFileType);
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";

} else {
    if (move_uploaded_file($_FILES["imageToUpload"]["tmp_name"], $file_name)) {
        $query = "INSERT INTO `property_images`(`property_id`, `url`) VALUES ('$property','$path')";
        $result = mysqli_query($conn, $query);

        echo "The file $file_name has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>