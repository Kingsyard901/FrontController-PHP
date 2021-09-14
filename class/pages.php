<?php

class Page404 {
    public function fourofour() {
        ?>
        <h2>404 - The page could not be found!</h2>
        <p>Please try again, or try go to the <a href="home">Starting page.</a></p>
        <?php
        return;
    }
}

class About {
    public function about() {
        ?>
        <h2>This is the About page!</h2>
        <p>You can read more about us here.</p>
        <?php
        return;
    }
}

class Admin {
    public function admin() {
        ?>
        <h2>This is the Admin page!</h2>
        <p>From here you can administrate all data.</p>
        <?php
        return;
    }
}

class Home {
    public function home() {
        if (!$_SESSION) {
            echo 'You are not logged in.';
            include './view/yourname.php';
        } else {
            echo 'Welcome '. $_SESSION['username'] .' to my page!';
        }
        return;
    }
}

class Users {

      public function users() {
        $cars = array (
            array("Volvo",22,18),
            array("BMW",15,13),
            array("Saab",5,2),
            array("Land Rover",17,15)
          );

        // header('Content-Type: application/json');
        return json_encode($cars);
      }

}

class Logout {

    public function logout() {
        unset( $_SESSION['username'] );

        header( 'Location: .' );
        die;
    }

}

?>