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
include('inc/header.php');
?>

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
	<h4><?php echo $title;?> </h4>
	<hr>
	</div>
	</div>
	

<?
foreach ($posts as &$post) {
echo '
	<div class="row">
	<div class="col-lg-2">
	<h4>Author: '.$post['author'].'</h4>
	</div>
	<div class="col-lg-10">
	'.$post['body'].'
	</div>
	</div><br/>';
	}

include('inc/footer.php');
?>
	
	

