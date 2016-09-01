<?php
require 'config.php';
require 'functions.php';
$id = $_GET['id'];
$return = $_GET['return'];


if(deletePost($id,$return,$mysqli)){
    header("Location: ".$return.".php");
}