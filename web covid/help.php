<html>
    <head>
    <style >table,th,td { 
    border:3px solid black;
    align-self: auto;
  
}
th{
    font-size: 22px;
}
td{
    font-size: 20px;
}
</style>
    </head>
    <body>
        <h1>requests</h1>
        <div>
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'test');

            $getdata = "SELECT * FROM `test` WHERE 1";
            $getdataResult = mysqli_query($conn,$getdata);
            echo "<table>";
            
            while($a = mysqli_fetch_assoc($getdataResult)){
                
                echo "<tr>
                <td>".$a['fname']."</td>
                <td>".$a['lname']."</td>
                <td>".$a['age']."</td>
                <td>".$a['gender']."</td>
                <td>".$a['mobile']."</td>
                <td>".$a['subject']."</td>
                <td>".$a['city']."</td>
                </tr>";
            }
            echo "</table>";
            ?>

        </div>
    </body>
</html>
