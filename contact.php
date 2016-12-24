<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<head>
  <title> Sunday Lalbiaknia : Web Developer &amp; Researcher</title>
  <meta name="keywords" content="sunday lalbiaknia,sundayakent,sundayamizo,nit mizoram,bilkhawthlir,php developer,web security researcher" />
  <meta name="description" content="Sunday Lalbiaknia, Web Developer &amp; Security Researcher" />
  <link type="text/css" rel="stylesheet" href="style.css"/>
  <meta name="author" content="Sunday Lalbiaknia" />
  <meta name="robots" content="All" />
</head>
<body>
  <div class="header">
    <h><b>Sunday Lalbiaknia</b></h>
    <p>web developer | pentester | researcher</p>
  </div>
  <hr>
    <p align="center"><a href=".">home</a> | <a href="resume.html">resume</a> | <a href="blog/index.html">blog</a> | <a href="photos.html">photos</a> | <a href="interests.html">interests</a> | <a href="contact.php">contact</a></p>
  <hr>
  <div class="maintext">
    <p style="align:justify">
      I am Sunday Lalbiaknia. I am a CS Undergrad at <a href="http://nitmz.ac.in">National Institute of Technology, Mizoram</a>. I am a PHP developer and created a number of web applications! I am a security researcher, especially on the web application security.<br/><br/>
      I love blogging and maintain a blog since 2013 (in Blogger), which I shifted here as a simple HTML page. You can take a look at my blog here.<br/><br/>


    </p>
    <p>
      <?php
$action = $_REQUEST ['action' ];
if ($action == "") /* display the contact form */
{
?>
<form action="" method="POST"
enctype="multipart/form-data" style="padding:8px;">
<input type="hidden" name="action"
value="submit">
Name:<br>
<input style="background-color: #000;color:#00FF00; padding:4px; border: 1px solid #00FF00;" name="name" type="text" value=""size="24"/><br>
Email:<br>
<input style="background-color: #000; padding:4px; border: 1px solid #00FF00; color:#00FF00;" name="email" type="email" value=""size="24"/><br>
Message:<br>
<textarea style="background-color:#000; padding:4px; border: 1px solid #00FF00; color:#00FF00;" name="message" rows="14" cols="70"></textarea><br>
<input type="submit" style="background-color:#00FF00; padding:4px; border: 1px solid black; color: #000; text-decoration:bold;" value="Send"/>
</form>
<?php
}
else /* send the submitted data */
{
$name = $_REQUEST [ 'name' ];
$email = $_REQUEST [ 'email' ];
$message = $_REQUEST [ 'message' ];
if (( $name == "")||( $email == "")||( $message == ""))
{
echo "Some error in the form!Please fill the <a href=
\"\">form</a> again." ;
}
else{
$from = "From: $name < $email >\r\nReturn-path: $
email";
$subject = "Message sent using your contact form";
mail ("sundayakent@gmail.com" , $subject , $message, $from );
echo "Thank You! I'll respond soon!";
}
}
?>
    </p>
  </div>
<hr>
  <div class="footer">
    <p> &copy; Sunday Lalbiaknia</p>
