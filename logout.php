<?php
	session_start();
	
	session_unset();
	session_destroy();
	echo "<script>
		  alert('Logged off successfully');
		  window.location.href='index.php';
		  </script>";
?> 