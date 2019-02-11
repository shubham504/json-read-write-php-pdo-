<?php
/*
 * 
 * 
 * 
 * 
 * 
 */

require_once("configure.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="icon" href="http://www.thesoftwareguy.in/favicon.ico" type="image/x-icon" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Read and Write json file using php and myql">
        <meta name="keywords" content="read write json file php mysql">
        <meta name="author" content="Shahrukh Khan">
        <title>Read and write json file with php and mysql - www.thesoftwareguy.in</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
    <body>
        <div id="container">
            <div id="body">
                <div class="mainTitle" >Read and write json file with php and mysql</div>
                <div class="height10"></div>
                <article>
                    <div style="text-align:left; " >
                        <a href="read-json.php" title="Read Json From File" ><img src="images/button1.png" alt="Read Json From File" width="239" height="43"> </a>    
                    </div>
                    <div class="height10"></div>
                    <div class="grt" >Database Table [tbl_products]</div>
                    <table class="bordered" >
                        <thead>
                            <tr> 
                                <th style="font-weight:bold;text-align:left;">Name</th>
                                <th style="width:10%;text-align:center;font-weight:bold;">Quantity</th>
                                <th style="width:15%;text-align:center;font-weight:bold;">Model</th>
                                <th style="width:15%;text-align:center;font-weight:bold;">Price</th>
                                <th style="width:15%;text-align:center;font-weight:bold;">Weight</th>
                                <th style="width:15%;text-align:center;font-weight:bold;">Status</th>
                            </tr>
                        </thead>
                        <?php
                        $sql = "SELECT * FROM tbl_products WHERE 1";

                        try {
                            $stmt = $DB->prepare($sql);
                            $stmt->execute();
                            $results = $stmt->fetchAll();
                        } catch (Exception $ex) {
                            printErrorMessage($ex->getMessage());
                        }
                        // display all products
                        foreach ($results as $rs) {
                            ?>
                            <tr>
                                <td><?php echo stripslashes($rs["products_name"]) ?></td>
                                <td style="text-align:center"><?php echo stripslashes($rs["products_quantity"]) ?></td>
                                <td style="text-align:center;"><?php echo stripslashes($rs["products_model"]) ?></td>
                                <td style="text-align:center;"><?php echo stripslashes($rs["products_price"]) ?></td>
                                <td style="text-align:center;"><?php echo stripslashes($rs["products_weight"]) ?></td>
                                <td style="text-align:center;"><?php echo ($rs["products_status"] == "A") ? "Active" : "Inactive"; ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
                    <div class="height10"></div>
                    <div style="float:right;" >
                        <a href="save-json.php" title="Save to file name test2.json" ><img src="images/button4.png" alt="Save to file name test2.json" width="141" height="40"> </a>
                        <a href="show-json.php" title="Show Json in Browser" target="_blank" ><img src="images/button3.png" alt="Show Json in Browser" width="230" height="40"> </a>        
                    </div>
                </article>
                <footer>
                    <div class="copyright"> &copy; 2013 <a href="http://www.thesoftwareguy.in" target="_blank">thesoftwareguy</a>. All rights reserved </div>
                    <div class="footerlogo"><a href="http://www.thesoftwareguy.in" target="_blank"><img src="http://www.thesoftwareguy.in/thesoftwareguy-logo-small.png" width="200" height="47" alt="thesoftwareguy logo" /></a> </div>
                </footer>
            </div>
        </div>
    </body>
</html>
