<div class="footer">
</br>
</br>
    <a href="home">Home </a>
    <a href="about">| About </a>
    <a href="users">| Users </a>
    <a href="admin">| Admin </a>

    <?php
        if (!$_SESSION) {
            echo '';
        } elseif ($_SESSION['username'] != 'Henrik') {
            echo '';
        } else {
            ?>
            <a href="henrik1">| Henrik </a>
            <?php
        }

        if (!$_SESSION) {
            echo '';
        } elseif ($_SESSION['username'] != 'Tomas') {
            echo '';
        } else {
            ?>
            <a href="tomas1">| Tomas </a>
            <?php
        }



        if (!$_SESSION) {
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