<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>App 2612</title>
</head>
<body>
	<div id="name">
		<?php
		require_once (__DIR__.'/crestcurrent.php');

		//$result = CRest::call('user.current');
		$result = CRestCurrent::call('user.current');

		echo $result['result']['NAME'].' '.$result['result']['LAST_NAME'];
		?>
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
</body>
</html>