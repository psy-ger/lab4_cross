
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
  <option value="">Select a person:</option>
  <option value="1">Bohdan Novickyi</option>
  <option value="2">Stepan Nedrya</option>
  <option value="3">Ivan Ivanov</option>
  </select>
</form>
<br>
<div id="txtHint"><b>Person info will be listed here...</b></div>
<a href="crud.php">Come back</a>
</body>
</html>