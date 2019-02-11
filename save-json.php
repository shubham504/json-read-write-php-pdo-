<?php
/*
 * 
 * 
 * 
 * 
 * 
 */

require_once("configure.php");

$sql = "SELECT products_id, products_name, products_quantity, products_model, products_price, products_weight, products_status FROM tbl_products WHERE 1 ";
try {
    $stmt = $DB->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();
} catch (Exception $ex) {
    printErrorMessage($ex->getMessage());
}
$returnArray = array();
if (count($results) > 0) {
	 foreach ($results as $rs) {
	 	$returnArray[] = $rs; 	
	 }
}


// writes json to file and force it to download
$file = 'file2.json';
file_put_contents($file, json_encode($returnArray));
header("Content-type: application/json");
header('Content-Disposition: attachment; filename="'.basename($file).'"'); 
header('Content-Length: ' . filesize($file));
readfile($file);


/*To save the file only you can use this code
$fp = fopen('file4.json', 'w+');
fwrite($fp, json_encode($returnArray));
fclose($fp);*/
?>
