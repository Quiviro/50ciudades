<?php
  session_start();
  // Usar sólo para códigos antiguos obsoletos que no usan $_SESSION
  // session_unset();
  session_destroy();
  header("Location: index.php");
?>
