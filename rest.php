<?php
require './connect.php';
//require 'models/CategoryTable.php';

if($_SERVER['REQUEST_METHOD']=="GET") {
    echo ProductTable::all()->toJson();

}