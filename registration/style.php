<?php

use function PHPSTORM_META\type;

header('content-type: text/css; charset: UTF-8');
?>
.fa {
    padding: 10px;
    font-size: 20px;
    width: 40px;
    text-align: center ;
    text-decoration: none;
    margin-top: 1px;
    margin-right: 10px  width="40" height="35";
  }

  .links {
      position: absolute;
      padding-top: 20px;
      top: 0;
      right: 0;
      width: 300px;
      padding-top: 40px;
  }
  .sociallink{
    top:0px;
    padding-top:10px;
    right: 0;
    width:450px;
  }

  .fa:hover {
      opacity: 0.7;
  }

  .fa-facebook {
    background: #3B5998;
    color: white;
  }

  .fa-twitter {
    background: #55ACEE;
    color: white;
  }

  .fa-google {
    background: #dd4b39;
    color: white;
  }

  .fa-linkedin {
    background: #007bb5;
    color: white;
  }


  .fa-youtube {
    background: #c92222;
    color: white;
  }

  * {box-sizing: border-box;}



  .column {
    float: left;
    width: 25%;
    padding: 5px;
  }

  /* Clearfix (clear floats) */
  .row::after {
    content: "";
    clear: both;
    display: table;
  }

  /* Add a gray background color with some padding */
  body {
    font-family: Cursive;
    padding: 20px;
    background: #f1f1f1;
    font-style:italic;
  }



  /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
  @media screen and (max-width: auto) {
    .leftcolumn, .rightcolumn {
      width: 100%;
      padding: 0;
    }
  }
  .topnav input[type=text] {
    float: right;
    padding: 6px;
    margin-top: 8px;
    margin-right: 16px;
    border: none;
    font-size: 17px;
  }
  .topnav input[type=text] {
      border: 1px solid #ccc;
    }

    /* Style the tab */
  .tab {
    overflow: hidden;
    border: 1px solid rgb(142, 204, 61);
    background-color: black;
  }
  /* Create an active/current tablink class */
  .tab button.active {
    background-color: #a83295;
  }

  /* Style the tab content */
  .tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid rgb(247, 169, 169);
    border-top: none;

  }


  /* Style the buttons inside the tab */
  .tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
  }
  /* Change styles for span and cancel button on extra small screens */
  @media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
  }

  /* Header/Blog Title */
  .header {
    padding: 30px;
    font-size: 40px;
    text-align: center;
    background: white;
  }

  /* login class start */

  /*  Change background color of buttons on hover */
  .tab button:hover {
    background-color: rgb(42, 104, 197);
  }

  input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }

  button {
    background-color: #206db4;
    color: white;
    padding: 10px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: auto;
  }

  button:hover {
    opacity: 0.8;
  }

  .cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
  }

  .imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;

  }

  img.avatar {
    width: 10%;
    border-radius: 15%;


  }

  .container {
    padding: 16px;
  }

  span.psw {
    float: right;
    padding-top: 16px;
  }

  /* Create two unequal columns that floats next to each other */
  /* Left column */
  .column1 {
    float: left;
    width: 100%;
  }

  .card {
     background-color: white;
     padding: 20px;
     margin-top: 20px;
  }

  /* Clear floats after the columns */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }

  .footer {
    padding: 15px;
    font-size: 12px;
    text-align: center;
    background: #800000; !--footercolor:#ddd--!
    margin-top: 20px;
  }


/*registration and login*/
* {
    margin: 0px;
    padding: 0px;
  }
  body {
    font-size: 120%;
    background: #F8F8FF;
  }

  .header {
    width: 30%;
    margin: 50px auto 0px;
    color: white;
    background: #5F9EA0;
    text-align: center;
    border: 1px solid #B0C4DE;
    border-bottom: none;
    border-radius: 10px 10px 0px 0px;
    padding: 20px;
  }
  form, .content {
    width: 100%;
    margin: 35px auto;
    padding: 25px;
    border: 10px solid #B0C4DE;
    background:	  #e60000;
    border-radius: 0px 0px 40px 40px;
  }
  .input-group {
    margin: 10px 0px 10px 0px;
  }
  .input-group label {
    display: block;
    text-align: left;
    margin: 3px;
  }
  .input-group input {
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
  }
  .btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;
  }
  .error {
    width: 92%;
    margin: 0px auto;
    padding: 10px;
    border: 1px solid #a94442;
    color: #a94442;
    background: #f2dede;
    border-radius: 5px;
    text-align: left;
  }
  .success {
    color: #3c763d;
    background: #dff0d8;
    border: 1px solid #3c763d;
    margin-bottom: 20px;
  }

.allpost{
  display : flex;
  flex-direction :row;
  justify-content:center;
  align-items:center;



}
.postcard {
  box-shadow: 0 4px 8px 0 red; !-- default color rgba(0,0,0,0.2)--!
  transition: 0.3s;
  width: 20%;

}

.postcard:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.postcontainer {
  padding: 2px 8px;
  margin:40px;
  color:#0000ff;


}

img{
  height:20%;
  width :100%;

}
