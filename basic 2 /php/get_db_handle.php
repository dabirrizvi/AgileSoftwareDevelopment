<?php
    // NB This file should be stored OUTSIDE the server document tree
    function get_db_handle() {

        $db_user = 'liskov';
        $db_pass = 'F8G1rKhN';

        $db_driver = 'pgsql';
        $db_host = 'db.dcs.aber.ac.uk';
        $db_name = 'csm2020_21_22_liskov';

        $data_source_name = "$db_driver:host=$db_host;dbname=$db_name";

        try {
			echo "Connected successfully";
            return new PDO($data_source_name, $db_user, $db_pass);

        } catch (PDOException $e) {
            // could do something more useful here
			echo"failed";
            return NULL;
        }
    }
?>
