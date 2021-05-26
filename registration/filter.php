<?php
include "database.php";
?>

<h1>Filter page</h1>

<?php

if(isset($_POST['customs'])){
    $search= mysqli_real_escape_string($conn,$_POST['search']);
   // $sql= "SELECT * FROM quickpost WHERE catagory LIKE'%$search%' ";
    $sql= "SELECT catagory from quickpost LIKE'%$search%' ";

    $result = mysqli_query($conn, $sql);
    $queryResult= mysqli_num_rows($result);

    if($queryResult > 0){
        while ($row = mysqli_fetch_array($result)) {

            echo '<div class="postcard">';
            echo "<img src='images/" . $row['image'] . "' >";
            echo '<div class="postcontainer">';
            echo "<p>" . $row['description'] . "</p>";
            echo '</div>';
            echo '</div>';

            
          }
    } else {
        echo "There are no results matching your search!";
    }
}
?>