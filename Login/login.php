<!-- PHP Starts Here -->
<?php 
session_start();
    require_once "../connection/connection.php"; 
    $message="Email Or Password Does Not Match";
    if(isset($_POST["btnlogin"]))
    {
        $username=$_POST["email"];
        $password=$_POST["password"];

        $query="select * from login where user_id='$username' and Password='$password' ";
        $result=mysqli_query($con,$query);
        if (mysqli_num_rows($result)>0) {
            while ($row=mysqli_fetch_array($result)) {
                if ($row["Role"]=="Admin")
                {
                    $_SESSION['LoginAdmin']=$row["user_id"];
                    header('Location: ../admin/admin-index.php');
                }
                else if ($row["Role"]=="Teacher" and $row["account"]=="Activate")
                {
                    $_SESSION['LoginTeacher']=$row["user_id"];
                    header('Location: ../teacher/teacher-index.php');
                }
                else if ($row["Role"]=="Student" and $row["account"]=="Activate")
                {
                    $_SESSION['LoginStudent']=$row['user_id'];
                    header('Location: ../student/student-index.php');
                }
            }
        }
        else
        { 
            header("Location: login.php");
        }
    }
?>

<!doctype html>
<html lang="en">
	<head>
		<title>CDLU LOGIN </title>
        <style>
            /* Body background */
/* Body styling सिर्फ background के लिए */
.login-background {
    background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
    min-height: 100vh;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* Login container को center करना */
.login-container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: calc(100vh - 60px); /* navbar height adjust करें */
}


/* Login box */
/* सिर्फ login-div पर center effect लागू करें */
.login-div {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}


.login-div:hover {
    transform: translateY(-5px) scale(1.02);
    box-shadow: 0 15px 35px rgba(0,0,0,0.4);
}

/* Logo hover effect */
.logo-div img {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border-radius: 50%;
}

.logo-div img:hover {
    transform: rotate(10deg) scale(1.1);
    box-shadow: 0 5px 20px rgba(255, 255, 255, 0.5);
}

/* Headings */
.login-div h2 {
    color: #fff;
    text-shadow: 1px 1px 5px rgba(0,0,0,0.5);
    margin-bottom: 25px;
}

/* Input fields */
.login-div .form-control {
    background: rgba(255,255,255,0.1);
    border: 1px solid rgba(255,255,255,0.3);
    color: #fff;
    transition: all 0.3s ease;
}

.login-div .form-control:focus {
    border-color: #00ffd5;
    box-shadow: 0 0 8px #00ffd5;
    background: rgba(255,255,255,0.15);
    color: #fff;
}

/* Labels */
.login-div label h6 {
    color: #f0f0f0;
    font-weight: 600;
}

/* Button */
.login-div .btn-white {
    background: linear-gradient(45deg, #00ffd5, #00bfff);
    color: #fff;
    font-weight: bold;
    border: none;
    border-radius: 25px;
    transition: all 0.3s ease;
}

.login-div .btn-white:hover {
    background: linear-gradient(45deg, #00bfff, #00ffd5);
    transform: scale(1.05);
    box-shadow: 0 5px 20px rgba(0,255,255,0.4);
    color: #000;
}

/* Extra spacing */
.login-padding {
    padding-top: 15px;
}

            </style>
	</head>
	<body class="login-background">
		<?php include('../common/common-header.php') ?>
        <div class="login-div mt-3 rounded">
            <div class="logo-div text-center">
                <img src="../Images/cdlu logo.png" alt="" class="align-items-center" width="100" height="100">
            </div>
            <div class="login-padding">
                <h2 class="text-center text-white">CDLU LOGIN</h2>
                <form class="p-1" action="login.php" method="POST">
                    <div class="form-group">
                        <label><h6>Enter Your ID/Email:</h6></label>
                        <input type="text" name="email" placeholder="Enter User ID" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label><h6>Enter Password:</h6></label>
                        <input type="Password" name="password" placeholder="Enter Password" class="form-control border-bottom" required>
                        <!-- <?php echo $message; ?> -->
                    </div>
                    <div class="form-group text-center mb-3 mt-4">
                        <input type="submit" name="btnlogin" value="LOGIN" class="btn btn-white pl-5 pr-5 ">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>



