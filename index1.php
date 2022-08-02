<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</script>
    <style>
        fieldset{
            text-align:right;
            height:190px;
            width:400px;
            margin-left:400px;
            padding-top:11px;
        }
        p{
            margin:-7px;
        }
        #b{
            color:blue;
            font-style:bold;
        }
        .cont div{
            float: left;
    clear: none; 
        }
        #nam{
            color:red;
            margin-right:100px;
        }
        #dv1{
            font-size:40px;
            font-style:bold;
            background-color:blue;
            height:170px;
            width:120px;
            text-align:center;
            margin-right:30px;
            margin-top:-9px;
            color:white;
            margin-left:-12px;
        }
        span{
            text-align:left;
        }
        img{
            height:110px;
            width:100px;
        }
        #ye{
            background-color:#5dd65d;
            color:white;
            font-size:19px;
            padding-top:15px;
            padding-bottom:15px;
            width:120px;
            margin-left:0px;
        }
    </style>
</head>
<body>
<?php
$dbServername="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="id_card";
$conn=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
$name=$_POST['nm'];
$year=$_POST['nm1'];
$blood=$_POST['blood'];
$id=$_POST['id'];
$dt=$_POST['date'];
$img=$_POST['im'];
if(!$conn){
    die("Connection Failed" .mysqli_connect_error());
}
else{
    echo "Connected";
}
$sql="INSERT into id_card_info(Name,Year,Id_No,DOB,BG) VALUES ('$name','$year','$id','$dt','$blood');";
if(mysqli_query($conn, $sql)){
    echo "Inserted Successfully";
}
else{
    echo "Not inserted";
}
$name=$_POST['nm'];

$sql1="SELECT Name,Year,DOB,BG,Id_No FROM id_card_info WHERE Name='$name';";
$result = $conn->query($sql1);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
 
 
echo "<div class='cont'><fieldset><div id='dv1'>SNJB <br><img src=''><br><p id='ye'>".$row['Year']."</p></div><div><p>Late Sau.Kantabai Bhavarlalji Jain</p><br><p id='b'>COLLEGE OF ENGINEERING</p><br><p>Neminagar,Chandwad,Dist. Nashik</p><hr><span><p id='nam'>".$row['Name']." </p><br><p>Academic Year : 2021-2022</p><br><p>Course : BE COMP. ENGG.</p><br><p>Date of Birth : ".$row['DOB']."</p><br><p>Blood Group : ".$row['BG']."</p></span></div></fieldset></div>";
 }
}?>
</body>
</html>
