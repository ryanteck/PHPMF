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

//Setup Wizard
$m = new MongoClient(); // connect
$db = $m->selectDB("forum");
$db->threads->ensureIndex(array("title"=>1), array("unique" => true));
?>
