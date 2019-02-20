<?php
session_start();
session_destroy();
header('location:member_view.php');