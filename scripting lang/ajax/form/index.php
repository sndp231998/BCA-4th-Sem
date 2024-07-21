<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
            <from>
Name: <input type="text" name="ctno" >
<br><br>
CitizenNo: <input type="text" name="ctno" >
<br><br>
District: <select name="" id="">
    <option>Jhapa</option>
    <option>morang</option>
    <option>sunsari</option>
    <option>ktm</option>
    <option>rautahat</option>

</select>
<br><br>
Choose city: <select name="" onchange="myfub(this.value)">
    <option>j</option>
    <option>m</option>
    <option>s</option>
    <option>k</option>
    <option>r</option>
</select>
    <form>
    </center>

</body>
<script>
    function myfun(data);
    {
        alert(data);
    }
</script>
</html>