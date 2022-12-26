<?php 
require_once("./config.php");
$contactData = $b24->contactList($hook);
// echo "<pre>"; print_r($contactData); echo "</pre>";
?>
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
            <form action="./ticket.php" method="POST">
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-name">Nombre</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-name">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" for="inputGroup-sizing-contact">Contacto</span>
                        <select class="form-select" id="inputGroup-sizing-contact">
                            <option selected>Seleccionar...</option>
                            <?php
                                for($i=0; $i < count($contactData["result"]); $i++){
                                    $id = $contactData["result"][$i]["ID"];
                                    $nombre = $contactData["result"][$i]["NAME"] . " " . $contactData["result"][$i]["LAST_NAME"];
                                    ?>
                                        <option value="<?php echo $id; ?>" ><?php echo $nombre; ?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" for="inputGroup-sizing-responsable">Responsable</span>
                        <select class="form-select" id="inputGroup-sizing-responsable">                            
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Crear</button>
                </div>
            </form> 
            </div>
        </div>
    </div>
</div>