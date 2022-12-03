<?php require_once 'Views/template/header.php'; ?>

<body>
    <div class="container">
        <div id='calendar'></div>
    </div>

    <div class="modal fade" id="myModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="titulo"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>
                <form id="formulario">
                    <div class="modal-body">
                        <div class="mb-3 form-floating">
                            <input type="text" class="form-control" id="title">
                            <label for="title" class="form-label">Evento</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="date" class="form-control" id="start">
                            <label for="start" class="form-label">Fecha</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="color" class="form-control" id="color">
                            <label for="color" class="form-label">Color</label>
                        </div>
                    </div>
                    <div class="modal-footer">

                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

<?php require_once 'Views/template/footer.php'; ?>