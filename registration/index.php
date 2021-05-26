<?php
include "database.php";
?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.php">

</head>

<body>

  <h2 style="color:red;text-align:center"> Pet Lovers Store </h2>

  <div class="tab">
    <button class="tablinks" onclick="openCity(event, 'Home')">Home</button>
    <button class="tablinks" onclick="openCity(event, 'About')">About</button>
    <button class="tablinks" onclick="openCity(event, 'Contact')">Contact Us</button>
    <button type="tablink" onclick="parent.location='login.php'">Login </button>
    <button type="tablink" onclick="parent.location='register.php'">Registration</button>
    <button type="tablink" onclick="parent.location = 'quickpost.php'">QuickPost</button>

    <div class="links">
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-twitter"></a>
      <a href="#" class="fa fa-google"></a>
      <a href="#" class="fa fa-linkedin"></a>
      <a href="#" class="fa fa-youtube"></a>
    </div>

  </div>

  <div id="Home" class="tabcontent">
    <h3>Home</h3><br>

    <p><b> Please Search All Kind of Pet's here:</b> </p>

    <form action="search.php" method="POST">
    <input type="text" name="search" placeholder="Search..">



    <h2>Custom Select</h2>

    <p class="custom-select">
      <select>
        <option value="0">Filters:</option>
        <option value="1">Pet</option>
        <option value="2">Food</option>
        <option value="3">Medical</option>
      </select> </p>

    <button type="Search" name="submit-search">Search</button></form>

    <?php
    $result = mysqli_query($conn, "SELECT * FROM quickpost");


    while ($row = mysqli_fetch_array($result)) {


      echo '<div class="postcard">';
      echo "<img src='images/" . $row['image'] . "' >";
      echo '<div class="postcontainer">';
      echo "<p>" . $row['description'] . "</p>";
      echo '</div>';
      echo '</div>';
    }?>


  </div>


  <div id="About" class="tabcontent">
    <h3>About</h3>
    <p style="color:blue">
      This is a pet Animals website!
      Here you buy and sell your pets like: Anyone can post for sell (Animals) and anyone can buy.
      simple!

      Lorem Ipsum
      "Nor is it any further because that is the pain carrots, Minneapolis, wants to get ..."
      "There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain..."



      <p style="color:red">Where does it come from?
        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
      </p>

      Where can I get some?
      There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
    </p>

  </div>

  <div id="Contact" class="tabcontent">
    <h3>Contact Us</h3>
    <p> Phone: +88015***24252 </p>
    <p> Email: petslovers**@gmail.com </p>
    <p> Skype: Petslover**.skype.com </p>
  </div>




  <script>
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
  </script>

  <div class="footer">
    <h2>Copyright, “All Rights Reserved”. </h2>
    <p>Contact: +880192**4587 <address>258/2 Mirpur-2, Dhaka-1216</address>
    </p>
  </div>

  <?/*<?php if (isset($_SESSION['username'])) : ?>

  <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
  <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
<?php endif ?>
*/

</body>

</html>
