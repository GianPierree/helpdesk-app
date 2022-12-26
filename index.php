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
</head>
<body>
	<div id="name">
		<div id="header">
			<div class="row g-2">
				<div class="col align-self-end">
					<button type="button" class="btn btn-primary">Crear ticket</button>
				</div>
			</div>
			<div class="row g-2">
				<div class="col">
					<div class="form-floating">
						<input type="text" class="form-control" id="floatingInputGrid" placeholder="" value="">
						<label for="floatingInputGrid">Buscar ticket</label>
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