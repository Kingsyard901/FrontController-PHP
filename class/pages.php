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

// Endast via access Henrik
// Omskriven med if för att verifiera via session.
class Henrik1 {
    public function henrik1() {
        if (!$_SESSION) {
            echo 'You need to login to view this page.';
        } elseif ($_SESSION['username'] != 'Henrik') {
            echo 'You are not allowed access to this page.';
        } else {
            echo 'Welcome '. $_SESSION['username'] .' to your very own page! You can try "tomas1" in the browser to test access to Tomas page,';
        }
        return;
    }
}

class Tomas1 {
    public function tomas1() {
        if (!$_SESSION) {
            echo 'You need to login to view this page.';
        } elseif ($_SESSION['username'] != 'Tomas') {
            echo 'You are not allowed access to this page.';
        } else {
            echo 'Welcome '. $_SESSION['username'] .' to your very own page! You can try "henrik1" in the browser to test access to Henriks page,';
        }
        return;
    }
}
// END OF Endast access

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
            echo 'You are not logged in. </br> You can try to log in with just the name Henrik or Tomas.';
            include './view/yourname.php';
        } else {
            echo 'Welcome '. $_SESSION['username'] .'!';
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