<html>
	<body>
<?php
	echo "PDO EXAMPLE </br>";
	
try
{
	$dns = "mysql:host=localhost;dbname=test";
	$dbuser = 'root';
	$dbpass = '123456';
	$dbh = new PDO($dns, $dbuser, $dbpass );
	$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$dbh->beginTransaction();
	
	$dbh->exec("INSERT INTO book values(3, 'Teo')");
	$dbh->exec("INSERT INTO book values(4, 'Nam')");
	
	$dbh->commit();

}
catch (PDOException $ex)
{
	$dbh->rollBack();
	echo 'Failed: ' . $ex->getMessage();
}

?>
	</body>
</html>
