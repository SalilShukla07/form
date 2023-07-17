

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="<?=base_url()?>application/libraries/bootstrap.min.cs">
<link rel="stylesheet" href="<?=base_url()?>application/libraries/bootstrap.min.js">
<link rel="stylesheet" href="<?=base_url()?>application/libraries/jquery.min.js">


<p style="background-color:#177da6; height:40px; color:white; font-size:25px; padding:5px;">Admin Panel</p>
<div class="container">
</br>
<h1 style="padding:1px;">Admin Form</h1>
</br>
<form method="POST" action="<?=base_url()?>index.php/welcome/login">
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="text" id="form2Example1" class="form-control" name="uname" required />
    <label class="form-label" for="form2Example1">User Name</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="form2Example2" class="form-control" name="pass" required />
    <label class="form-label" for="form2Example2">Password</label>
  </div>
  
<p id="capimg"><?php echo $captcha; ?></p>
<label>Captcha code</label>
 <input type="text"class="form-control" name="code" required />
  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
        <label class="form-check-label" for="form2Example31"> Remember me </label>
      </div>
    </div>

    <div class="col">
      <!-- Simple link -->
      <a href="#!">Forgot password?</a>
    </div>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Login</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Not a member? <a href="<?=base_url()?>index.php/welcome/register">Register</a></p>
    <p>or sign up with:</p>
    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-facebook-f"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-google"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-twitter"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-github"></i>
    </button>
<!--<?php echo validation_errors(); ?>-->
  </div>
</form>
</div>
<script type = "text/javascript">
BootstrapDialog.alert({
            title: 'An Error Occured',
            message: 'Your Registration failed',
            type: BootstrapDialog.TYPE_DANGER,
            buttonLabel: 'Close'

        });

</script>