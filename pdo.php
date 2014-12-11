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
	$author = '';
	if(ctype_alpha($_GET['author']))
	{
		$author = $_GET['author'];
	}
	//escape the value of author with quote()
	$sql = "SELECT * FROM book WHERE author = :author";
	$stmt = $dbh->prepare($sql);
	$stmt->setFetchMode(PDO::FETCH_OBJ);
	
	$stmt->bindParam(':author', $_GET['author']);
	$stmt->execute();

	//execute the statement and echo the results
	$results = $stmt->fetchAll();
	foreach($results as $row)
	{
		echo "{$row->id}, {$row->author} \n";
	}

}
catch (PDOException $ex)
{
	echo 'Failed: ' . $ex->getMessage();
}

?>
	</body>
</html>
