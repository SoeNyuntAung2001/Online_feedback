<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `faculty` WHERE CONCAT (`Semester`) LIKE 'i".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `faculty`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "feedback_system");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
        <form action="Testing1.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
            <table>

<?php
    echo "<table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>";
    echo "<tr>";
    
    echo "<th>S.No</th>";
    echo "<th>Name</th>";
    echo "<th>Designation</th>";
    echo "<th>Programme</th>";
    echo "<th>Department</th>";
    echo "<th>Semester</th>";
    echo "<th>User Name</th>";  
    echo "<th>Email</th>";
    echo "<th>Mobile</th>";
    echo "<th>Password</th>";
    echo "<th>Update</th>";
    echo "<th>Delete</th>";
    echo "<th>Status</th>";
    echo "</tr>";
    
    $i=1;
    //$que=mysqli_query($conn,"select * from faculty");
    //$que=mysqli_query($conn,"select * from faculty ");
    while($row = mysqli_fetch_array($search_result))
    {
        echo "<tr>";
        echo "<td>".$i."</td>";
        echo "<td>".$row['Name']."</td>";
        echo "<td>".$row['designation']."</td>";
        echo "<td>".$row['programme']."</td>";
        echo "<td>".$row['department']."</td>";
        echo "<td>".$row['semester']."</td>";
        echo "<td>".$row['user_alias']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['mobile']."</td>";
        echo "<td>".$row['password']."</td>";
        echo "<td class='text-center'><a href='dashboard.php?id=$row[id]&info=edit_faculty'><span class='glyphicon glyphicon-pencil'style=color:green;></span></a></td>";
        
        
        echo "<td class='text-center'><a href='#' onclick='deletes($row[id])'><span class='glyphicon glyphicon-remove' style=color:red;></span></a></td>";
        
        
        
        if($row['status'])
        {
        echo "<td><a href='update_status.php?user_id=".$row['id']."&status=".$row['status']."'><span class='glyphicon glyphicon-user' style=color:green;></span></a></td>";
        }
        else
        {
        echo "<td><a href='update_status.php?user_id=".$row['id']."&status=".$row['status']."'><span class='glyphicon glyphicon-user' style=color:green;></span></a></td>";
        }
        echo "</tr>";
        $i++;
    }
    

    
?>



                
            </table>
        </form>
        
    </body>
</html>
