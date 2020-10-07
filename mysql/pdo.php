<?php

$db=new PDO("mysql:dbname=latihan;host=localhost","root","");

// $simpan=$db->query("insert into kelas values('','SMA','IPA')");

// var_dump($simpan);

$tampil=$db->query("select * from kelas");

$tampil_data=$tampil->fetchAll();   //(PDO::FETCH_OBJ);

var_dump($tampil_data);

?>