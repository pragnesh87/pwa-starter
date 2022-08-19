<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PWA Starter</title>

	<!-- PWA  -->
	<meta name="theme-color" content="#3498DB" />
	<link rel="apple-touch-icon" href="./logo/logo.png">
	<link rel="manifest" href="./manifest.json">
</head>

<body>

	<script src="./sw.js"></script>
	<script>
	if (!navigator.serviceWorker.controller) {
		navigator.serviceWorker.register("./sw.js").then(function(reg) {
			console.log("Service worker has been registered for scope: " + reg.scope);
		});
	}
	</script>
</body>

</html>