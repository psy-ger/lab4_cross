<?php
    session_start();
    include_once ("../lang/lang.".$_SESSION['NowLang'].".php");
    ?>
<html>
<body>

    <form action="settinglist.php" method="post" enctype="multipart/form-data">
        <label>Имя Пользователя</label>
        <input type="text" name="user_name"> <br>

        <label>Фамилия Пользователя</label>
        <input type="text" name="sur_name"> <br>

        <label><? echo $Lang['login_lan']?></label>
        <input type="text" name="bad_login"> <br>

        <label><? echo $Lang['login_new']?></label>
        <input type="text" name="new_login"> <br>

        <label><? echo $Lang['pass_lan']?></label>
        <input type="password" name="bad_password"> <br>

        <label><? echo $Lang['pass_new']?></label>
        <input type="password" name="new_password"> <br>

        <button type="submit"><? echo $Lang['button_lan']?></button>
        <?php
        if (isset($_SESSION['msg1'])) {
            echo '<div>' . $_SESSION['msg1'] . '</div>';
            unset($_SESSION['msg1']);
        }
        ?>
    </form>
</body>
</html>