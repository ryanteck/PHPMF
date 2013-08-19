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
?>
<!DOCTYPE html>
<html>
  <head>
    <title>RTK Forum</title>
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
	<div class="container">
		<?php
$posttitle = htmlspecialchars ($_GET['t']);
$m = new MongoClient(); // connect
$db = $m->selectDB("forum");
$posts = $db->posts;
$thread = $posts->findOne(array("title"=>$posttitle));
#var_dump($thread);
$title = "[".$thread['tag']."] ".$thread['title'];
$posts = $thread['posts'];

?>
	
    <div class="row">
	<div class="col-lg-12">
	<h3><?php echo $title;?> </h3>
	<hr>
	</div>
	</div>
	

<?
foreach ($posts as &$post) {
echo '
	<div class="row">
	<div class="col-lg-2">
	<h3>Author: '.$post['author'].'</h3>
	</div>
	<div class="col-lg-10">
	'.$post['body'].'
	</div>
	</div><br/>';
	}
?>
	
	
	
	<!-- footer -->
	<div class="row">
	
	<div class="col-lg-12">
	<hr>
	<h5>RTK Forum's V0.01A, (C) Ryanteck 2013</h5>
	</div>
	</div>
	

    <!-- JavaScript plugins (requires jQuery) -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- Optionally enable responsive features in IE8 -->
    <script src="bootstrap/js/respond.js"></script>
  </body>
</html>
