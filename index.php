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
            $sql = "SELECT * FROM casename WHERE CASENAMECODE > :casecode";
            $param = array(':casecode'=>'50');
            $list = $db->getRecordSetFilled($sql,$param);
            echo('Total: '.count($list));
            if(isset($list) && is_array($list) && count($list) > 0){ ?>
            <table border="1" cellspacing="0" cellpadding="10" width="100%">
            <?php foreach($list as $row){ ?>
                    <tr>
                        <td><?php echo($row['CASENAMECODE']);?></td>
                        <td><?php echo($row['CASENAME']);?></td>
                        <td><?php echo($row['CASENAME_ALIAS']);?></td>
                    </tr>
                <?php } ?>
            </table>
            <?php }else{
                print_r($list);
                echo('<hr>');
            }