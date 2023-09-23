<?php
            //phpinfo();
            //-------Display page errors------------------------------------------------
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
            //-----------------Importing Required Libraries-----------------------------
            require_once("libs/classes/App_DB.php");
            require_once("libs/classes/DbPathsArray.php");
            //-Creating Object and passing user info to the constructor of App_DB class-
            $db = new App_DB(DBU::$dba_user);//passing database login details from DbPathArray.php file
            //--------------Calling of Methods from each class--------------------------
            $sql = "SELECT * FROM CAUSELIST_VU_SCREEN";
            $list = $db->getRecordSetFilled($sql);
            if(isset($list) && is_array($list) && count($list) > 0){
                print_r($list);
            }else{
                print_r($list);
                echo('<hr>');
            }