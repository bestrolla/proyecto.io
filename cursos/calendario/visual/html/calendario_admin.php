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
        
        <!-- Modal para agregar/editar eventos -->
        <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="eventModalLabel">Evento</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="eventForm">
                            <input type="hidden" id="eventId">
                            <div class="mb-3">
                                <label for="title" class="form-label">Nombre del Evento</label>
                                <input type="text" class="form-control" id="title" required>
                            </div>
                            <div class="mb-3">
                                <label for="start" class="form-label">Fecha de Inicio</label>
                                <input type="datetime-local" class="form-control" id="start" required>
                            </div>
                            <div class="mb-3">
                                <label for="end" class="form-label">Fecha Final</label>
                                <input type="datetime-local" class="form-control" id="end" required>
                            </div>
                            <div class="mb-3">
                                <label for="color" class="form-label">Color</label>
                                <input type="color" class="form-control" id="color" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

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
                    events: 'fetch_events.php',
                    editable: true,
                    dateClick: function(info) {
                        openModal('Agregar Evento', {
                            id: '',
                            title: '',
                            start: info.dateStr,
                            end: info.dateStr,
                            color: '#000000'
                        });
                    },
                    eventClick: function(info) {
                        openModal('Editar Evento', {
                            id: info.event.id,
                            title: info.event.title,
                            start: info.event.startStr,
                            end: info.event.endStr,
                            color: info.event.backgroundColor
                        });
                    },
                    eventDrop: function(info) {
                        if (!confirm('¿Está seguro de cambiar la fecha del evento?')) {
                            info.revert();
                        } else {
                            updateEvent(info.event);
                        }
                    }
                });
                calendar.render();

                document.getElementById('eventForm').addEventListener('submit', function(event) {
                    event.preventDefault();
                    var eventData = {
                        id: document.getElementById('eventId').value,
                        title: document.getElementById('title').value,
                        start: document.getElementById('start').value,
                        end: document.getElementById('end').value,
                        color: document.getElementById('color').value
                    };
                    if (eventData.id) {
                        updateEvent(eventData);
                    } else {
                        saveEvent(eventData);
                    }
                });

                function openModal(title, event) {
                    document.getElementById('eventModalLabel').innerText = title;
                    document.getElementById('eventId').value = event.id;
                    document.getElementById('title').value = event.title;
                    document.getElementById('start').value = event.start;
                    document.getElementById('end').value = event.end;
                    document.getElementById('color').value = event.color;
                    var eventModal = new bootstrap.Modal(document.getElementById('eventModal'));
                    eventModal.show();
                }
            });
        </script>
        <!-- Bootstrap JavaScript Libraries -->
        <!-- Bootstrap JavaScript Libraries -->
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>