<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Annuaire</title>
	<!-- <style>
		* {
			border: 1px solid red !important
		}
	</style> -->

	<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="">
	<!-- Container -->
	<div class="max-w-xl mx-auto px-4 sm:px-6 flex flex-col gap-3 bg-gray-200 <?php echo(strpos($_SERVER['PHP_SELF'],"bookphone")? "": "max-h-screen");?>">