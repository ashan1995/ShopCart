<?php
session_start();
include "dbConnect.php";
session_destroy();
header("location:../index.php");