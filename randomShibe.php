<?php
$array = array
              (
                "Shibe" => "Loading random shibe image",
                "Loaded" => rand("<img src='dog1'>", "<img src='dog2'>") // Could load through get requests curling cdn's
              );
              
foreach( $array as $key => $value ){
    echo $key."\t=>\t".$value."\n";
}
?>
