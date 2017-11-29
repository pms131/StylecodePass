<?php
    $host = "10.3.0.184 ";
    $port = "3306";
    $database = "styledcode_temp";
    $user = "9bf15db02dd65a2d";
    $pw = "53486a6ab150462c";
    
    $con = mysqli_connect("host=$host port=$port dbname=$database user=$user password=$pw") or die ("Could not connect to server\n"); 
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    //$query = sprintf("SELECT * FROM accounts WHERE email = '%s' AND password = '%s';", pg_escape_string($name), pg_escape_string($password));
    $query = "SELECT * FROM accounts WHERE Email= '" . $email . "' AND Password= '" . $password . "';";
    $result = pg_query($con, $query);
    $row = pg_fetch_array($result, 0, PGSQL_NUM);
    //echo $row[1];
    //echo $row[2]; 

    if($row)
    {
        //echo 'Success';
        session_start();
        $_SESSION['email'] = $row[1];
        $_SESSION['fname'] = $row[3];
        $_SESSION['lname'] = $row[4];
        $_SESSION['phone'] = $row[5];
        $_SESSION['company'] = $row[6];
        $_SESSION['department'] = $row[7];
        $_SESSION['position'] = $row[8];
        echo "<script>
        window.location.replace('Dashboard.php');
        </script>";
        /*echo "<script>
        window.location.replace('b.php');
        </script>";*/
    }
    else {
        echo "<script>
        window.alert('Login Failure!!!');
        </script>";
        echo "<script>
        window.location.replace('index.html');
        </script>";
    }
    
    pg_close($con);
?>