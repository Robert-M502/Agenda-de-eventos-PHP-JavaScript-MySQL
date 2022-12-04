var myModal = new bootstrap.Modal(document.getElementById("myModal"));
let frm = document.getElementById("formulario");

document.addEventListener("DOMContentLoaded", function () {
    var calendarEl = document.getElementById("calendar");
    var calendar = new FullCalendar.Calendar(calendarEl, {
        locale: "es",
        initialView: "dayGridMonth",
        headerToolbar: {
            left: "prev, next, today",
            center: "title",
            right: "dayGridMonth, timeGridWeek, listWeek",
        },
        dateClick: function (info) {
            //console.log(info);
            document.getElementById("start").value = info.dateStr;
            document.getElementById("titulo").textContent = "Registro de Evento";
            myModal.show();
        },
    });
    calendar.render();
    frm.addEventListener("submit", function (e) {
        e.preventDefault();

        const title = document.getElementById("title").value;
        const fecha = document.getElementById("start").value;
        const color = document.getElementById("color").value;

        if (title == "" || fecha == "" || color == "") {
            Swal.fire("Aviso", "Todos los campos son requeridos", "warning");
        } else {
            const url = base_url + "AgendaEventos/registrar"; /* Controlador/metodo */
            const http = new XMLHttpRequest();
            http.open("POST", url, true); /* true = de forma asincrona */
            http.send(new FormData(frm));
            http.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    console.log(this.responseText);
                }
            };
        }
    });
});
