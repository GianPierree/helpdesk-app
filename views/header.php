<div id="header">
    <div class="row m-2">
        <div class="col text-end">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#crearTicket"><i class="fas fa-plus"></i> Crear ticket</button>
        </div>
    </div>
    <div class="row g-2 m-2">
        <div class="col">
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputGrid" placeholder="" value="">
                <label for="floatingInputGrid">Buscar ticket</label>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="crearTicket" tabindex="-1" aria-labelledby="crearTicketLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="crearTicketLabel">Crear Ticket:</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Formulario crear ticket. 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Crear</button>
            </div>
            </div>
        </div>
    </div>
</div>