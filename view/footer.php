<div>
</br>
</br>
    <a href="home">Home </a>
    <a href="about">| About </a>
    <a href="users">| Users </a>
    <a href="admin">| Admin </a>

    <?php
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