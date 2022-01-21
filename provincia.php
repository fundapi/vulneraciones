<?php
if (!isset($_POST["provincia"]))
{
    $provincia = "azuay";
    $selected = "selected";
}
else
{
    $provincia = $_POST["provincia"];
    $selected = "";
}
$url_kml = "http://vulneraciones.org/pro/".$provincia."EC.kml";

$provincia_mostrar = ucfirst($provincia);

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Vulneraciones.org - Reportes por provincia</title>
  <meta content="Estadísticas de vulneraciones a derechos humanos en Ecuador" name="description">
  <meta content="derechos humanos, Ecuador, vulneraciones, fundapi" name="keywords">

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDaiRScTBK-bWCko4M-egreUnXTioEeWyo&callback=initMap&libraries=&v=weekly"
      defer></script>
    
  <!-- Favicons -->
  <link href="favicon.ico" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style type="text/css">
      .cta {
          background: #EE4F5B;
          background-size: cover;
          font-size: 20px;
      }
      #map {
          height: 600px;
          width: 40%;
          overflow: hidden;
          float: left;
          /*border: thin solid #333;*/
      }
      #capture {
          /*height: 600px;*/
          width: 60%;
          /*overflow: hidden;*/
          float: right;
          background-color: #F9F9FA;
          /* border: thin solid #333;
          border-left: none;*/
          padding-left: 20px;
       }
      .nav-menu a:hover, .nav-menu .active > a, .nav-menu li:hover > a {
          color: #EE4F5B !important;
      }    
      label {
          display: inline-block;
          width: 5em;
      }

      body{
          font-size:20px;
      }
      a {
          color: #EE4F5B;
      }
      #header .logo img {
          max-height: 77px;
      }
      .nav-menu a:hover, .nav-menu .active > a, .nav-menu li:hover > a {
          color: #EE4F5B !important;
      }      
      .nav-menu a {
          font-size: 18px;
      }
      
  </style>    
  <script>
      "use strict";

      function initMap() {
          const map = new google.maps.Map(document.getElementById("map"), {
              zoom: 9
          });
          const ctaLayer = new google.maps.KmlLayer({
              url: "<?php echo $url_kml;?>",
              map: map
          });
      }
      initMap();
  </script>
  <script>
      $( function() {
          $( document ).tooltip();
      } );
  </script>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-4055674-25"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-4055674-25');
</script>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <!--<h1 class="logo mr-auto"><a href="index.html">vulneraciones</a><br>
        <font size="4">Reportes de amenazas a derechos humanos en Ecuador</font></h1>!-->
      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="index.html" class="logo mr-auto"><img src="assets/img/logov.png" alt="" class="img-fluid" height="150"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.html">Inicio</a></li>
          <li class="active"><a href="index.html#team">Reportes</a></li>
          <li><a href="index.html#cta">Denuncia</a></li>            
          <li><a href="index.html#about">Acerca de</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

    
    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg" style="margin-top:60px;">
      <div class="container">

        <div class="section-title">
          <span>Reportes por provincia</span>
          <h2>Reportes por provincia</h2>
            <form action="provincia.php" method="post">
            <p style="padding-bottom:15px;">Selecciona provincia a consultar:</p>
              <center><select name="provincia" class="form-control" style="width:300px !important;" onchange="this.form.submit();">
                  <option>Seleccionar...</option>
                  <option <?php echo $selected;?> value="azuay">Azuay</option>
                  <option value="bolivar">Bolívar</option>
                  <option value="canar">Cañar</option>
                  <option value="carchi">Carchi</option>
                  <option value="chimborazo">Chimborazo</option>
                  <option value="cotopaxi">Cotopaxi</option>
                  <option value="eloro">El Oro</option>
                  <option value="esmeraldas">Esmeraldas</option>
                  <option value="galapagos">Galápagos</option>
                  <option value="guayas">Guayas</option>
                  <option value="imbabura">Imbabura</option>
                  <option value="loja">Loja</option>
                  <option value="losrios">Los Ríos</option>
                  <option value="manabi">Manabí</option>
                  <option value="moronasantiago">Morona Santiago</option>
                  <option value="napo">Napo</option>
                  <option value="orellana">Orellana</option>
                  <option value="pastaza">Pastaza</option>
                  <option value="pichincha">Pichincha</option>
                  <option value="santaelena">Santa Elena</option>
                  <option value="santodomingo">Santo Domingo de los Tsáchilas</option>
                  <option value="sucumbios">Sucumbíos</option>
                  <option value="tungurahua">Tungurahua</option>
                  <option value="zamorachinchipe">Zamora Chinchipe</option>
                  </select></center>
            </form>
        </div>

        <div class="row">
            <div id="map"></div>
            <div id="capture"><h2><?php echo $provincia_mostrar;?></h2>
                
<?php

/*$servidor = "localhost";
$base = "vulneraciones";
$usuario = "vulneraciones";
$clave = "vulnera31";
$tabla = "casos";*/

$base = "edobejar_vulneraciones";
$usuario = "edobejar_vulnera";
$clave = "";
$tabla = "casos";
                
$conexion = MySQLi_connect($servidor, $usuario, $clave, $base);

if (MySQLi_connect_errno()) 
{
   echo "Falló la conexión a MySQL: " . MySQLi_connect_error();
}
else
{
    //Seteo UTF-8
        mysqli_query($conexion,"SET CHARACTER SET 'utf8'");
    
        if ($provincia == "azuay")
            $provincia_q = "AZU";

        if ($provincia == "bolivar")
            $provincia_q = "BOL";
        
        if ($provincia == "canar")
            $provincia_q = "CAN";

        if ($provincia == "carchi")
            $provincia_q = "CAR";
        
        if ($provincia == "chimborazo")
            $provincia_q = "CHI";

        if ($provincia == "cotopaxi")
            $provincia_q = "COT";
        
        if ($provincia == "eloro")
            $provincia_q = "ELO";

        if ($provincia == "esmeraldas")
            $provincia_q = "ESM";

        if ($provincia == "galapagos")
            $provincia_q = "GAL";

        if ($provincia == "guayas")
            $provincia_q = "GUA";

        if ($provincia == "imbabura")
            $provincia_q = "IMB";

        if ($provincia == "loja")
            $provincia_q = "LOJ";
        
        if ($provincia == "losrios")
            $provincia_q = "LOS";

        if ($provincia == "manabi")
            $provincia_q = "MAN";

        if ($provincia == "moronasantiago")
            $provincia_q = "MOR";

        if ($provincia == "napo")
            $provincia_q = "NAP";
        
        if ($provincia == "orellana")
            $provincia_q = "ORE";

        if ($provincia == "pastaza")
            $provincia_q = "PAS";

        if ($provincia == "pichincha")
            $provincia_q = "PIC";
        
        if ($provincia == "santaelena")
            $provincia_q = "SAN";

        if ($provincia == "santodomingo")
            $provincia_q = "DOM";

        if ($provincia == "sucumbios")
            $provincia_q = "SUC";

        if ($provincia == "tungurahua")
            $provincia_q = "TUN";
        
        if ($provincia == "zamorachinchipe")
            $provincia_q = "ZAM";
        
    
    $SQL_vulnera = "select provincia,categoria, count(*) as cantidad from casos where provincia='$provincia_q' group by categoria order by cantidad desc";
    $resultado_vulnera = mysqli_query($conexion,$SQL_vulnera);
    
    echo "<table class=\"table table-striped\">
    <tr>
                <td><b>Categoría de hechos reportados</b><br>(posibles derechos vulnerados)</td>
                <td><b>Cantidad de casos</b></td>
            </tr>";
    $total = 0;
    while($contenido_vulnera = mysqli_fetch_array($resultado_vulnera))
    {
        $categoria = $contenido_vulnera["categoria"];
        $cantidad = $contenido_vulnera["cantidad"];
        
        switch ($categoria) {
            case "Acceso a la justicia":
                $tooltip = "En esta categoría se consideran casos reportados de falta de trámite y de celeridad en la atención de casos, impunidad, falta de garantías constitucionales, entre otros.";
                break;

            case "Acceso a servicios básicos":
                $tooltip = "Se consideran casos de cortes y suspensión en el suministro de servicios básicos, incremento en los valores facturados, falencias en recolección de basura, entre otros.";
                break;

            case "Acoso cibernético":
                $tooltip = "Se reportan casos de personas enviando mensajes no autorizados a terceras personas.";
                break;

            case "Afectaciones al medio ambiente":
                $tooltip = "Esta categoría abarca reportes de actividades de contaminación ambiental, minería ilegal, y amenazas a pueblos no contactados.";
                break;

            case "Ciudadanos nigrantes en riesgo":
                $tooltip = "Reportes de personas extranjeras sin hogar ni recursos para subsistir.";
                break;

            case "Corrupción":
                $tooltip = "Se registran informes sobre venta de alimentos y medicamentos donados, e irregularidades en compras del sector de la salud.";
                break;

            case "Cuidado y protección de animales":
                $tooltip = "Reportes de animales sin atención ni alimentación, en hogares y zoológicos.";
                break;

            case "Derecho a la alimentación":
                $tooltip = "Se consideran reportes de personas con dificultades para acceder a alimentos debido limitaciones en transporte o restricciones en movilidad.";
                break;

            case "Derecho a la educación":
                $tooltip = "Reportes de limitaciones para acceder a la educación de las personas por reducciones presupuestarias del sistema educativo, limitados recursos para contar con equipos tecnológicos para clases virtuales, falta de pago a maestros y profesores, entre otros.";
                break;

            case "Derecho a la integridad":
                $tooltip = "Hechos relacionados con abuso a la integridad de las personas por parte de elementos de las fuerzas armadas o policía.";
                break;

            case "Derecho a la movilidad":
                $tooltip = "Reportes de restricciones en la movilidad de las personas, ecuatorianos en el extranjero con dificultades para retornar al país, extranjeros en Ecuador impedidos de regresar a sus países, reagrupación familiar, entre otros.";
                break;

            case "Derecho a la privacidad":
                $tooltip = "Denuncias sobre manejo inadecuado de datos personales por parte de entidades públicas.";
                break;

            case "Derecho a la protesta":
                $tooltip = "Se denuncian actos de represión y uso excesivo de la fuerza a personas manifestándose, acciones de movilización para protestas, entre otros.";
                break;
                
            case "Derecho a la salud":
                $tooltip = "Se incluyen reportes de ciudadanos, personal médico y servidores públicos contagiados con COVID-19, así como de personas que no han podido recibir la atención necesaria en casas de salud para superar el COVID-19 y otras enfermedades no relacionadas con la pandemia, y casos de suicidios.";
                break;
                
            case "Derecho de Acceso a la información":
                $tooltip = "Hechos denunciados sobre poca claridad en datos de contagios, cifras por provincias y capacidad del sistema de salud.";
                break;

            case "Derechos de adultos mayores":
                $tooltip = "Casos de personas adultas mayores desalojadas de sus viviendas, devolución de impuestos y sin atención médica.";
                break;

            case "Derechos de clientes de instituciones financieras":
                $tooltip = "Reportes de cobros y débitos no autorizados, bloqueo de cuentas e incremento de intereses.";
                break;

            case "Derechos de consumidores":
                $tooltip = "Se denuncian casos de cobros excesivos en servicios de telefonía, Internet, precios de combustibles y vuelos internacionales.";
                break;

            case "Derechos de la niñez":
                $tooltip = "Hechos sobre falta de pago de pensiones alimenticias principalmente.";
                break;

            case "Derechos de trabajadoras sexuales":
                $tooltip = "Precariedad e incremento de riesgos en el trabajo de las trabajadoras sexuales.";
                break;

            case "Derechos laborales":
                $tooltip = "Despidos intempestivos masivos, notificaciones de terminaciones laborales de forma unilateral, atrasos y falta de pago de haberes laborales, reducción de personal, entre otros hechos de similar índole.";
                break;
                
            case "Discriminación contra LGBTI";
                $tooltip = "Esta categoría incluye denuncias de acoso y amenazas a personas LGBTI.";
                break;

            case "Discriminación contra mujeres";
                $tooltip = "Reportes de discriminación y maltrato a mujeres.";
                break;

            case "Falencias en el manejo de personas fallecidas":
                $tooltip = "Casos de poca diligencia en el manejo de cadáveres en hospitales así como cuerpos de personas fallecidas encontrados en las calles.";
                break;

            case "Femicidio":
                $tooltip = "Casos de femicidio, es decir asesinatos a mujeres por su condición de género.";
                break;

            case "Libertad de expresión":
                $tooltip = "Casos de amenazas contra la libertad de expresión, intentos de censura y acoso a periodistas.";
                break;

            case "Violación";
                $tooltip = "Denuncias de posibles casos de violación contra personas adultas, jóvenes e infantes.";
                break;

            case "Violencia contra niños, niñqs y adolescentes":
                $tooltip = "En esta categoría se consideran hechos denunciados de violencia contra niños, niñas y adolescentes.";
                break;

            case "Violencia de género":
                $tooltip = "Casos de violencia contra personas por su condición de género.";
                break;

            case "Violencia en cárceles":
                $tooltip = "Actos de violencia en el interior de las cárceles del país.";
                break;

            case "Violencia intrafamiliar":
                $tooltip = "Hechos de violencia al interior de familias denunciados por las personas afectadas.";
                break;

            default:
                $tooltip = "N/A";
                break;
        }
        
        echo "<tr>
                <td><a href=\"#\" title=\"$tooltip\" style=\"color:#000000; text-decoration-line: underline; text-decoration: underline; text-underline-position: under; width: 300px;\">$categoria</a></td>
                <td><font size=\"4\"><b>$cantidad</b></font></td>
            </tr>";

        $total = $total + $cantidad;

    }//while
            echo "<tr>
                <td><b>Total</b></td>
                <td><font size=\"4=\"><b>$total</b></font></td>
            </tr>";

    
    echo "</table>";
}//else
                
                
?>
                
            </div>
            <div class="row" style="text-align: justify;"><b>Nota metodológica:</b> Estas cifras representan hechos denunciados y no casos confirmados de vulneraciones a derechos humanos. Para calcular estas cifras se analizaron las categorías de 1.493 reportes recibidos por por la Defensoría del Pueblo desde enero hasta junio de 2020, clasificados por provincias. Para el caso de los reportes de índole nacional (540 aproximadamente), estos se sumaron a cada una de las provincias para contar con cifras para cada una de estas. En los datos analizados se desconocen la identidad o ubicación exacta de quienes denunciaron los hechos. Tampoco se tiene registro del estado de la atención a cada hecho reportado.</div>

        </div>

      </div>
    </section><!-- End Team Section -->

    
  
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container footer-bottom clearfix">
      <div class="copyright">
          Este es un proyecto de <strong><a href="https://fundapi.org" target="nueva">Fundapi</a></strong> con el apoyo de <strong><a href="https://www.padf.org/ecuador" target="nueva">PADF</a></strong>, creado a partir de datos consultados a la <a href="https://dpe.gob.ec" target="nueva"><strong>Defensoría del Pueblo del Ecuador</strong></a>.
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    

</body>

</html>