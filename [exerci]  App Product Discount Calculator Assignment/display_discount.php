<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST')

    $productDescription = $_POST["Product_Description"];
$listPrice = $_POST["List_Price"];
$discountPercent = $_POST["Discount_Percent"];

$discountAmount = displayDiscount($listPrice, $discountPercent);

function displayDiscount($listPrice, $discountPercent)
{
    $discountAmounts = $listPrice * $discountPercent * 0.01;
    return $discountAmounts;
}

?>


<!DOCTYPE HTML>
<html>
<style>
    #content {
        width: 450px;
        height: 200px;
        padding: 0px 20px 20px;
        background: white;
        border: 2px solid navy;
    }

    h1 {
        color: darkblue;
    }

    .input {
        margin-bottom: .5em;
        width: 15em;
        padding-right: 1em;
        float: left;
    }


</style>
<body>
<div id="content" style="margin-left: 500px; display: block;">
    <form method="post" action="display_discount.php">
        <h1>Product Discount Calculator</h1>
        <div>

            <label class="input">Product Description : <?php echo $productDescription ?> </label></br>
            <label class="input">Price : <?php echo "$" . $listPrice ?></label></br>
            <label class="input">Discount Percent : <?php echo $discountPercent . "%" ?> </label></br>
            <label class="input">Discount Amount : <?php echo "$" . $discountAmount ?></label> </br>
            <label class="input">Discount Price : <?php echo "$" . $discountAmount ?> </label></br>
        </div>
    </form>
</div>

</body>
</html>

