<?php
/*
    PHPMF - PHP MongoDB Powered Forum Software
    Copyright (C) 2013  Ryan Walmsley / Ryanteck

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see {http://www.gnu.org/licenses/}.
    You can contact the creator by email on Ryanteck+phpmf@gmail.com
*/

function forumHeader($title,$active) {
echo '
<!DOCTYPE html>
<html>
  <head>
    <title>RTK Forum - '.$title.'</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<style>

	</style>
  </head>
  <body>
  <div class="navbar navbar-static-top">
  <div class="container">
  <a class="navbar-brand" href="#">RTK Forum</a>
  <ul class="nav navbar-nav">
    <li class="active"><a href="index.php">Home</a></li>
    <li><a href="#">Login</a></li>
    <li><a href="#">Register</a></li>
	<li><a href="#">Search</a></li>
	</ul>
	</div>
	</div>
';
}
?>
