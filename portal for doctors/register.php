<!DOCTYPE html>
<html>
<head>
    <title>register</title>   
    <link rel="stylesheet" href="register.css">
</head>

<body>  
<h1 align="center">REGISTER</h1>
<form action="result.php" align="center" method="POST">

    <label for="name">NAME</label>
    <input type="text" id="name" name="name">
    <br><br>
    <label for="age">AGE</label>
    <input type="text" id="age" name="age">
    <br><br>
    <label for="gender">GENDER</label>
    <input type="radio"  name="gender" value="1">MALE
    <input  type="radio" name="gender" value="2">FEMALE
    <br><br>
    <label for="password">CREATE PASSWORD</label>
    <input type="password" id="password" name="password">
    <br><br>
    <label for="confirm">CONFIRM PASSWORD</label>
    <input type="password" id="confirmpassword" name="confirm">
    <br><br>
    <button type="submit">SUBMIT</button>
    
</form>
</body>
</html>