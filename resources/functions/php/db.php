<?php
    //Load in the .env file that is stored in the resources folder
    $env = parse_ini_file('../resources/.env');

    //Create a connection to the database
    function create_connection() {
        //Retriev the database credentials and store them in a local veriable
        $db_loc = $GLOBALS["env['db_loc']"];
        $db_dbn = $GLOBALS["env['db_dbn']"];
        $db_usr = $GLOBALS["env['db_usr']"];
        $db_psw = $GLOBALS["env['db_psw']"];

        //Create a dsn variable
        $dsn = 'mysql:host=' + $db_loc + ';dbname=' + $db_dbn + ';charset=UTF8';

        //Try to make a pdo connection
        try {
            //Create a PDO connection
            $pdo = new PDO($dsn, $db_usr, $db_psw);
            //Check if the PDO variable is filled
            if ($pdo) {
                //Debug only
                echo("Connected to the $db_dbn database successfully!");
            }
            //Return the PDO variable to the function that called this function
            return ($pdo);
        } catch (PDOException $PDOe) {
            echo $PDOe->getMessage();
            $return = 'PDO_CONN_FAILED';
            //Return a connection failure variable to the function that called this function
            return ($return);
        }
    }

    //Website - User functions
    function web_usr_login($username, $password) {
        //Retriev which hash to use from to .env file
        $hash = $GLOBALS["env['hash']"];

        //Send the username and password through a hash and then pass it through a MD5 function
        $username = hash($hash, $username);
        $password = hash($hash, $password);
        
        $username = md5($username);
        $password = md5($password);

        //Retriev the users tablename from the .env file
        $db_usr_tb = $GLOBALS["env['db_usr_tb']"];

        //Create a connection the database
        $conn = create_connection();

        //Create the prepared statement and prepare this for execution
        $sql = 'SELECT username, password, level, active FROM ' + $db_usr_tb + ' WHERE username = ? AND password = ?';
        $sth = $conn->prepare($sql);

        //Execute the prepared PDO statement
        $sth->execute([$username, $password]);

        //Fetch the results
        $results = $sth->fetchAll();

        //Debug only
        echo("<script>console.log('PHP: " . $results . "');</script>");

        //Close the connection to the database
        $conn = null;
    }

    function web_usr_create($username, $password, $level) {
        //Retriev which hash to use from to .env file
        $hash = $GLOBALS["env['hash']"];

        //Send the username and password through a hash and then pass it through a MD5 function
        $username = hash($hash, $username);
        $password = hash($hash, $password);
        
        $username = md5($username);
        $password = md5($password);

        //Retriev the users tablename from the .env file
        $db_usr_tb = $GLOBALS["env['db_usr_tb']"];

        //Create a connection the database
        $conn = create_connection();

        //Create the prepared statement and prepare this for execution
        $sql = 'INSERT INTO ' + $db_usr_tb + ' (username, password, level) VALUES (?, ?, ?)';
        $sth = $conn->prepare($sql);

        //Execute the prepared PDO statement
        $sth->execute([$username, $password, $level]);

        //Fetch the results
        $results = $sth->fetchAll();

        //Debug only
        echo("<script>console.log('PHP: " . $results . "');</script>");

        //Close the connection to the database
        $conn = null;
    }

    function web_usr_update($id, $username, $password, $level, $active) {
        //Retriev which hash to use from to .env file
        $hash = $GLOBALS["env['hash']"];

        //Send the username and password through a hash and then pass it through a MD5 function
        $username = hash($hash, $username);
        $password = hash($hash, $password);
        
        $username = md5($username);
        $password = md5($password);

        //Retriev the users tablename from the .env file
        $db_usr_tb = $GLOBALS["env['db_usr_tb']"];

        //Create a connection the database
        $conn = create_connection();

        //Create the prepared statement and prepare this for execution
        $sql = 'UPDATE ' + $db_usr_tb + ' SET username=?, password=?, level=?, active=? WHERE id=?';
        $sth = $conn->prepare($sql);

        //Execute the prepared PDO statement
        $sth->execute([$username, $password, $level, $active, $id]);

        //Fetch the results
        $results = $sth->fetchAll();

        //Debug only
        echo("<script>console.log('PHP: " . $results . "');</script>");

        //Close the connection to the database
        $conn = null;
    }

    function web_usr_delete($id) {
        //Retriev the users tablename from the .env file
        $db_usr_tb = $GLOBALS["env['db_usr_tb']"];

        //Create a connection the database
        $conn = create_connection();

        //Create the prepared statement and prepare this for execution
        $sql = 'DELETE FROM ' + $db_usr_tb + ' WHERE id=?';
        $sth = $conn->prepare($sql);

        //Execute the prepared PDO statement
        $sth->execute([$id]);

        //Fetch the results
        $results = $sth->fetchAll();

        //Debug only
        echo("<script>console.log('PHP: " . $results . "');</script>");

        //Close the connection to the database
        $conn = null;
    }


    
?>