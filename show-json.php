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

header("Content-type: application/json");
echo json_encode($returnArray);
exit();
?>
