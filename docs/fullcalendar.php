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
		</ul>
	</div>


	<!-- Inicio del contenido de esta pagina -->

	<main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
	<h1 class="bd-title" id="content">FullCalendar v3.10.0</h1>
          <p class="bd-lead"></p>
          <p>Hemos creado el diseño del FullCalendar. Hemos cambiado los colores, la tipografía y los botones, para que se vean como el resto del tablero.</p>

<p>Para obtener más información, consulte <strong><a href="https://github.com/fullcalendar/fullcalendar" target="_blank">FullCalendar</a></strong>.</p>

<p>Aquí hay un ejemplo codificado:</p>

<div class="bd-example" data-example-id="">
<!-- markup -->
<div id="fullCalendar"></div>
</div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- markup --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">id=</span><span class="s">"fullCalendar"</span><span class="nt">&gt;&lt;/div&gt;</span></code></pre></div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- javascript for init --&gt;</span>
$calendar = $('#fullCalendar');

today = new Date();
y = today.getFullYear();
m = today.getMonth();
d = today.getDate();

$calendar.fullCalendar({
    header: {
left: 'title',
center: 'month,agendaWeek,agendaDay',
right: 'prev,next,today'
},
defaultDate: today,
selectable: true,
selectHelper: true,
    views: {
        month: { // name of view
            titleFormat: 'MMMM YYYY'
            // other view-specific options here
        },
        week: {
            titleFormat: " MMMM D YYYY"
        },
        day: {
            titleFormat: 'D MMM, YYYY'
        }
    },

select: function(start, end) {

        // on select we show the Sweet Alert modal with an input
swal({
    title: 'Create an Event',
    html: '<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group"</span><span class="nt">&gt;</span>' +
                    '<span class="nt">&lt;input</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">placeholder=</span><span class="s">"Event Title"</span> <span class="na">id=</span><span class="s">"input-field"</span><span class="nt">&gt;</span>' +
                '<span class="nt">&lt;/div&gt;</span>',
    showCancelButton: true,
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            buttonsStyling: false
        }).then(function(result) {

            var eventData;
            event_title = $('#input-field').val();

            if (event_title) {
      eventData = {
        title: event_title,
        start: start,
        end: end
      };
      $calendar.fullCalendar('renderEvent', eventData, true); // stick? = true
    }

    $calendar.fullCalendar('unselect');

        });
},
editable: true,
eventLimit: true, // allow "more" link when too many events


    // color classes: [ event-blue | event-azure | event-green | event-orange | event-red ]
    events: [
{
  title: 'All Day Event',
  start: new Date(y, m, 1),
            className: 'event-default'
},
{
  title: 'Meeting',
  start: new Date(y, m, d-1, 10, 30),
  allDay: false,
  className: 'event-green'
},
{
  title: 'Lunch',
  start: new Date(y, m, d+7, 12, 0),
  end: new Date(y, m, d+7, 14, 0),
  allDay: false,
  className: 'event-red'
},
{
  title: 'Nud-pro Launch',
  start: new Date(y, m, d-2, 12, 0),
  allDay: true,
  className: 'event-azure'
},
{
  title: 'Birthday Party',
  start: new Date(y, m, d+1, 19, 0),
  end: new Date(y, m, d+1, 22, 30),
  allDay: false,
            className: 'event-azure'
},
{
  title: 'Click for Creative Tim',
  start: new Date(y, m, 21),
  end: new Date(y, m, 22),
  url: 'http://www.creative-tim.com/',
  className: 'event-orange'
},
{
  title: 'Click for Google',
  start: new Date(y, m, 21),
  end: new Date(y, m, 22),
  url: 'http://www.creative-tim.com/',
  className: 'event-orange'
}
]
});</code></pre></figure>




	</main>


	<!-- Final del contenido de esta pagina con las 2 etiquetas div -->
</div>
</div>

<!-- Libreias js -->
<?php
require_once(RUTA_SISTEMA . "inc/script.php");
?>

</body>

</html>
