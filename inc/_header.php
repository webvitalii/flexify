<!doctype html>
<html>
<head>
<?php
$title = basename( $_SERVER['PHP_SELF'], '.php' );
$title = str_replace( '_', ' ', $title );
$title = str_replace( '-', ' ', $title );
//$title = ucfirst( $title );
$title = ucwords( $title );
if( $title == 'Index' ) {
	$title = '';
} else {
	$title .= ' | ';
}
?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title><?php echo $title; ?>Flexify frontend framework</title>
	
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
	
	<link href="css/flexify.css" rel="stylesheet" />

</head>

<body class="fx-wrap">

<?php include('_menu.php'); ?>

<div class="fx-container fx-container--xl">

	<div class="fx-row">
		
		<div class="fx-col-sm-9 fx-padding-all">