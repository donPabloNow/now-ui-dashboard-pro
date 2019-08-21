<?php
session_start();
require_once("../inc/config.sistema.php");
?>
<!DOCTYPE html>
<html lang="en">

<?php
require_once(RUTA_SISTEMA . "inc/head.php");
// echo "<style>
//  .navbar-absolute-logo{
//    padding-left: 45px;
//  }
//  .navbar-absolute-logo img{
//    position: absolute;
//    left: 15px;
//    margin-top: -6px;
//  }
//  body{
//    background: white;
//  }
// </style>";
?>
<style>
.navbar-absolute-logo{
 padding-left: 45px;
}
.navbar-absolute-logo img{
 position: absolute;
 left: 15px;
 margin-top: -6px;
}
body{
 background: white;
}
</style>

<body class="bd-docs" data-spy="scroll" data-target=".bd-sidenav-active">

 <?php
 require_once("barra_menu.php");

 ?>


 <?php
 require_once("menu_doc.php");

 ?>

 <!-- Esto debe ir ajuro en todo los codigos -->
 <div class="d-none d-xl-block col-xl-2 bd-toc">
  <ul class="section-nav">
    <li class="toc-entry toc-h2"><a href="#quick-start">Inicio rápido</a>
      <ul>
        <li class="toc-entry toc-h3"><a href="#css">CSS</a></li>
        <li class="toc-entry toc-h3"><a href="#js">JS</a></li>
        <li class="toc-entry toc-h3"><a href="#fonts-and-icons">Fuentes e iconos</a></li>
      </ul>
    </li>
    <li class="toc-entry toc-h2"><a href="#starter-template">Plantilla de inicio</a></li>
  </ul>
</div>

<main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
  <h1 class="bd-title" id="content">Chart.js v2.7.3</h1>
  <p class="bd-lead"></p><!--&amp;-->
  <p>Gráficos de JavaScript simples pero flexibles para diseñadores y  desarrolladores Hecho por nuestros amigos de <a target="_blank" href="http://www.chartjs.org">Charts.js</a>. Por favor, checa el<a target="_blank" href="http://www.chartjs.org/docs/latest/">documentación completa</a>.</p>

  <div class="bd-example" data-example-id="">
    <!-- markup -->
    <canvas id="lineChartExample"></canvas>
  </div>
  <div class="highlight">
    <pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- markup --&gt;</span>
      <span class="nt">&lt;canvas</span><span class="na">id=</span><span class="s">"lineChartExample"</span><span class="nt">&gt;&lt;/canvas&gt;</span></code></pre>
    </div>

    <figure class="highlight">
      <pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- javascript init --&gt;</span>
        chartColor = "#FFFFFF";

        // General configuration for the charts with Line gradientStroke
        gradientChartOptionsConfiguration = {
        maintainAspectRatio: false,
        legend: {
        display: false
      },
      tooltips: {
      bodySpacing: 4,
      mode:"nearest",
      intersect: 0,
      position:"nearest",
      xPadding:10,
      yPadding:10,
      caretPadding:10
    },
    responsive: 1,
    scales: {
    yAxes: [{
    display:0,
    gridLines:0,
    ticks: {
    display: false
  },
  gridLines: {
  zeroLineColor: "transparent",
  drawTicks: false,
  display: false,
  drawBorder: false
}
}],
xAxes: [{
display:0,
gridLines:0,
ticks: {
display: false
},
gridLines: {
zeroLineColor: "transparent",
drawTicks: false,
display: false,
drawBorder: false
}
}]
},
layout:{
padding:{left:0,right:0,top:15,bottom:15}
}
};

ctx = document.getElementById('lineChartExample').getContext("2d");

gradientStroke = ctx.createLinearGradient(500, 0, 100, 0);
gradientStroke.addColorStop(0, '#80b6f4');
gradientStroke.addColorStop(1, chartColor);

gradientFill = ctx.createLinearGradient(0, 170, 0, 50);
gradientFill.addColorStop(0, "rgba(128, 182, 244, 0)");
gradientFill.addColorStop(1, "rgba(249, 99, 59, 0.40)");

myChart = new Chart(ctx, {
type: 'line',
data: {
labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
datasets: [{
label: "Active Users",
borderColor: "#f96332",
pointBorderColor: "#FFF",
pointBackgroundColor: "#f96332",
pointBorderWidth: 2,
pointHoverRadius: 4,
pointHoverBorderWidth: 1,
pointRadius: 4,
fill: true,
backgroundColor: gradientFill,
borderWidth: 2,
data: [542, 480, 430, 550, 530, 453, 380, 434, 568, 610, 700, 630]
}]
},
options: gradientChartOptionsConfiguration
});</code></pre></figure>


</main>

<!-- Final del contenido con las 2 etiquetas div -->
</div>
</div>
<!-- Estos di2 div finales son de el menu si se les quita darra error porque deben estar dentro del contenido  -->

<!-- Libreias js -->
<?php
require_once(RUTA_SISTEMA . "inc/script.php");
?>

</body>

</html>
