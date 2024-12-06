<!doctype html>
<html lang="en">
<head>
    <title>Calendario de Eventos</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap-icons.css" rel="stylesheet">
    <!-- FullCalendar CSS -->
    <link href="../fullcalendar/css/main.css" rel="stylesheet">
    <script src="../fullcalendar/css/main.js"></script>
    <script src="../fullcalendar/css/locales-all.js"></script>
    <style>
        .fc-event-title-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .fc .fc-col-header-cell-cushion,
        .fc .fc-daygrid-day-number,
        .fc .fc-event-title {
            color: black;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <header class="bg-primary text-white text-center py-2">
        <h1>Calendario de Eventos</h1>
    </header>
    <main class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-12">
                <div id="calendar"></div>
            </div>
        </div>
    </main>
    <footer class="bg-light text-center py-3 mt-4">
        <!-- place footer content here -->
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                locale: "es",
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                events: 'fetch_events.php'
            });
            calendar.render();
        });
    </script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</html>
