<?php
            //phpinfo();
            //-------Display page errors------------------------------------------------
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            //-----------------Importing Required Libraries-----------------------------
            require_once("libs/classes/App_DB.php");
            require_once("libs/classes/DbPathsArray.php");
            //-Creating Object and passing user info to the constructor of App_DB class-
            $db = new App_DB(DBU::$dba_user);//passing database login details from DbPathArray.php file
            //--------------Calling of Methods from each class--------------------------
            $jcode = isset($_POST['j']) && !empty($_POST['j']) ? $_POST['j']:'371';
            $sql = "SELECT * FROM CAUSELIST_VU_SCREEN WHERE JUDGECODE LIKE :jcode";
                    // WHERE JUDGECODE LIKE :jcode AND 
                    //               TO_CHAR(MDATE,'YYYY-MM-DD') = :dated 
                    //               ORDER BY CASESTAGECODE ASC,CASESNO ASC";
            // $param = array(':jcode'=>$jcode.'%',':dated'=>'2023-09-25');
            $param = array(':jcode'=>$jcode.'%');
            $list = $db->getRecordSetFilled($sql,$param);
            echo('Total: '.count($list));
            if(isset($list) && is_array($list) && count($list) > 0){
                print_r($list);
            }else{
                print_r($list);
                echo('<hr>');
            }