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
</body>
</html>