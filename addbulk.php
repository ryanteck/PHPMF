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

$posttitle = htmlspecialchars ($_GET['t']);
$m = new MongoClient(); // connect
$db = $m->selectDB("forum");
$posts = $db->threads;

//loop
$i = 0;
$target = 5;
while($i < $target) {
$posts->insert(array("author"=>$i,"catagory"=>1,"posts"=>array(array("author"=>$i,"body"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras convallis gravida purus, sed euismod est semper ut. Cras ligula dolor, tincidunt a lectus ultrices, ultrices ultrices ante. Nullam sed nisl felis. Integer eleifend neque eu ipsum venenatis, id tempor odio hendrerit. Etiam vitae rhoncus ante. Nullam mi turpis, aliquam non blandit sit amet, rutrum nec augue. Ut aliquet nunc dolor, id imperdiet risus placerat et. Proin felis velit, vehicula porta scelerisque id, cursus ut metus. Fusce lobortis magna quis vestibulum sagittis. Proin egestas volutpat lectus, ac vestibulum risus dapibus eu.",'timestamp'=>time())), "subcatagory"=>0,"tag"=>"Test","title"=>"Testing ".$i,"views"=>0));
echo $i;
sleep(1);

$i++;
}
