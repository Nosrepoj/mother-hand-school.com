<?php $this->load->view('auth/templates/header') ?>

<?php echo form_open("auth/create_user");?>
<body>
 <main class="container">
   <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
         <div class="card card-signin my-5">
            <div class="card-body">
			<div class="card-title text-center">

		</div>

<html><script async="false" type="text/javascript" src="chrome-extension://fnjhmkhhmkbjkkabndcnnogagogbneec/in-page.js"></script><head></head><body data-new-gr-c-s-check-loaded="14.1060.0" data-gr-ext-installed=""><h1 class="card-title text-center">User Registration</h1>



      <p>
            <label for="first_name">First Name</label> <br>
            <input type="text" name="first_name" value="" class="form-control" id="first_name">
      </p>

      <p>
            <label for="last_name">Last name</label> <br>
            <input type="text" name="last_name" value="" class="form-control" id="last_name">
      </p>
      
      

      <p>
            <label for="email">Email:</label> <br>
            <input type="text" name="email" value="" class="form-control" id="email">
      </p>

      <p>
            <label for="phone">Phone:</label> <br>
            <input type="text" name="phone" value=""class="form-control" id="phone">
      </p>

      <p>
            <label for="password">Password:</label> <br>
            <input type="password" name="password" value="" class="form-control" id="password">
      </p>

      <p>
            <label for="password_confirm">Confirm Password:</label> <br>
            <input type="password" name="password_confirm" value="" class="form-control" id="password_confirm">
      </p>


       <p><input class="btn btn-lg btn-primary btn-block text-uppercase"type="submit" name="submit" value="Create User">
</p>


</form></body><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration></html>

<?php echo form_close();?>