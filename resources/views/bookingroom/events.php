<?php
 //list of events 
$json = array();
// query that retrives events
// if (Auth::user()->position == 'HR'){
	$requete = "SELECT * FROM bookingrooms";
// }
	// else {
	// $requete = "SELECT * FROM bookingrooms WHERE (status = 'Approve') ORDER BY id";
	// }


	// connction to db
	try{
		$bdd = new PDD('mysql::host=localhost;dbname=bookingbilikmesyuarat', 'root', '');

	} catch(Exception $e){
		exit('Unable to connct to db..');
	}
	// execute the query
	$resultant = $bdd->($requete) or die(print_r($bdd->errorInfo()));

 // sending json_encode result to success page
echo json_encode($resultat->fetchAll(PDD::FETCH_ASSOC));

	?>
