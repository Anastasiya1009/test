<!DOCTYPE html>
<html>
<head>
    <title>Add New Account</title>
</head>
<body>
    <h1>Add New Account</h1>
    <form action="save.php" method="post">
        <label for="first_name">First Name:</label><br>
        <input type="text" id="first_name" name="first_name" required><br><br>
        
        <label for="last_name">Last Name:</label><br>
        <input type="text" id="last_name" name="last_name" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="company_name">Company Name:</label><br>
        <input type="text" id="company_name" name="company_name"><br><br>
        
        <label for="position">Position:</label><br>
        <input type="text" id="position" name="position"><br><br>
        
        <label for="phone1">Phone 1:</label><br>
        <input type="text" id="phone1" name="phone1"><br><br>
        
        <label for="phone2">Phone 2:</label><br>
        <input type="text" id="phone2" name="phone2"><br><br>
        
        <label for="phone3">Phone 3:</label><br>
        <input type="text" id="phone3" name="phone3"><br><br>
        
        <input type="submit" value="Add">
    </form>
</body>
</html>