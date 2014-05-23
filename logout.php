<?php
session_start();
if (isset($_SESSION['userid'])) {
				$_SESSION['userid'] = NULL;
			}

			header('Location: ./index.php');
			exit();

?>