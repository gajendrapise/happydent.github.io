<!DOCTYPE html>
<html lang="en">
<head>
  <title>My Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>

<div class="container-fluid">
  <img src="images/mic.png" alt="mic" width="100%">
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="index.php">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="rede.php">HOW TO REDEME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="term.php">TERMS AND CONDITION</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">CONTACT US</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container mt-5">
  <div class="row">
    <div class="col-sm-7">
      <h4>Registration Details</h4>
     <form method="post" action="co.php">
     <div class="mb-3 mt-3">
      <label for="rcode">Reward Code:</label>
      <input type="text" class="form-control" placeholder="Enter Reward Code" name="rcode">
    </div>
     <div class="mb-3 mt-3">
      <label for="name">Name:</label>
      <input type="text" class="form-control" placeholder="Enter Name" name="name">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
    </div>
             <div class="mb-3 mt-3">
      <label for="mobile">Mobile:</label>
      <input type="text" class="form-control" placeholder="Enter Mobile" name="mobile">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-success form-control" name="done">Submit</button>
  </form>
   </div>
    <div class="col-sm-5">
      <p>
        

1.Enter your Reward code, name, mobile number, and e-mail address and click on submit<br><br>

2. You will receive an OTP via email/SMS. On the microsite, enter the OTP<br><br>

3.Post authentication, choose your preferred mode of cashback pay-out. (NEFT, or UPI )<br><br>

4. You will receive your cashback in the selected mode of cashback pay-out within 24-48 business hours.

      </p>
    </div>
  </div>
</div>

<?php
include "footer.php"
?>

</body>
</html>
