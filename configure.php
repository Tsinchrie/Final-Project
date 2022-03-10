<?php


$link = mysqli_connect("localhost", "root", "", "yooup");

if ($link == false) {
    die("Error connecting to server" . mysqli_connect_error($link));
}