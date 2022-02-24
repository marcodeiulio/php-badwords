<?php 

$my_badword = $_GET['badword'];

$par = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio qui modi repellendus asperiores optio sequi aperiam aliquam eius, enim suscipit? Obcaecati, necessitatibus quae voluptatem eum consectetur corporis sunt unde soluta!</p>';

$censored_par = str_replace($my_badword, '***', $par);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Badwords</title>
</head>
<body>
	<h1>Testo da revisionare</h1>
	<p><?php echo $par ?>
	<form action="index.php">
		<input type="text" placeholder="Inserisci la parola da censurare" name="badword">
		<button role="submit">Invia</button>
	</form>
<h3>Hai scelto di censurare la parola "<?php echo $my_badword ?>"</h3>
<h3>Il paragrafo revisionato è il seguente</h3>
<p><?php echo $censored_par ?></p>
</body>
</html>