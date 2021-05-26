<?php
$conn = mysqli_connect("localhost","root","","petshop");

if($conn){
    echo ("Connection successful");

}
else{
    echo("Not connected");
}

?>