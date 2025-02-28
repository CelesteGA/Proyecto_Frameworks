<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    include('../Admin/db_connect.php');
    ?>

<!--
<php 
session_start();
if(isset($_SESSION['login_id']))
header("location:index.php?page=home");

$query = $conn->query("SELECT * FROM system_settings limit 1")->fetch_array();
		foreach ($query as $key => $value) {
			if(!is_numeric($key))
				$_SESSION['setting_'.$key] = $value;
		}
                >
-->

<!-- Boxicons -->
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- css -->
<link rel="stylesheet" href="../Admin/css/login.css">
<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

<title>ChronoTec</title>
</head>

   <body>
      <div class="login">
         <img src="../Admin/img/pinicio.jpg" alt="login image" class="login__img">

         <form action="" class="login__form">

            <div class="login__content">
               <div class="login__box">
                  <i class="ri-user-3-line login__icon"></i>

                  <div class="login__box-input">
                     <input type="email" required class="login__input" id="login-email" placeholder=" ">
                     <label for="login-email" class="login__label">Email</label>
                  </div>
               </div>

               <div class="login__box">
                  <i class="ri-lock-2-line login__icon"></i>

                  <div class="login__box-input">
                     <input type="password" required class="login__input" id="login-pass" placeholder=" ">
                     <label for="login-pass" class="login__label">Contraseña</label>
                     <i class="ri-eye-off-line login__eye" id="login-eye"></i>
                  </div>
               </div>
            </div>

            <button type="submit" class="login__button">Iniciar</button>

         </form>
      </div>

      <script src="../Admin/script/main.js"></script>
   </body>
</html>