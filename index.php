<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pages/home.css">
    
    <title>VillaDonq</title>
</head>   

<body>


    <?php

        require_once "includes/_loader.php";
     ?>
        <form class="login_form" action="./controller/login_controller.php" method="POST"> 
    <a class="close_btn trigger_modal" data-modal="login_form"  type="menu" >
        <svg width="37" height="31" viewBox="0 0 37 31" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4.62216 29.6726L31 2.00003"  stroke-width="3" />
            <path d="M31.5 29.5L5.34254 2.51347"  stroke-width="3" />
        </svg>
    </a>
    <fieldset class='card_form'>
        
        <legend>LOGIN</legend>
        <span>
            <input type="text" name="username" required id="CI_o_correo">
            <label for="CI_o_correo">C.I. o correo</label>
        </span>

            <span>
                <input type="password" name="password" required id="contraseña">
                <label for="contraseña">Contraseña</label>
                <i>
                    <svg class="closed_eye" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" viewBox="0 0 20 20"
                    version="1.1">
                    <g id="surface1">
                        <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;"
                        d="M 16.007812 5.167969 L 19.757812 1.421875 C 20.082031 1.097656 20.082031 0.570312 19.757812 0.242188 C 19.429688 -0.0820312 18.902344 -0.0820312 18.578125 0.246094 L 0.242188 18.578125 C -0.0820312 18.902344 -0.0820312 19.429688 0.242188 19.757812 C 0.570312 20.082031 1.097656 20.082031 1.421875 19.753906 L 5.5 15.679688 C 6.910156 16.328125 8.445312 16.667969 10 16.667969 C 14.203125 16.667969 18 14.253906 19.914062 10.367188 C 20.027344 10.136719 20.027344 9.863281 19.914062 9.632812 C 19.03125 7.824219 17.683594 6.285156 16.007812 5.167969 Z M 10 14.167969 C 9.183594 14.167969 8.386719 13.925781 7.707031 13.472656 L 8.925781 12.253906 C 9.261719 12.414062 9.628906 12.5 10 12.5 C 11.378906 12.5 12.5 11.378906 12.5 10 C 12.5 9.628906 12.414062 9.261719 12.253906 8.925781 L 13.472656 7.707031 C 14.320312 8.984375 14.398438 10.625 13.671875 11.976562 C 12.945312 13.328125 11.535156 14.167969 10 14.167969 Z M 0.0859375 10.367188 C -0.0273438 10.136719 -0.0273438 9.863281 0.0859375 9.632812 C 2 5.746094 5.796875 3.332031 10 3.332031 C 10.929688 3.335938 11.851562 3.457031 12.75 3.695312 L 10.566406 5.875 C 9.273438 5.6875 7.96875 6.121094 7.042969 7.042969 C 6.121094 7.96875 5.6875 9.273438 5.875 10.566406 L 2.652344 13.792969 C 1.589844 12.820312 0.71875 11.660156 0.0859375 10.367188 Z M 0.0859375 10.367188 " />
                    </g>
                </svg>
                <svg class="open_eye" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                width="20px" height="20px" viewBox="0 0 20 20" version="1.1">
                <g id="surface1">
                    <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;"
                    d="M 12.5 10 C 12.5 11.378906 11.378906 12.5 10 12.5 C 8.621094 12.5 7.5 11.378906 7.5 10 C 7.5 8.621094 8.621094 7.5 10 7.5 C 11.378906 7.5 12.5 8.621094 12.5 10 Z M 19.914062 10.367188 C 18.003906 14.253906 14.203125 16.667969 10 16.667969 C 5.796875 16.667969 1.996094 14.253906 0.0859375 10.367188 C -0.0273438 10.136719 -0.0273438 9.863281 0.0859375 9.632812 C 1.996094 5.746094 5.796875 3.332031 10 3.332031 C 14.203125 3.332031 18.003906 5.746094 19.914062 9.632812 C 20.027344 9.863281 20.027344 10.136719 19.914062 10.367188 Z M 14.167969 10 C 14.167969 7.699219 12.300781 5.832031 10 5.832031 C 7.699219 5.832031 5.832031 7.699219 5.832031 10 C 5.832031 12.300781 7.699219 14.167969 10 14.167969 C 12.300781 14.164062 14.164062 12.300781 14.167969 10 Z M 14.167969 10 " />
                </g>
            </svg>
        </i>
    </span>
    <span class="parent_btn_submit"><input type="submit" value="Iniciar sesión" class="btn_guardar btn_submit"></span>
</fieldset> 


</form>
 <div class="gradient_blue">
     

<?php require_once "includes/_nav.php"; ?>
     
    
    <header class="home_header container">

         <div>
             <h1 > La escuela del <span>futuro</span> ya llegó a prestarte la mejor <span>educación.</span> </h1>         
             <span class="parent_btn_submit parent_inscribe_link"><a href="inscribe.php" class="link_to_inscribe btn_submit transition_link">Inscribete</a></span>

         </div>


        <div>
            <div class="circle_img_cont slider fade_effect zoom_effect auto ">
                <div class=" slider_wrap">
                    <div class="each_slider_element active_default zoom_effect_act">
                        <img src="img/pexels-fauxels-3184432.webp" alt="" srcset="" >
                    </div>
                    <div class="each_slider_element"> 
                        <img src="img/pexels-pixabay-207756.webp" alt="" >
                    </div>
                    <div class="each_slider_element">
                        <img src="img/pexels-emily-ranquist-1205651.webp" alt="" >
                    </div>
                </div>
            
            </div> 
        </div>
    
    </header>
 </div>
    <script type="module" src="js/functions/form_functions.js"></script>
    <script src="js/mySlider.js"></script>
  
    <script src="js/modules/index.js" type="module"></script>

</body>

</html>