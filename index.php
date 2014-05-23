<?php
session_start();
if (!isset($_SESSION['userid'])) {
	echo "

  <!DOCTYPE html>
  <html lang='en'>
  <head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <meta name='description' content='>
  <meta name='author' content='>
  <link rel='apple-touch-icon' href='./ico/apple-touch-icon-57-precomposed.png'>
    <link rel='apple-touch-icon' sizes='76x76' href='./ico/apple-touch-icon-72-precomposed.png'>
    <link rel='apple-touch-icon' sizes='120x120' href='./ico/apple-touch-icon-114-precomposed.png'>
    <link rel='apple-touch-icon' sizes='152x152' href='./ico/apple-touch-icon-144-precomposed.png'>
  <link rel='shortcut icon' href='./ico/favicon.png'>

  <title>Starter Template for Bootstrap</title>

  <!-- Bootstrap core CSS -->
  <link href='./css/bootstrap.css' rel='stylesheet'>

  <!-- Custom styles for this template -->
  <link href='starter-template.css' rel='stylesheet'>
  <link href='sticky-footer.css' rel='stylesheet'>

  <!-- Just for debugging purposes. Don't actually copy this line! -->
  <!--[if lt IE 9]><script src='./docs-assets/js/ie8-responsive-file-warning.js'></script><![endif]-->

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js'></script>
  <script src='https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js'></script>
  <![endif]-->
  </head>

  <body>

  <div class='navbar navbar-inverse navbar-fixed-top' role='navigation'>
  <div class='container'>
  <div class='navbar-header'>
  <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>
  <span class='sr-only'>Toggle navigation</span>
  <span class='icon-bar'></span>
  <span class='icon-bar'></span>
  <span class='icon-bar'></span>
  </button>
  <a class='navbar-brand' href='./'>Project name</a>
  </div>
  <div class='collapse navbar-collapse'>
  <ul class='nav navbar-nav'>
  <li class='active'><a href='./'>Home</a></li>
  <!-- <li><a href='#about'>About</a></li>-->
  <li><a href='./Signin.php'>Login</a></li>
  </ul>
  </div><!--/.nav-collapse -->
  </div>
  </div>

  
<div id='wrap'>
  <div class='container'>
  
  <div class='starter-template'>
  <h1>Welcome to Benjamin Dirgo's Website</h1>
  <p class='lead'>This is the website of Ben Dirgo. Nothing much here, but there will be soon! <br> <br>
  (Soon being a relative term) =D <br> <br>
  </p>
  <a href='./Signin.php'> Please Register/Login </a>
  </div><!-- /.starter-template -->
  </div><!-- /.container -->
  </div><!-- /.wrap -->
  <div id='footer'>
      <div class='container'>
        <p class='text-muted credit'>Copyright &copy; 2013 Benjamin Dirgo - bdirgo@gmail.com</p>
      </div>
    </div>


  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src='https://code.jquery.com/jquery-1.10.2.min.js'></script>
  <script src='./js/bootstrap.min.js'></script>
  </body>
  </html>";
  exit();
}
else{
  echo "  <!DOCTYPE html>
  <html lang='en'>
  <head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <meta name='description' content='>
  <meta name='author' content='>
  <link rel='apple-touch-icon' href='./ico/apple-touch-icon-57-precomposed.png'>
    <link rel='apple-touch-icon' sizes='76x76' href='./ico/apple-touch-icon-72-precomposed.png'>
    <link rel='apple-touch-icon' sizes='120x120' href='./ico/apple-touch-icon-114-precomposed.png'>
    <link rel='apple-touch-icon' sizes='152x152' href='./ico/apple-touch-icon-144-precomposed.png'>
  <link rel='shortcut icon' href='./ico/favicon.png'>

  <title>Starter Template for Bootstrap</title>

  <!-- Bootstrap core CSS -->
  <link href='./css/bootstrap.css' rel='stylesheet'>

  <!-- Custom styles for this template -->
  <link href='starter-template.css' rel='stylesheet'>
  <link href='sticky-footer.css' rel='stylesheet'>

  <!-- Just for debugging purposes. Don't actually copy this line! -->
  <!--[if lt IE 9]><script src='./docs-assets/js/ie8-responsive-file-warning.js'></script><![endif]-->

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js'></script>
  <script src='https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js'></script>
  <![endif]-->
  </head>

  <body>

  <div class='navbar navbar-inverse navbar-fixed-top' role='navigation'>
  <div class='container'>
  <div class='navbar-header'>
  <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>
  <span class='sr-only'>Toggle navigation</span>
  <span class='icon-bar'></span>
  <span class='icon-bar'></span>
  <span class='icon-bar'></span>
  </button>
  <a class='navbar-brand' href='./'>Project name</a>
  </div>
  <div class='collapse navbar-collapse'>
  <ul class='nav navbar-nav'>
  <li class='active'><a href='./'>Home</a></li>
  <li><a href='./settings.php'>Settings</a></li>
  <li><a href='./iPhoneNoteApp.html'>iPhone</a></li>
  <li><a href='./contact.html'>Contact</a></li>
  <li><a href='./logout.php'>Logout</a></li>
  </ul>
  </div><!--/.nav-collapse -->
  </div>
  </div>
<div id='wrap'>
  <div class='container'>
  
  <div class='starter-template'>
  <h1>Welcome to Benjamin Dirgo's Website</h1>
  <p class='lead'>This is the website of Ben Dirgo. Nothing much here, but there will be soon! <br> <br>
  (Soon being a relative term) =D <br> <br>
  If you wish, you can contact me by clicking above. </p>
  </div><!-- /.starter-template -->
  </div><!-- /.container -->
  </div><!-- /.wrap -->
  <div id='footer'>
      <div class='container'>
        <p class='text-muted credit'>Copyright &copy; 2013 Benjamin Dirgo - bdirgo@gmail.com</p>
      </div>
    </div>



  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src='https://code.jquery.com/jquery-1.10.2.min.js'></script>
  <script src='./js/bootstrap.min.js'></script>
  </body>
  </html>";
}
?>
