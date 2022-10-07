<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="button.css">
     <a href="https://www.basispoort.nl/login/leerlingen/snelkoppelaar?TARGET=https%3A%2F%2Fecs-BP-serviceprovider.toegang.nu%2F8717927047101%2Fbasispoort&INSTELLING_REF=d36820f7-e1cd-447f-afcb-808b4f661c80" target="_blank">mijnKlas</a><br>
     <a href="https://www.basispoort.nl/login/leerlingen/snelkoppelaar?TARGET=https%3A%2F%2Fapis.blink.nl%2Fapi%2Fportal%2Fbasispoort%2Fsaml-response&INSTELLING_REF=d36820f7-e1cd-447f-afcb-808b4f661c80" target="_blank">Blink wereld apps</a><br>
     <a href="https://www.basispoort.nl/login/leerlingen/snelkoppelaar?TARGET=https%3A%2F%2Fidentificatie.toegangonderwijs.nl%2Fbareka%2Facs&INSTELLING_REF=d36820f7-e1cd-447f-afcb-808b4f661c80" target="_blank">Bareka</a><br>
     <a href="https://www.basispoort.nl/login/snelkoppelaar?NETWERKBEHEERDER=4&INSTELLING_REF=d36820f7-e1cd-447f-afcb-808b4f661c80&TARGET=https%3A%2F%2Fecs-BP-serviceprovider.toegang.nu%2F8717927999990%2Fbasispoort" target="_blank">Junior Cloud</a><br>
     <a href="https://www.ivenboxem.nl/keuze" target="_blank">Ivenboxem.nl</a><br>
     <a href="https://www.basispoort.nl/login/leerlingen/snelkoppelaar?TARGET=https%3A%2F%2Fapis.blink.nl%2Fapi%2Fportal%2Fbasispoort%2Fsaml-response%3FmethodKey%3Dtopomaster%2Foverview&INSTELLING_REF=d36820f7-e1cd-447f-afcb-808b4f661c80" target="_blank">Topomasters</a> 
</head>
<body>
     <link rel="stylesheet" type="text/css" href="style.css">
     <h1>Hallo, <?php echo $_SESSION['name']; ?></h1>
     <a href="logout.php">Log uit</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>