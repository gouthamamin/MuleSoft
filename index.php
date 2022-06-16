?php
    $server = "localhost";                    //server name
    $user = "root";                           //user name
    $password = "";                           //password is empty for sql
    $db = "db_movies";                              //type database name

    $conn = mysqli_connect($server,$user,$password,$db);    //connecting to database

    if(!$conn)                                //incase connection fails
    {
        echo "connection failed";       //exits the program
    }
    $sql = "INSERT INTO movie (name , actor , actress , director , year ) VALUES ('Bahubal1' , 'prabhas' , 'tamannha' , 'raja mauli' , 2015),
										('kgf 2' , 'yash' , 'nidhi' , 'neel' , 2022),
										('kgf 1' , 'yash' , 'shreenidhi' , 'prashanth' , 2018),
										('Bahubal2' , 'prabhas' , 'tamannha' , 'raja mauli' , 2017),  
										('pushpa','allu arjun','rashmika','sukumar',2021),
										('kotigobba3','sudeep','ashika','shiva karthik',2021)";     //query

             $insert = mysqli_query($conn,$sql);                     //executing query
             echo '<script type="text/javascript">';
                echo 'alert(" successfull");';
                echo 'window.location.href="display.php";';
                echo "</script>";
?>