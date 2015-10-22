
<?php
/*
$target_dir = "";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}


// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
$image = addslashes($_FILES['image']['fileToUpload']);
    $name = addslashes($_FILES['image']['name']);
    $image = file_get_contents($image);
    $image = base64_encode($image);

*/
?>

<?php

    $con = mysqli_connect("localhost","root","","fourvee");

    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $bday = $_POST['bday'];
    $email = $_POST['email'];
   
    
    mysqli_query($con, "INSERT INTO frontend(username,password,firstname,middlename,lastname,address,contact,email,birthdate)
    VALUES ('$username','$password','$firstname','$middlename','$lastname', '$address', '$contact', '$email','$bday')");

    mysqli_errno($con);

   include('menu.php');

   
    ?>

<!DOCTYPE html>
<html>
<head>
    <style>
        #update {font-size: 3em; margin: 200px;}
    </style>
</head>
<body>
    <center>
    <div id="update">Successfully Created Account !"</div>
  
    
    </center>
</body>
</html>

