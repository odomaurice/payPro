<?php

include('./templates/auth_header.php');

include('./config/db.config.php');

$title = 'Register';

$first_name = $last_name = $user_name = $email = $password = $password_reset = $picture = '';
$errors = array('first_name' => '', 'last_name' => '', 'user_name' => '', 'email' => '', 'password' => '', 'password_reset' => '', 'picture' => '');

if (isset($_POST['submit'])) {

  // check first_name
  if (empty($_POST['first_name'])) {
    $errors['first_name'] = 'firstname is required <br/>';
  } else {
    $first_name = $_POST['first_name'];
    if (!preg_match('/^[a-zA-Z\s]+$/', $first_name)) {
      $errors['first_name'] = 'First name must be letters and spaces only';
    }
  }
  //check last_name

  if (empty($_POST['last_name'])) {
    $errors['last_name'] = 'lastname is required <br/>';
  } else {
    $last_name = $_POST['last_name'];
    if (!preg_match('/^[a-zA-Z\s]+$/', $last_name)) {
      $errors['last_name'] = 'Lastname must be letters and spaces only';
    }
  }

  //check user_name
  if (empty($_POST['user_name'])) {
    $errors['user_name'] = 'username is required <br/>';
  } else {
    $user_name = $_POST['user_name'];
    if (!preg_match('/^[a-zA-Z\s]+$/', $user_name)) {
      $errors['user_name'] = 'Username must be letters and spaces only';
    }
  }

  //check email
  if (empty($_POST['email'])) {
    $errors['email'] = 'An email field is required <br/>';
  } else {
    $email = $_POST['email'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors['email'] = 'Please enter a valid email address';
    }
  }
  //check password
  if (empty($_POST['password'])) {
    $errors['password'] = 'password is required <br/>';
  } else {
    $password = $_POST['password'];
    if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,10}$/", $password)) {
      $errors['password'] = "Password must contain minimum eight and maximum of 10 characters, at least one uppercase letter, one lowercase letter, one number and one special character:";
    }
  }

  // check password_reset
  if (empty($_POST['password_reset'])) {
    $errors['password_reset'] = 'Field is required <br/>';
  } else {
    $password_reset = $_POST['password_reset'];
    if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,10}$/", $password)) {
      $errors['password_reset'] = "Password does not match:";
    }
  }

  // //check picture
  // if (empty($_POST['picture'])) {
  //     $errors['picture'] =  'An image is required <br/>';
  // } else {
  //     $errors['picture'] = $_POST['picture'];
  // }

  if (array_filter($errors)) {
    //echo "errors in the form";
  } else {
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $password_reset = mysqli_real_escape_string($conn, $_POST['password_reset']);

    //create sql

    $sql = "INSERT INTO transact(firstname,lastname,username,email,password,password_reset) VALUES('$first_name', '$last_name', '$user_name', '$email', '$password', '$password_reset')";

    //save to DB and check
    if (mysqli_query($conn, $sql)) {
      //success
      header('Location: dashboard.php');
    } else {
      //error
      echo 'query error: ' . mysqli_error($conn);
    }
  }
}




// end of post check


?>


<!DOCTYPE html>

<title>Arkinvest||<?= $title; ?></title>
<html>




<div class="row mt-5 justify-center">
  <div class="col-sm-8">
    <div class="card">
      <div class="card-body">

        <!-- Makes POST request to /register route -->

        <h3 class="text-success   mb-2">Hi! <?php echo $user_name; ?>, Welcome To Arkinvest</h3>
        <form action="register.php" method="post">
          <div class="form-group">
            <div class="Container  m-3 p-3 justify-center">

              <label>Your Firstname:</label>
              <input class=" text-blue" name="first_name" type="text" value="<?php echo htmlspecialchars($first_name) ?>">
              <div class="text-danger"><?php echo $errors['first_name']; ?></div>

              <label>Your Lastname:</label>
              <input class=" text-blue" name="last_name" type="text" value="<?php echo htmlspecialchars($last_name) ?>" />
              <div class="text-danger"><?php echo $errors['last_name']; ?></div> <br>
              <label for="username">Your Username:</label>
              <input class=" text-blue" name="user_name" type="text" value="<?php echo htmlspecialchars($user_name) ?>" />
              <div class="text-danger"><?php echo $errors['user_name']; ?></div>
              <br>
              <label for="email">Your Email:</label>
              <input class=" text-blue" name="email" type="email" value="<?php echo htmlspecialchars($email) ?>" /> <br>
              <div class="text-danger"><?php echo $errors['email']; ?></div> <br>
              <label for="password">Your Password:</label>
              <input class=" text-blue" name="password" type="password" value="<?php echo htmlspecialchars($password) ?>" />
              <div class="text-danger"><?php echo $errors['password']; ?></div>
              <br>
              <label for="password_reset">Confirm your password:</label>
              <input class=" text-blue" name="password_reset" type="password" value="<?php echo htmlspecialchars($password_reset) ?>" />
              <div class="text-danger"><?php echo $errors['password_reset']; ?></div>
              <br>

              <button class="btn waves-effect waves-light" type="submit" name="submit">Submit
                <i class="material-icons right"></i>
              </button><br><br>
              <input type="checkbox" name="" id=""><a class="p-1" href="/policy"> I agree to the terms</a><br>
              <a class="p-2" href="login.php">I already have a membership</a>
        </form>

      </div>
    </div>
  </div>
</div>
</div>
</div>

  <div class="col-sm-4">
    <div class="card social-block">
      <div class="card-body">
        <a class="btn btn-block btn-social btn-google text-hover-orange text-white" href="/auth/google" role="button">
          <i class="fab fa-google text-hover-orange"></i>
          Sign Up with Google
        </a>
      </div>
    </div>
  </div>

</div>
</div>

<div class="m-0 p-3 end-footer text-hover-orange">
  &copy ARKINVEST 2022
</div>
</body>