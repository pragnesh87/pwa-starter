<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="./logo/favicon.ico">
	<title>PWA Starter</title>

	<!-- PWA  -->
	<meta name="apple-mobile-web-app-status-bar" content="#3498DB" />
	<meta name="theme-color" content="#3498DB" />
	<link rel="apple-touch-icon" href="./logo/logo.png">
	<link rel="manifest" href="./manifest.json">

	<style>
	:root {
		--coral: hsl(23, 83%, 82%);
		--coral--b: hsl(23, 99%, 75%);
		--pink: hsl(335, 52%, 92%);
		--pink--b: hsl(335, 82%, 86%);
		--yellow: hsl(42, 97%, 85%);
		--yellow--b: hsl(42, 100%, 73%);
		--green: hsl(100, 64%, 86%);
		--green--b: hsl(100, 41%, 76%);
		--blue: hsl(187, 61%, 79%);
		--blue--b: hsl(187, 54%, 68%);
		--purple: hsl(283, 24%, 86%);
		--purple--b: hsl(283, 43%, 80%);
		--light-gray-blue: hsl(182, 29%, 96%);
		--pageMax: 1260px;
		--headerHeight: 60px;
		--middleHeight: 300px;
		--footerHeight: 100px;
	}

	.parent {
		display: flex;
		flex-wrap: wrap;
		justify-content: center;
	}

	.box {
		flex: 1 1 150px;
		margin: 5px;
	}

	.green {
		background-color: var(--green);
		border: 1px solid var(--green--b);
	}
	</style>
</head>

<body>

	<div class="parent white">
		<div class="box green">1</div>
		<div class="box green">2</div>
		<div class="box green">3</div>
	</div>

	<script src="./sw.js"></script>
	<script>
	if ("serviceWorker" in navigator) {
		window.addEventListener("load", function() {
			navigator.serviceWorker
				.register("./sw.js")
				.then((res) => console.log("service worker registered"))
				.catch((err) => console.log("service worker not registered", err));
		});
	} else {
		console.log("service worker is not supported");
	}
	</script>
</body>

</html>