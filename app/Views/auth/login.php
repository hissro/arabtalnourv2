<?php
// defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title> تسجيل الدخول   </title>

    <!-- Bootstrap core CSS -->
	<!-- <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet"> -->
	<link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.5.3/css/bootstrap.min.css" integrity="sha384-JvExCACAZcHNJEc7156QaHXTnQL3hQBixvj5RV5buE7vgnNEzzskDtx9NQ4p6BJe" crossorigin="anonymous">

    <!-- Custom styles for Login -->
    <link href="<?php echo base_url('assets/css/login.css'); ?>" rel="stylesheet">
	
  </head>
  <body dir="RTL">
    <form class="form-signin" method="post" action="<?= base_url('loginProcess') ?>">
	  <div class="text-center mb-4">


 		<h1 class="h3 mb-3 font-weight-normal">تسجيل الدخول</h1>
	  </div>

	  <div class="form-label-group">
		<input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
		<label for="username">اسم المستخدم</label>
	  </div>

	  <div class="form-label-group">
		<input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
		<label for="inputPassword">كلمة المرور</label>
	  </div>

	  <div class="form-label-group">
	  	<?php if (session()->getFlashdata('error')) : ?>
        	<p style="color: red;"><?= session()->getFlashdata('error') ?></p>
    	<?php endif; ?>
	  </div>


	  <div class="checkbox mb-3">
		<label>
		  <input type="checkbox" value="remember-me">   تذكرني
		</label>
	  </div>
	  <button class="btn btn-lg btn-primary btn-block" type="submit">تسجيل الدخول</button>
	  <p class="mt-5 mb-3 text-muted text-center">
		
	  جميع الحقوق محفوظة عربة النور
             <?php echo date("Y"); ?>
                
            <a class="btn btn-sm" target="_blank" href="https://hissro.net"><font color="#E5E4E2" >  Made it By Hissro </font> </a>
	  </p>
	</form>
  </body>
</html>
