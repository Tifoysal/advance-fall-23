<?php

        class TodayClass{
            public $test;
            
        }

        if (property_exists('TodayClass', 'testzz')) {
            echo "It's working ";
            // $obj=new TodayClass();
        }
        else {
            echo "It's not working";
            
        }

?>