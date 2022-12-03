var myModal = new bootstrap.Modal(document.getElementById("myModal"));

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
});
