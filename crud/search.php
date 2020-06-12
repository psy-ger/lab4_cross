
<html>
<head>
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}


</script>
</head>
<body>

<form>
<select name="users" onchange="showUser(this.value)">
    <?
    require_once '../connect.php';

    mysqli_select_db($connect,"ajax_demo");
    $sql="SELECT * FROM `users`";
    $result = mysqli_query($connect,$sql);

    echo '<option value="">' .'Select a person'. '</option>';
    while($row = mysqli_fetch_array($result)) {
        echo '<option value="'. $row['id'].'">'.$row['name'] ." " .$row['surname'].'</option>';
    }
    var_dump($row['id']);
    ?>

  </select>
</form>
<br>
<div id="txtHint"><b>Person info will be listed here...</b></div>
<a href="crud.php">Come back</a>
</body>
</html>