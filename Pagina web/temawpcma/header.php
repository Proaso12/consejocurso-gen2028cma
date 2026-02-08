<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
        <div class="logo">
            <div class="logo-left">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/Logo (borde blanco).png" alt="" style="width: 120px; margin-right: 15px; margin-left: 100px; margin-top: 10px; margin-bottom: 10px;">
                <div style="display: flex; flex-direction: column; margin-top: 10px; margin-bottom: 10px;">
                    <a style="font-weight: 700; margin-bottom: 2px; font-size: 20px; color: rgb(255, 255, 255);">Centro de Alumnos</a>
                    <a style="color: rgb(255, 255, 255)">Colegio Compañía de María Apoquindo</a>
                </div>
            </div>
            <div>
                <ul class="upheader-buttons" style="margin-right: 100px;">
                    <li><a href="<?php echo get_template_directory_uri(); ?>/actividades">ACTIVIDADES</a></li>
                    <li><a>|</a></li>
                    <li><a href="<?php echo get_template_directory_uri() . '/alianzas-' . date('Y'); ?>">ALIANZAS</a></li>
                    <li><a>|</a></li>
                    <li><a href="<?php echo get_template_directory_uri(); ?>/nosotros">QUIENES SOMOS</a></li>
                    <li><a>|</a></li>
                    <li><a href="<?php echo get_template_directory_uri(); ?>/contacto">CONTÁCTANOS</a></li>
                    <li><a>|</a></li>
                    <a href="https://www.instagram.com/cacma.25"><i class="fa fa-instagram icono-ig" aria-hidden="true" style="font-size: 20px;"></i></a>
                </ul>
            </div>
        </div>
        
        <ul>
            <li>
                <div class="dropdown">
                    <a style="cursor: pointer; " class="abutton"><?php echo do_shortcode('[presidente columna="presidenteIa"]'); ?></a>
                    <div class="dropdown-content">
                        <div style="display: flex; flex-direction: row; margin-left: 10.9%; margin-bottom: 40px;">
                            <img src="assets/PresidenteCACMA.png" alt="" width="150px" style="margin-top: 40px;">
                        </div>
                        <div style="display: flex; flex-direction: column; margin-right: 60px; margin-bottom: 40px; margin-left: 10px;">
                            <p style="margin-bottom: -7px; margin-top: 50px;">Isidora Zamorano Salinas</p>
                            <p style="margin-bottom: -15px; font-size: 15px;">Presidenta de la Directiva</p>
                            <p style="font-size: 15px; margin-bottom: -2px;">del CACMA</p>
                            <p style="font-size: 15px;">Alumna de III° Medio C</p>
                        </div>
                        <div style="display: flex; flex-direction: column; margin-right: 60px; margin-left: 3px; margin-top: 23px; margin-bottom: 40px;">
                            <p>Directiva del Centro de Alumnos</p>
                            <hr style="width: 270px; height: 1px; background-color: #f04c56; border: none; margin-top: -5px; margin-bottom: 15px;">
                            <a href="">Miembros</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="dropdown">
                    <a style="cursor: pointer;" class="abutton">COMISIONES PERMANENTES Y ESPECIALES</a>
                    <div class="dropdown-content">
                        <a href="#">Link 2</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="dropdown">
                    <a style="cursor: pointer;" class="abutton">CONSEJO DE PRESIDENTES DE CURSO</a>
                    <div class="dropdown-content">
                        <a href="#">Link 2</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="dropdown">
                    <a style="cursor: pointer;" class="abutton">ORGANISMOS ELECTORALES Y OTROS</a>
                    <div class="dropdown-content">
                        <a href="#">Link 3</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="dropdown">
                    <a style="cursor: pointer;" class="abutton">MARCO NORMATIVO</a>
                    <div class="dropdown-content">
                        <a href="#">Link 4</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="dropdown">
                    <a style="cursor: pointer;" class="abutton">TRANSPARENCIA</a>
                    <div class="dropdown-content">
                        <a href="#">Link 5</a>
                    </div>
                </div>
            </li>
        </ul>
    </header>