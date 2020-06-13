<?php
    session_start();
    include_once ("../lang/lang.".$_SESSION['NowLang'].".php");



    ?>
<html>
<body>

    <form action="settinglist.php" method="post" enctype="multipart/form-data">
        <table>
        <label>Имя Пользователя</label><br>
        <input type="text" name="user_name" value=" "> <br>

        <label>Фамилия Пользователя</label><br>
        <input type="text" name="sur_name" value=" "> <br>

        <label><? echo $Lang['login_lan']?></label><br>
        <input type="text" name="bad_login" > <br>

        <label><? echo $Lang['login_new']?></label><br>
        <input type="text" name="new_login" value=" "> <br>

        <label><? echo $Lang['pass_lan']?></label><br>
        <input type="password" name="bad_password"> <br>

        <label><? echo $Lang['pass_new']?></label><br>
        <input type="text" name="new_password" value=" "> <br>

        <button type="submit"><? echo $Lang['button_lan']?></button>
        </table>
        <?php
        if (isset($_SESSION['msg1'])) {
            echo '<div>' . $_SESSION['msg1'] . '</div>';
            unset($_SESSION['msg1']);
        }
        ?>
    </form>
</body>
</html>
