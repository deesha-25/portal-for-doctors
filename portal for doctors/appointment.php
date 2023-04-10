<html>
<head>
    <title>appoinment</title>
    <link rel='stylesheet' href='appoinment.css'>
    </head>
    <body>
<h1>APPOINTMENT</h1>
<form action="result2.php" align="center" method="POST">
    <label for="name">PATIENT NAME</label>
    <input type="text" id="name" name="name">
    <br><br>
    <label for="Contact">CONTACT</label>
    <input type="text" id="contact" name="Contact">
    <br><br>
    <label for="Age">AGE</label>
    <input type="text" id="Age" name="Age">
    <br><br>
    <label for="Gender">GENDER</label>
    <input type="radio"  name="Gender" value="1">MALE
   <input type="radio" name="Gender" value="2">FEMALE
    <br><br>
    <label for="Time">TIME</label>
    <input type="number" id="time" name="Time">
    <br><br>
    <label for="Date">DATE</label>
    <input type="dd/mm/yyyy" id="date" name="Date">
    <br><br>
    <label for="Department">DEPARTMENT</label>
    <select name="Dept" id="dropbox">
        <option value="1"></option>
        <option value="2">NEUROLOGIST(9am to 10am)</option>
        <option value="3">PEDIATRICIAN(10am to 11am)</option>
        <option value="4">CARDIOLOGY(11am to 12pm)</option>
        <option value="5">ENT(4pm to 6pm)</option>
        <option value="6">PSYCHIATRIST(7pm to 8 pm)</option>
    </select><br><br>
<button type="submit">SUBMIT</button>
</form>
</body>
</html>