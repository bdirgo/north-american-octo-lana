<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="./style.css">
<html>
<head>
  <title>
    Ben Dirgo's Site - Contact Page
  </title>
</head>
<body>
  <div id="pagecontainer">
    <div id="header">
      <h1>
        Contact
      </h1>
    </div>
    <div id="navbar">
      <ul>
        <li>
          <a href="./index.html">Home</a>
        </li>
        <li>
          <a href="./blog.html">Blog</a>
        </li>
        <li>
          <a href="./resume.html">Resume</a>
        </li>
        <li>
          <a href="./contact.php">Contact</a>
        </li>
      </ul>
    </div>
    <div id="content">
      <form action="Eval.php" method="POST">
        <?php
        $labels = array("name" => "Your name",
          "address" => "Your email address",
          "subject" => "Subject",
          "message" => "Your message goes here");
        echo "<h3>Please fill out the form and click submit to send an email.
        </h3>\n";
        foreach ($labels as $field => $label) {
          /* echo the label */
          /* echo the appropriate field */
          if ($field === "name" or $field === "address" or $field === "subject")
          {
            echo "<div class='field'>\n
            <label for='$field'>$label</label>\n";
            echo "<input type='text' name='$field' id='$field'
            size='65' />\n";
            echo "</div>\n";
          } elseif ($field === "message") {
            echo "<div class='field'>\n
            <label for='$field'>$label</label>\n";
            echo "<textarea name='$field' id='$field'
            rows='15' cols='40'>\n";
            echo "</textarea>";
            echo "</div>\n";
          }
        }
        echo "<select name='type'>\n
        <option value='question'>Question</option>
        <option value='Comment'>Comment</option>
        <option value='Urgent'>Urgent</option>\n
        </select> ";
        /* Display the submit button */
        echo "<div id='submit'>\n <input type='submit' value='Send Email'>\n </div>";
        ?>
      </form>
    </div>
    <div id="footer2">
      <p>
        Copyright 2013 Benjamin Dirgo - bdirgo@gmail.com
      </p>
    </div>
  </div>
</body>
</html>