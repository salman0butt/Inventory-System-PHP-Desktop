<?php

try {
	//$pdo = new PDO('mysql:host=localhost;dbname=pos_db', 'root', '');
	$pdo = new PDO('sqlite:pos_db.db');
		//$db_file = "includes/pos_db.db";
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	if ($pdo) {
		    // to make sure the foreign key constraint is ON
			//$pdo->exec('PRAGMA foreign_keys = ON');
		//echo 'Connection Succesfully Created';
		//$insert = $pdo->prepare("INSERT INTO `category`(`name`) VALUES(:name)");
				//$insert->bindValue(':name', 'tsjasdasd');
				
				//$run = $insert->execute();
	}

} catch (PDOException $e) {
	echo $e->getmessage();
}
	function dd($args) {
		echo '<pre style="background:#212121;color:#fff;padding:20px;font-size:20px;">';
		print_r($args);
		echo '</pre>';
		exit();
	}

?>