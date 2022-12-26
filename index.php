<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>App 2612</title>
	
	<!-- Bitrix24 -->
	<script src="//api.bitrix24.com/api/v1/dev/"></script>
	
	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
	<div id="name">
		<p class="h1 m-2">Helpdesk <i class="fas fa-user-headset"></i></p>
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
		<div id="workarea"></div>
	</div>
	<script>
		BX24.init(function(){
			// console.log('Init done!', BX24.isAdmin());
			BX24.callMethod(
				"crm.lead.get", 
				{ id: 8 }, 
				function(result) {
					if(result.error()){
						console.error(result.error());
					}
					else{
						console.dir(result.data());
					}
				}
			);	
		});
	</script>

	<!-- Bootstrap -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>