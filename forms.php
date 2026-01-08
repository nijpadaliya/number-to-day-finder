<?php
// ini_set('display_errors', 1);
// error_reporting(E_ALL);
require "../loops/config.php";

$reporters = "SELECT * FROM user ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $reporters);
// echo $reporters;exit;
?>

<html>
    <head>
        <title>Add New Employee</title>
        <link rel="stylesheet" href="style.css">
    </head>



    <body>
        <h2>Add Numbers ANd watch </h2>
        <form action="save_user.php" method="POST">
            
            <label>Your Number (0-6):</label>
            <input type="number"   name="user_no" required><br><br>
            <input type="submit" value="Add Num">

        </form>

            <?php
            while ($row = mysqli_fetch_assoc($result)) { 
            $variable = $row['user_no'];

            switch ($variable) {
                    case 0:
                    echo "<h1>Today is Sunday </h1>";
                    break;
                
                    case 1:
                    echo "<h1>Today is Monday </h1>";
                    break;
                
                    case 2:
                    echo "<h1>Today is Tuesday</h1>";
                    break;
                
                    case 3:
                    echo "<h1>Today is Wensday</h1>";
                    break;
                
                    case 4:
                    echo "<h1>Today is Thursday</h1>";
                    break;
                
                    case 5:
                    echo "<h1>Today is Friday</h1>";
                    break;
                
                    case 6:
                    echo "<h1>Today is Saturday</h1>";
                    break;
                
                    case 7:
                    echo "today is not monday";
                    break;

                    default:
                    echo "<h1> There is NO day</h1>";

                    break;
            }
        }
            ?>


    </body>
</html>