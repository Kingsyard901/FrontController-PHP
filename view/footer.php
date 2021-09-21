<div class="footer">
</br>
</br>
    <a href="home">Home </a>
    <?php
      if (!$_SESSION) { //Om du inte är inloggad så får du valet att registrera dig.
        ?>
        <a href="create">| Create Account </a>
        <?php
      } else {
          echo '';
      }
     ?>
    <a href="about">| About </a>
    <a href="users">| Users </a>
    <a href="admin">| Admin </a>

    <?php
        if (!$_SESSION) { //Om du är inloggad med namnet "Henrik" i Sessionen så visas länk till henrik1 sidan.
            echo '';
        } elseif ($_SESSION['username'] != 'Henrik') {
            echo '';
        } else {
            ?>
            <a href="henrik1">| Henrik </a>
            <?php
        }

        if (!$_SESSION) { //Om du är inloggad med namnet "Tomas" i Sessionen så visas länk till henrik1 sidan.
            echo '';
        } elseif ($_SESSION['username'] != 'Tomas') {
            echo '';
        } else {
            ?>
            <a href="tomas1">| Tomas </a>
            <?php
        }

        if (!$_SESSION) { //Den här sidan visas bara om det finns en aktiv session.
            echo '';
        } else {
            ?>
            <a href="user">| My Account </a>
            <?php
        }



        if (!$_SESSION) { //Om inloggad så får du alternativet att logga ut (namn) nere i footern.
            echo '';
        } else {
            ?>
            <a href="logout">| Logga ut (<?=$_SESSION['username']?>)</a>
            <?php
        }
    ?>



</div>

</body>
</html>
