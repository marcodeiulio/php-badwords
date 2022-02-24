<?php 

$my_badword = $_GET['badword'];
$my_replacement = $_GET['replacement'];

$par = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero blanditiis obcaecati iusto provident laborum culpa ducimus et recusandae. Nesciunt aut numquam labore inventore quaerat ipsam!';

$censored_par = str_replace($my_badword, $my_replacement, $par);

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
	<p><?php echo $par ?></p>
	<form action="index.php">
		<h3>Inserisci il testo da revisionare</h3>
		<input type="text" placeholder="Parola da revisionare" name="badword">
		<br>
		<br>
		<br>
		<h3>Inserisci il testo revisionato</h3>
		<input type="text" placeholder="Testo revisionato" name="replacement">
		<br>
		<br>
		<button role="submit">Invia</button>
	</form>
<h2>Hai scelto di revisionare la parola "<?php echo $my_badword ?>"</h2>
<h2>Il paragrafo revisionato è il seguente</h2>
<p><?php echo $censored_par ?></p>
</body>
</html>