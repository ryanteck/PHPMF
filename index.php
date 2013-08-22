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
forumHeader("Home",0);
?>
	<div class="container">
	
	
    <div class="row">
	<div class="col-lg-12">
	<h3>Welcome Username</h3>
	<hr>
	</div>
	</div>
<?php
$m = new MongoClient(); // connect
$db = $m->selectDB("forum");
$catagorys = $db->catagorys->find();
$catagorysarray = iterator_to_array($catagorys);
foreach($catagorysarray as &$catagory) {
echo '	<div class="row">
	<div class="col-lg-12">
	<h2>'.$catagory['_id'].'</h2>
	</div>
	</div>
';
foreach($catagory['forums'] as &$forum) {
echo '
	<div class="row">
	<div class="col-lg-6">
	<h3>'.$catagory['name'].'</h3><h5>The place for chit chat</h5>
	</div>
	<div class="col-lg-3">
	<h4><b>Last Post By:</b> Ryanteck</h4>
	<h5>Lurum ipsum doler amet </h5>
	</div>
	<div class="col-lg-3">
	<h4>0 Threads</h4>
	<h4>0 Posts</h4>
	</div>	
	</div>
';
}
}

include('inc/footer.php');
?>
	
