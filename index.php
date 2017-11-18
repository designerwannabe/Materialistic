<?php 
	$page =  (isset($_GET['p']) && $_GET['p'] != "") ? $_GET['p'] : 'login';
	switch ($page) {
		case 'login':
		case 'tables':
			$component = $page;
			break;
		default:
			$component = "error";
			break;
}?>
<?php include 'components/header.php';?>
<?php include 'components/'.$component.'.php';?>
<?php include 'components/footer.php';?>