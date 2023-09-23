<?php
/**
 * Description of DBU class=> Database Users Class collects existing users to connect to target database by 
 * providing user, password, host and database name
 * Benefits of DBU class=> 
 *      You can connect to database from each page with separate user which will have separate privileges, which will 
 *      minimize the threat to hack the database with DBA user. Values of each key has encrypted with base64_encode() function,
 *      and will need to decrypt the same in the DB.php class which has already been done. 
 *
 * @author shah
 */
class DBU {
    
    static $view_user = array(
                                'user'=>'cfmis', //cfmis
                                'key'=>'cfmis',//cfmis
                                'host'=>'172.16.0.2/phcdb',//172.16.0.2/phcdb
                                'db' => 'oci:dbname=cfmis'
                                );
    static $dba_user = array(
                                'user'=>'cfmis', //cfmis
                                'key'=>'cfmis',//cfmis
                                'host'=>'172.16.0.2/phcdb',//172.16.0.2/phcdb
                                'db' => 'oci:dbname=172.16.0.2/phcdb'
                                );
    }//