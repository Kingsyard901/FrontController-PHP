    
    <?php

    include './app/dbconn.php';

    // COMMENT Tutorial testing to connect with prepared statement and search/festch data.
        // $data = 'Henrik';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = htmlspecialchars(ucfirst($_POST['username']));
        }
    //COMMENT Created a template
        $sql = "SELECT * FROM users WHERE user_first=?;";
    //COMMENT Create a prepared statement
        $stmt = mysqli_stmt_init($conn);
    //COMMENT Prepare the prepared statement
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo 'SQL statement failed.';
        } else {
            // Bind parameters to the placeholder
            mysqli_stmt_bind_param($stmt, "s", $data);
            // Run paramaters inside database
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            while ($row = mysqli_fetch_assoc($result)) {
                // echo 'Some testdata from Database: <br>';
                $active = $row['user_first'];
                // echo $row['user_first'] . ' ' . $row['user_last'] . '<br>', $row['user_email'] . '<br>', $row['user_uid'] . ': Have the password - ' . $row['user_pwd'] . '<br><br>';
            }
        }
    ?>



