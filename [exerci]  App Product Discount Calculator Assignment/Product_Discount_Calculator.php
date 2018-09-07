<!DOCTYPE HTML>
<html>
<style>
    #content {
        width: 450px;
        height: 180px;
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
    }

    .label {
        width: 10em;
        padding-right: 1em;
        float: left;
    }

</style>
<body>
<div id="content" style="margin-left: 500px; display: block;">
    <form method="post" action="display_discount.php">
        <h1>Product Discount Calculator</h1>
        <div>

            <label class="label">Product Description: </label>
            <input class="input" type="text" name="Product_Description"></br>

            <label class="label">List Price: </label>
            <input class="input" type="number" name="List_Price"></br>

            <label class="label">Discount Percent: </label>
            <input class="input" type="number" name="Discount_Percent"></br>

        </div>
        <div>
            <label class="label">&nbsp;</label>
            <input type="submit" name="Calculate Discount" value="Calculate Discount">

        </div>
    </form>
</div>

</body>
</html>

