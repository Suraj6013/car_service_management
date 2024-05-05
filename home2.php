<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Car Service Homepage</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style>
      /* Dashboard CSS */
      .dashboard {
        width: 250px;
        background-color: #333;
        color: #fff;
        height: 100vh;
        position: fixed;
        left: 0;
        top: 0;
        padding-top: 20px;
      }

      .dashboard ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
      }

      .dashboard ul li {
        padding: 10px;
        border-bottom: 1px solid #555;
      }

      .dashboard ul li a {
        color: #fff;
        text-decoration: none;
      }

      /* Page Content CSS */
      html {
        background-image: url("images/home.jpg");
        background-size: cover;
        background-position: center;
        height: 100%;
      }
      body {
        margin: 0
      }
      .sub-body {
        margin-bottom: 0;
        font-family: Arial, sans-serif;
        background-size: contain;
        background-position: cover;
        height: 100vh;
        display: block;
        flex-direction: column;
        background-image: url("images/home.jpg");
        padding-left: 250px; /* Added padding to the left to avoid overlap with dashboard */
      }

      .text-container {
        padding: 0px;
        text-align: center;
        color: white;
      }

      .main-heading {
        font-size: 100px;
        padding-top: 200px;
        padding-bottom: 200px;
        font-weight: bolder;
        margin-bottom: 20px;
      }

      .container{
        top:11%;
        left:85%;
        width:200px;
        height:100px;
        position: absolute;
        z-index: 2;
      }
    </style>
  </head>
  <body>
    <div class="dashboard">
      <ul>
        <li><a href="#" onclick="openTab('Home')">Home</a></li>
        <li>
          <a href="service.html" onclick="openTab('Services')">Services</a>
        </li>
        <li>
          <a href="request_service.html" onclick="openTab('request')"
            >Request Service</a
          >
        </li>
        <li>
          <a href="car_info.html" onclick="openTab('enquiry')"
            >Car Information</a
          >
        </li>
      </ul>
    </div>
    <div class="sub-body">
      <div class="text-container">
        <h1 class="main-heading">
          Drive Hassle-Free <br />with <br />Our Service...!
        </h1>
        <!-- Add any additional content here -->
      </div>
    </div>
     

    <!-- Bootstrap JS and jQuery (Optional, if you need it) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
      function openTab(tabName) {
        var i;
        var tabs = document.getElementsByClassName("tab");
        for (i = 0; i < tabs.length; i++) {
          tabs[i].style.display = "none";
        }
        document.getElementById(tabName).style.display = "block";
      }
    </script>

    <div id="register" class="tab" style="display: none">
      <!-- Register Form -->
      <h2>Register</h2>
      <!-- Add your register form here -->
    </div>

    <div id="login" class="tab" style="display: none">
      <!-- Login Form -->
      <h2>Login</h2>
      <!-- Add your login form here -->
    </div>

    <div id="request" class="tab" style="display: none">
      <!-- Service Request Form -->
      <h2>Request Service</h2>
      <!-- Add your service request form here -->
    </div>

    <div id="enquiry" class="tab" style="display: none">
      <!-- Customer Enquiry Form -->
      <h2>Customer Enquiry</h2>
      <!-- Add your customer enquiry form here -->
    </div>
    <div class="container">
        <a href="logout.php" class="btn btn-warning">Logout</a>
    </div>
  </body>
</html>
