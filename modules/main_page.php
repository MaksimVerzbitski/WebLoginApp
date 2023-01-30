<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<div class = "col-12">
  <img src="pictures/vote.png" class="center"  class="rounded mx-auto d-block" alt="...">
</div> 
    <?php 
    if(isset($_POST["submit"])){
        $fullName = $_POST["fullname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $passwordRepeat = $_POST["repeat_password"];

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $errors = array();

        if(empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat)){
            array_push($errors, "All fields are required");
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            array_push($errors, "Email is not valid");
        }
        if(strlen($password)< 8){
            array_push($errors, "Password must be atleast 8 characters long");
        }
        if($password !== $passwordRepeat){
            array_push($errors, "Password do not match");
        }
        if(count($errors)>0){
            foreach ($errors as $error)
            {
                echo "<div class='alert alert-danger'>$error</div>";
            }
        } else {
            require_once "database.php";
        }
    }

    ?>
    <form action="index.php" method = "post">
        
        
        <div class="form-group">
            <input type="text" class="form-control" name="fullname" placeholder="Full Name:">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email:">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password:">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="repeat_password" placeholder="Repeat Password:">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Register" name="submit">
        </div>

    </form>
