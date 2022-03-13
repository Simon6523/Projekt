<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="nwd.css">
<title>Nordic Web Design</title>
</head>
<body class="global-body">
<?php include 'header.php';?>
 
<div class="container-form">
  <form action="action_page.php">
    <div class="row">
      
      <div class="col-75">
        <input type="text" id="name" name="name" placeholder="Your first and last name">
      </div>
    </div>
    <div class="row">
      <div class="col-75">
        <input type="text" id="email" name="email" placeholder="Your email adress">
      </div>
    </div>
    <div class="row">
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Ask me for a quote or a question" style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>




</body>
</html>