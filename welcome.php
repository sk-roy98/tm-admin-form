<?php
session_start();
// if(isset($POST["submit"])){
//     $name = $_POST['name'];
//     $address = $_POST['address'];
// }
// echo "<a href = 'logout.php'> logout </a>" 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href = "styles.css" rel = "stylesheet">
    <title>Document</title>
</head>
<body>
    <div class ="welcome__container" >
    <h2>Welcome <?php echo $_SESSION['email']; ?> </h2>
    <form action=" " method="post" enctype="multipart/form-data" >
        <label for="name">Name</label><br>
        <input  class="input box" id="name" name="name"/><br>

        <label for="address">Address</label><br>
        <select class = "input" name="address" id="address">
            <option value="Delhi">Delhi</option>
            <option value="Mumbai">Mumbai</option>
            <option value="Bangalore">Bangalore</option>
            <option value="Hyderabad">Hyderabad</option>
        </select>
        <input class="button" type= "button" name="submit" value="update" onclick= "AddRow(this.value)" ></input>
        <a href = "logout.php">Logout</a>
    </form>
    </div>

    <table border="1" id="display">
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <!-- <td></td>
                <td></td> -->
            </tr>
        </tbody>  
    </table>

    <script>
        var list1 = [];
        var list2 = [];
        var n = 1;
        var x = 0;
        function AddRow(){

            var addRown = document.getElementById('display');
            var newRow = addRown.insertRow(n);

            list1[x] = document.getElementById('name').value;
            list2[x] = document.getElementById('address').value;

            var cel1 = newRow.insertCell(0);
            var cel2 = newRow.insertCell(1);
            
            cel1.innerHTML = list1[x];
            cel2.innerHTML = list2[x];
        
        n++;
        x++;
        };
    </script>
</body>
</html>
