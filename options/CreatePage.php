<?php
echo "create page";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper {
            width: 500px;
            margin: 0 auto;
        }
    </style>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>

    <script>

        $("select")
            .change(function () {
                var str = "";
                $("select option:selected").each(function () {
                    str += $(this).text() + " ";
                });
                $("div").text(str);

            })

            .change();

    </script>
    <style>

        div {

            color: red;

        }

    </style>

</head>
<body>
<form>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="sku">Enter SKU number</label>
            <input type="text" class="form-control" id="sku" placeholder="sku">
        </div>
        <div class="form-group col-md-4">
            <label for="name">enter name of product</label>
            <input type="text" class="form-control" id="name" placeholder="name">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group">
            <div class="form-group col-md-4">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" placeholder="price">
            </div>
            <div class="form-group col-md-4">
                <label for="price">Select product type</label>
                <select class="form-control" id="price">
                    <option></option>
                    <option name="cd" selected="selected">CD</option>
                    <option>Book</option>
                    <option>Furniture</option>
                </select>
            </div>
        </div>
    </div>
    <div></div>
</form>
</body>
</html>

