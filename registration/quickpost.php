<?php
include_once 'database.php';
if (isset($_POST['submit'])) {
    $image       = $_FILES['image']['name'];
    $description = $_POST['description'];
    $catagory    = $_POST['catagory'];
    $name    = $_POST['name'];
    $target      = "images/" . basename($image);
    $sql         = "INSERT INTO quickpost (image, description,catagory,name) VALUES ('$image', '$description', '$catagory','$name')";
    mysqli_query($conn, $sql);
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    } else {
        $msg = "Failed to upload image";
    }
    echo $msg;

}

?>
<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset = "UTF-8">
    <meta name    = "viewport" content = "width=device-width, initial-scale=1.0">

    <title>QuickPost</title>

</head>

<body>
    <div id = "QuickPost" class = "tabcontent">


         <h1 style="background:#83CE1A;text-align:center">Seller Quick Post</h1>

        <div class = "container">
        <div class = "imgcontainer">
        <img src   = " download.jpg" alt = "Avatar" class = "center">
            </div>
            <form method = "POST" action = "quickpost.php" enctype = "multipart/form-data">
                <h1 style="color:white;background:black"> Please Insert your img file </h1>

                <div>
                    <p><b> Add your PET'S Price , Address and Contact Number in the Box for Buyer.</b> </p>
                </div>
                <b>ABOUT</b>
                <br><br>
                <textarea name  = "description"> </textarea>
                <div      class = "file-upload-wrapper" data-text = "Select your file!">
                <br><br>
                <b>Name </b><br><br>
                <textarea name  = "name"> </textarea>


                <!--* here i edited -->
                <br><br>
            <label> Catagory: </label><br><br>
            <input type = "radio" name = "catagory" value = "PET"/> Pets
            <input type = "radio" name = "catagory" value = "FOOD"/> Food
            <input type = "radio" name = "catagory" value = "MEDICAL"/> Medical
            <br><br> <!--* here i edited end-->


                    <input type = "file" class = "file-upload-field" value = "" name = "image">
                </div>
                <br><br>
                <div>
                    <input type = "submit" name = "submit"></input>
            </form>
        </div>
    </div>
    </div>


</body>

</html>
