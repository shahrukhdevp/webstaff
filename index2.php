<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">First Name</label><br>
        <input type="text" name="first_name" id="first_name" value=""><br>
         <select>
            <option value="1">1</option>
            <option value="1">1</option>
        </select>
    </form>
</body>
</html>
<script src="event_script.js"></script>
<script><?php if(isset($_GET['id'])) { ?> edit("first_name"); <?php } ?> </script>