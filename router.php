<?php
//DreamingCoders
require $_SERVER['DOCUMENT_ROOT'].'/core/router-steptwo.php';

    // For usage read documentation or steptwo.php
        // begin routes
            ROUTER::get('/index.php', function($req,$res,$next){

                // Do something here
                echo "Route system works!" ;

                // call Next Callback, control goes to next callback function
                $next();

            },function($req,$res){


                echo "END";  // task completed

            });
