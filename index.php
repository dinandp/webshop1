<?php require "headnavbar.php";
//require_once "component.php";
require "dbconnection.class.php";
?>


<body>
<?php
//echo "<pre>";
//print_r($products);
//echo "</pre>";

$dbconnect = new dbconnection();
$sql = "SELECT * FROM product WHERE prod_catid=1";
$query = $dbconnect->prepare($sql);
$query->execute();
$products = $query->fetchAll(PDO::FETCH_NUM);

// echo "<pre>";
// echo print_r($results);
// echo "</pre>";

// exit();

?>
    <div class="jordan1">
        <h2>Jordan I high</h2>
            <div class="one">
                <?php
                $teller = 0;
                while ($teller < 3){
                    echo "<div class='qwerty' >
                    <img src='img/{$products[$teller][3]}'>
                    <p>{$products[$teller][2]}</p>
                    <p>{$products[$teller][4]}</p>
                    <a href='#'>Buy</a>
                </div> ";
                $teller++;
                }
                ?>
            </div>

            <div class="two">
            <?php
                while ($teller < 6){
                    echo "<div class='qwerty' >
                    <img src='img/{$products[$teller][3]}'>
                    <p>{$products[$teller][2]}</p>
                    <p>{$products[$teller][4]}</p>
                    <a href='#'>Buy</a>
                </div> ";
                $teller++;
                }
                ?>
            </div>
            <canvas id="whitespace"></canvas>



    </div>

</body>
</html>