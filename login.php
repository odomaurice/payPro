<?php

include('./templates/auth_header.php');

$title = 'Login';

$email = $title = $password = '';
$errors = array('email' => '', 'password' => '');

if (isset($_POST['submit'])) {

  // check email
  if (empty($_POST['email'])) {
    $errors['email'] = 'An email is required';
  } else {
    $email = $_POST['email'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors['email'] = 'Email must be a valid email address';
    }
  }
} // end POST check

?>

<!DOCTYPE html>

<title>Arkinvest||<?= $title; ?></title>
<html>


<div class="row mt-5 justify-center">
  <div class="col-sm-8">
    <div class="card">
      <div class="card-body">

        <!-- Makes POST request to /register route -->

        <h3 class="text-success mb-2">Hey, Welcome Again to Arkinvest</h3>
        <form action="login.php" method="post">
          <div class="form-group">
            <div class="Container  m-3 p-3 justify-center">

              <label for="email">Your Email:</label>
              <input class=" text-blue" name="email" type="email" value="<?php echo htmlspecialchars($email) ?>" /> <br>
              <div class="text-danger"><?php echo $errors['email']; ?></div> <br>
              <label for="password">Your Password:</label>
              <input class=" text-blue" name="password" type="password" value="<?php echo htmlspecialchars($password) ?>" />
              <div class="text-danger"><?php echo $errors['password']; ?></div>
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

<div class="m-0 p-3  end-footer text-hover-orange">
  &copy ARKINVEST 2022
</div>



<!-- <div class="m-0 p-3 bg-primary end-footer text-hover-orange">
  &copy CYCLEPAY 2022
</div> -->


</body>