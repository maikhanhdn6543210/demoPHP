<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <h1>Register form</h1>

<div class="container">
    <form action="form.php" method="POST">
    <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <p>
        <?php
            check_name();
       ?>
    </p>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" name="name"> 
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <p>
        <?php
            check_email();
       ?>
    </p>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
  </div>
  <button type="submit" class="btn btn-default" name="submit">Submit</button>
</form>
<?php echo $_SERVER["REQUEST_METHOD"] == ""; ?>
</div>
</body>
</html>


<?php
    function check_name()
    {
        $name_validate = '';
        if (isset($_POST['submit'])) {
            if (empty($_POST["name"])) {
                $name_validate = "Please input your name!!!";
            }
            echo $name_validate;
        }
    }

    function check_email()
    {
        $name_validate = '';
        if (isset($_POST['submit'])) {
            if (empty($_POST["email"])) {
                $name_validate = "Please input your email!!!";
            }
            echo $name_validate;
        }
    }
?>