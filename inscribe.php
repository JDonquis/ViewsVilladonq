<style type="text/css">
    
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/pages/css_inscribe.css">
    <title>Inscrirbirse</title>
</head>

<body>
    <?php
    $rute = '';
    require_once('includes/_loader.php');
    require_once('includes/_nav.php');
    require_once('includes/_form-login.php');
    ?>

    <div class="cont_h1_and_form">
        <div class="h1_cont">
            <h1>Inscribete en VILLADONQ y recibe la mejor educación</h1>
        </div>
        <!-- check ci and year cupo -->
        <form class="inscribe">
            <div class="card_form" >
                <fieldset>
                    <legend>INGRESA LOS SIGUIENTES DATOS PARA COMENZAR LA INSCRIPCIÓN:</legend>
                        
                            <span>
                                <input type="text" data-type="CI" id="ins_ci" pattern="[A-Za-z]{1}[0-9]{8}" title="Debe escribir una letra 'V' seguida de 8 números" name="ins_ci">
                                <label for="ins_ci">CI: </label>
                            </span>
                         
                        <label for="ins_type_new">Selecciona un cupo disponible: </label>
                            <div id="new_inscri_section">
                                <select name="years_available" id="">
                                    <option value="">1er año</option>
                                    <option value="">2do año</option>
                                    <option value="">4to año</option>
                                </select>
                            </div>
                        
                <button class="btn_submit mt-0" type="button">Siguiente</button>
                </fieldset>
            </div>
        </form>


        <form class="inscribe" style="display: none" id="form-file" action="" method="POST" enctype="multipart/form-data">
            <?php if (isset($_GET['fail-size'])) { ?>

                <div class="message-fail-size">Tamaño de archivo no permitido. Procure que sean menor de 2MB</div>

            <?php } ?>
           
            <div class="card_form slider opacity_effect_each">
                <!-- <ul class="nav_slider">
                </ul>  -->
                <div class="progress_bar">
                    <div></div>
                </div>
                <div class="slider_wrap">
              

                    <fieldset class="each_slider_element">
                        <legend>DATOS PERSONALES</legend>
                        <div class="d-grid">
                            <span>
                                <input type="text" value="Pepito" id="ins_nombres" name="name_s">
                                <label for="ins_nombres">Nombres: </label>
                            </span>
                            <span>
                                <input type="text" id="ins_apellidos" name="lastname_s">
                                <label for="ins_apellidos">Apellidos: </label>
                            </span>
                        </div>
                        <div class="d-grid">
                            <span>
                                <input type="date" id="ins_date_birth" name="date_s">
                                <label for="ins_date_birth">Fecha de nacimiento:</label>
                            </span>
                            <input type="hidden" id="ins_edad" readonly name="age"> 
                            <span>
                                <input type="gmail" name="email_s" id="ins_correo">
                                <label for="ins_correo">Correo: </label>
                            </span>
                        </div>
                        <div class="d-grid">
                            <span>
                                <input type="text" data-type="CI" id="ins_DNI" pattern="[A-Za-z]{1}[0-9]{8}" title="Debe escribir una letra 'V' seguida de 8 números" name="DNI_s">
                                <label for="ins_DNI">DNI: </label>
                            </span>
                            <span>
                                <input type="tel" id="ins_telefono" name="phone_s">
                                <label for="ins_telefono">Telefono: </label>
                            </span>
                        </div>


                    </fieldset>

                    <fieldset class="each_slider_element">
                        <legend>DIRECCIÓN DE HOGAR</legend>
                        <span>
                            <input type="text" id="ins_estado" name="state">
                            <label for="ins_estado">Estado: </label>
                        </span>
                        <div class="d-grid">
                            <span>
                                <input type="text" id="ins_ciudad" name="city">
                                <label for="ins_ciudad">Ciudad: </label>
                            </span>
                            <span>
                                <input type="text" id="ins_codigo_postal">
                                <label for="ins_codigo_postal">Codigo postal (opciona): </label>
                            </span>
                        </div>

                        <label for="direccion_detallada">Dirección especifica</label>
                        <textarea name="address" id="direccion_detallada" cols="30" rows="5" style="max-height: 100px;"></textarea>

                    </fieldset>

                    <fieldset class="each_slider_element file">
                        <legend>DOCUMENTOS PERSONALES</legend>
                        <label for="ins_foto">Foto: </label>
                        <input type="file" id="ins_foto" name="photo">
                        <label for="ins_partida_de_nacimiento">Partida de nacimiento: </label>
                        <input type="file" id="ins_partida_de_nacimiento" name="birth_certificate">

                    </fieldset>

                    <fieldset class="each_slider_element file">
                        <legend>DOCUMENTOS ACADEMICOS</legend>
                        <label for="ins_boleta">Boleta: </label>
                        <input type="file" id="ins_boleta" name="report_card">
                        <label for="ins_notas">Notas: </label>
                        <input type="file" id="ins_notas" name="certificate_notes">
                        <label for="ins_buena_conducta">Constancia de buena conducta</label>
                        <input type="file" name="certificate_conduct" id="ins_buena_conducta">

                    </fieldset>

                    <fieldset class="each_slider_element">
                        <legend>DATOS DEL REPRESENTANTE</legend>
                        <span>
                            <input type="text" id="ins_repre_nombre" name="name_r">
                            <label for="ins_repre_nombre">Nombre completo: </label>
                        </span>
                        <span>
                            <input type="text" data-type="CI" id="ins_repre_DNI" name="DNI_r">
                            <label for="ins_repre_DNI">DNI: </label>
                        </span>
                        <span>
                            <input type="tel" id="ins_repre_tel" name="phone_r">
                            <label for="ins_repre_tel">telefono: </label>

                        </span>
                        <span class="parent_btn_submit"><input type="submit" id="b_form" name="new_request" value="INSCRIBIR" class="inscribirse btn_submit"></span>

                    </fieldset>
                </div>

                <div class="arrow_buttons">
                    <button class="prev" type="button" title="Volver"> ← </button>
                    <button class="next" type="button">Siguiente</button>
                </div>
            </div>
        </form>
    </div>

</body>

<script src="./js/modules/inscribe.js" type="module"></script>

<script src="js/functions/form_functions.js"></script>

<script src="js/mySlider.js"></script>




</html>