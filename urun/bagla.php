<?php
$bagla = new mysqli('localhost','root','','urun');

if($bagla->connect_error){
    echo $bagla->connect_error;
}
?>