<?php
// mysql://b23c10711bb106:e40c0a53@eu-cdbr-west-01.cleardb.com/heroku_8fdd24cf88e849e?reconnect=true
// username: b23c10711bb106
// password: e40c0a53
// Host: eu-cdbr-west-01.cleardb.com

$conn = mysqli_connect('localhost', 'root', '', 'transfer');

if (!$conn) {
  die('Error Connection..');
}
