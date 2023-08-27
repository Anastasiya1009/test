<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
    <title>Account List</title>
    <link rel="stylesheet" href="style.css">       
</head>
<body>
    <h1>Account List</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Company Name</th>
            <th>Position</th>
            <th>Phone 1</th>
            <th>Phone 2</th>
            <th>Phone 3</th>
        </tr>
        <?php        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "new_users";

        if (isset($_GET['pag'])) {
            $pag = $_GET['pag'];
        } else { 
            $pag = 1;
        }


        $conn = new mysqli($servername, $username, $password, $dbname);
       
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $size_page = 10; 
        $offset = ($pag-1) * $size_page;   
        $count_sql = "SELECT COUNT(*) FROM `accounts`";
        $sql = "SELECT * FROM accounts";
        $result = $conn->query($sql);     

        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $size_page);     
        $sql_ = "SELECT * FROM `accounts` LIMIT $offset, $size_page";
        $res_data = mysqli_query($conn, $sql_);
        if ($result->num_rows > 0) {
        while($row = mysqli_fetch_array($res_data)){            
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["first_name"] . "</td>";
                echo "<td>" . $row["last_name"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["company_name"] . "</td>";
                echo "<td>" . $row["position"] . "</td>";
                echo "<td>" . $row["phone1"] . "</td>";
                echo "<td>" . $row["phone2"] . "</td>";
                echo "<td>" . $row["phone3"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "0 results";
        }          
        $conn->close();
        ?>
    </table>   

    <div class="pagination">
        <!-- <a href="#">&laquo;</a>
        <a href="#" class="active">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <a href="#">&raquo;</a> -->
    
    <div class="pagination">
        <?php
        for($p=0; $p<=$total_rows; $p++){
         ?>
        <a href="?pag = <?php echo $p?>" class="active"><?php echo $p+1?></a>
       <?php } ?>
    </div>
    <br><br>
    <a href="add.php">Add New Account</a>
</body>
</html>