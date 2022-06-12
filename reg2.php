<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *
        {
            margin: 0;
            padding: 0;
            background-color: #29323c;
        }
        .output{
            border: 1px solid white;
            border-radius: 10px;
            display: block;
            width: 500px;
            height: 550px;
            top: 15%;
            right: 30%;
            position: absolute;
            box-shadow: 0 4px 8px 0 rgb(184, 182, 182), 0 6px 20px 0 rgb(184, 182, 182);
            color: white;
        }
        .output h1
        {
            margin-left: 190px;
            margin-top: 15px;
        }
        .img
        {
            border: 2px solid white;
            position: absolute;
            left: 34%;
            width: 100px;
            height: 100px;
            margin: 15px;
            object-fit: cover;
        }
        .out{
            margin-top: 200px;
        }
        .topic
        {
            top: 50%;
            left: 30%;
            margin-left: 160px;
            margin-top: 20px;
        }
        .topic h4{
            font-size: 1.3em;
        }
        @media only screen and (max-width: 1100px) {
            .output{
                right: 3%;
                width: 93.5vw;
            }
            .topic
            {
                margin-left: 15vw;
                margin-top: 20px;
            }
            .output h1
            {
                margin-left: 34vw;
            }
            .img
            {
                left: 30%;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <div class="output">
        <h1>Profile</h1>
        <div class="img">
       <?php
       if(isset($_POST['submit']))
       {
           $target_path="images/";
           $target_path=$target_path.basename($_FILES['f']['name']);
           if(move_uploaded_file($_FILES['f']['tmp_name'], $target_path))
           {
                $conn=new mysqli("localhost", "root", "", "test");
                $sql="Insert into upload_image(`path`) values('$target_path')";
                if($conn-> query($sql) == TRUE )
                {
                    echo "";
                }
                else 
                {
                    echo "Error:".$sql.$conn->error;
                }
                $sqll="select path from upload_image order by id desc limit 1";
                $result=$conn-> query($sqll);
                if($result->num_rows>0)
                {
                    while($row=$result->fetch_assoc())
                    {
                        $path=$row['path'];
                        echo "<img src='$path' height='100' width='100'>";
                    }
                }
                $conn->close();
            }
        }
       ?>
        </div>
        <div class="out">
            <div class="topic" id="name">
                <h4>Name: 
                    <?php
                    $a=$_POST['a'];
                    echo $a.".";
                    ?>
                </h4>
            </div>
            <div class="topic" id="age">
                <h4>Age: 
                    <?php
                    $b=$_POST['b'];
                    echo $b.".";
                    ?>
                </h4>
            </div>
            <div class="topic" id="gender">
                <h4>Gender: 
                    <?php
                    $c=$_POST['c'];
                    echo $c.".";
                    ?>
                </h4>
            </div>
            <div class="topic" id="college">
                <h4>College: 
                    <?php
                    $d=$_POST['d'];
                    echo $d.".";
                    ?>
                </h4>
            </div>
            <div class="topic" id="enroll">
                <h4>Enrollment: 
                    <?php
                    $e=$_POST['e'];
                    echo $e.".";
                    ?>
                </h4>
            </div>
        </div>
    </div>
</div>
</body>
</html>