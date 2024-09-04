<?php
//file uploading in php
if(isset($_POST['submit'])){
    $file_name = $_FILES['file']['name'];
    $file_type = $_FILES['file']['type'];
    die($file_type);
    $file_size = $_FILES['file']['size'];
    $file_temp_location = $_FILES['file']['tmp_name'];
    $file_store = "upload/".$file_name;
    //check file type for jpg and png
    if($file_type != 'image/jpeg' && $file_type != 'image/png'){
        echo "File type is jpg or png";
    }
    //check file size
    elseif($file_size > 1000000){
        echo "Upload file upto 1MB";
    }
    else{
    move_uploaded_file($file_temp_location, $file_store);
    echo "File uploaded successfully";
    }
}
?>

<html>
    <head>
        <title>File Upload</title>
    </head>
    <body>
        <form action="fileuploading.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="file">
            <input type="submit" name="submit">
        </form>
    </body>
</html>