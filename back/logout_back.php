<?php
session_destroy();
header("Location: index.php?state=start");
?>