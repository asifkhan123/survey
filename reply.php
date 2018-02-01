<html>
  <head>
    <title>PHP</title>
  </head>
<body>
<?php echo("<html><body bgcolor=\"#a38692\">");?>
<?php echo("<h1><center> Your survey has been completed</center></h1>");?>
You are a <?php echo $_POST["Gender"]; ?>!<br />
Your favorite singer is <?php echo $_POST["Teacher"]; ?> class. <br />
You like him as a singer because he is <?php echo $_POST["reason"]; ?> class. <br />
The type of music you prefer listening <?php echo $_POST["genre"]; ?> class. <br />
<?php echo("</html></body>");?>
  </body>
</html>
