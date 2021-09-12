<?php

class Page404 {
    public function fourofour() {
        ?>
        <h2>404 - The page could not be found!</h2>
        <p>Please try again, or try go to the <a href="index.php">Starting page.</a></p>
        <?php
        return;
    }
}

class About {
    public function aboutpage() {
        ?>
        <h2>This is the About page!</h2>
        <p>You can read more about us here.</p>
        <?php
        return;
    }
}

class Admin {
    public function adminpage() {
        ?>
        <h2>This is the Admin page!</h2>
        <p>From here you can administrate all data.</p>
        <?php
        return;
    }
}

class Home {
    public function homepage() {
        ?>
        <h2>Welcome!</h2>
        <p>This page is a testing page .</p>
        <?php
        include './view/footer.php';
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

        header('Content-Type: application/json');
        return json_encode($cars);
      }

}

?>