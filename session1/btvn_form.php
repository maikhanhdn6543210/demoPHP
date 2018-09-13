<?php
$name_validate = null;
$email_validate = null;
$pass_validate = null;
$pass_confirm_validate = null;
$gender_validate = null;
$address_validate = null;

if (isset($_POST['email'])) {
    $email = $_POST['email'];
} else {
    $email = null;
}

if (isset($_POST['name'])) {
    $name = $_POST['name'];
} else {
    $name = null;
}

if (isset($_POST['password'])) {
    $pass = $_POST['password'];
} else {
    $pass = null;
}

if (isset($_POST['password'])) {
    $pass_con = $_POST['pass_confirm'];
} else {
    $pass_con = null;
}

if (isset($_POST['gender'])) {
    $gender = $_POST['gender'];
} else {
    $gender = null;
}
if (isset($_POST['city']) & isset($_POST['district'])) {
    $address = $_POST['city'] . $_POST['district'];
} else {
    $address = null;
}
if (isset($_FILES['file'])) {
    $file = $_FILES['file']['name'];
    $file_location = $_FILES['file']['tmp_name'];
    // echo $_FILES['file']['tmp_name'];
    // move_uploaded_file($file_location, __DIR__ . "/" . "uploads" . "/" . $file);
} else {
    $file = null;
    $file_location = null;
}

$citylist = include("vietnam_provinces_cities.php");
$provincelist = include("vietnam_provinces.php");

if (isset($_POST['submit'])) {
    if (empty($_POST['name'])) {
        $name_validate = "Please input your name";
    }
    if (empty($_POST['email'])) {
        $email_validate = "Please input your email";
    }
    if (empty($_POST['password'])) {
        $pass_validate = "Please input your password";
    }
    if ($_POST['password'] != $_POST['pass_confirm']) {
        $pass_confirm_validate = "Password confirm wrong";
    }
    if (empty($_POST['gender'])) {
        $gender_validate = "Please choose gender";
    }
    if (empty($_POST['city']) || empty($_POST['district'])) {
        $address_validate = "Please input your address";
    }
    
if( !empty($name) && !empty($email) && !empty($gender) && !empty($address) && !empty($file) && !empty($pass) && !empty($pass_con) && ($pass==$pass_con) ) {
        $message = "Your done with register";
        echo "<script type='text/javascript'>alert('$message');</script>";
        move_uploaded_file($file_location, __DIR__ . "/" . "uploads" . "/" . $file);
    }
}


// show_confirm();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
        crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<div class="container" >
    <body>
        <h1>Register</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInput">Full Name</label>
                <input type="text" class="form-control" id="exampleInput" placeholder="Full Name" name="name" value="<?php echo $name ?>">
                <p style="color: red"><?php echo $name_validate; ?></p>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email" name="email" value="<?php echo $email ?>">
                <p style="color: red"><?php echo $email_validate; ?></p>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" >
                <p style="color: red"><?php echo $pass_validate; ?></p>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword2">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password Confirm" name="pass_confirm">
                <p style="color: red"><?php echo $pass_confirm_validate; ?></p>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword2">Gender</label>
                <div class="radio">
                    <label class="radio-inline"><input type="radio" name="gender" value="male">male</label>
                    <label class="radio-inline"><input type="radio" name="gender" value="female">female</label>
                    <p style="color: red"><?php echo $gender_validate; ?></p>
                </div>
            </div>

            <div class="form-group">
                <label for="cityId">Address</label>
                <div> 
                    <label>City</label>
                    <input list="cityList" name="city" id="cityId">
                    <datalist id="cityList"  name="select_name">
                    <?php
                            foreach ($citylist as $key => $value) :
                    ?>
                        <option value="<?php
                                            $keySelect = $key;
                                            $_SESSION['value_name'] = $value['name'];
                                            echo $value['name'];
                                            ?>"> <?php echo $value['name'] ?></option>
                            <?php endforeach; ?>
                    </datalist>

                    <label>District</label>
                    <input list="districtList" name="district">
                    <datalist id="districtList">
                    <?php
                            foreach ($provincelist as $key => $value) {
                                ?>
                        <option value="<?php echo $value ?>">
                            <?php
                            }?>
                    </datalist>
                </div>
                <p style="color: red"><?php echo $address_validate; ?></p>
            </div>

            <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" id="exampleInputFile" name="file">
            </div>
            <button type="submit" class="btn btn-default" name="submit">Submit</button>
        </form>
    </body>
</div>
</html>

<?php
    
    function show_confirm()
    {
        if ((empty($name_validate) || empty($email_validate) || empty($pass_validate) || empty($pass_confirm_validate) || empty($gender_validate) || empty($address_validate))) {
            // header("Location: btvn_form.php");
        } else {
            $message = "wrong answer";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }



?>