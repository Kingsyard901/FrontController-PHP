<?php
//Registreringssidan.
class Create {
  public function create() {
    if (!$_SESSION) {
      include './view/createuser.php';
    } else {
      echo 'You are already logged in as ' . $_SESSION['username'];
    }
  }
}
//404 sidan om man knappar in en sida i URL som inte finns.
class Page404 {
    public function fourofour() {
        ?>
        <h2>404 - The page could not be found!</h2>
        <p>Please try again, or try go to the <a href="home">Starting page.</a></p>
        <?php
        return;
    }
}
//Enkel visning av en statisk Aboutsida.
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
// Om inloggad som "Henrik" så visas en speciell sida (denna).
//Denna sida visas endast i footer om inloggad.
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
// Endast via access Tomas1
// Om inloggad som "Tomas" så visas en speciell sida (denna).
//Denna sida visas endast i footer om inloggad.
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

// Specifik output baserat på databas och login.
//Om inloggad som registrerad så visas ditt namn och email från mysql på denna sida.
//Denna sida visas endast i footer om inloggad.
class User {
    public function user() {
        if (!$_SESSION) {
            echo 'You are not logged in. </br>';
            include './view/yourname.php';
        } else {
          // Behöver lägga in if för att istället ta sessionanvändare om användare inte finns i db.
            include './app/showuser.php';
            echo 'Hi there ' . $usersname . '! <br>';
            echo 'Your Email is:  ' . $usersemail . '<br>';
        }
        return;
    }
}

// En enkel statisk sida som alltid visas.
class Admin {
    public function admin() {
        ?>
        <h2>This is the Admin page!</h2>
        <p>From here you can administrate all data.</p>
        <?php
        return;
    }
}

// Om inloggad så får du en hälsningsfras på Homesidan.
class Home {
    public function home() {
        if (!$_SESSION) {
            echo 'You are not logged in. </br> You can try to log in with just the name Henrik or William.';
            include './view/yourname.php';
            echo 'Or, you can register: <a href="create">Create Account </a>';
        } elseif (empty($usersname)) {
            echo 'Hi ' . $_SESSION['username'] . '!';
        } else {
            include './app/showuser.php';
            echo 'Hi there ' . $usersname . '! You are now logged in.';
        }
        return;
    }
}

//Denna sida är statisk och visar enbart en JSON.
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

// Denna triggar en Session unset, vilket "loggar ut" den som är inloggad.
class Logout {

    public function logout() {
        unset( $_SESSION['username'] );

        header( 'Location: .' );
        die;
    }

}

?>
