<?php
require($_SERVER['DOCUMENT_ROOT']."/shibeSql.php");

namespace Doge;

if(isset($_POST['tokens'])){
 $tokens = htmlentities($_POST['tokens']);
}else{
 exit();
}
