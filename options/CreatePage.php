<?php
echo "create page";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function () {
            $("#state").change(function () {
                if ($(this).val() == "cd") {
                    $("#foo1").show();
                } else {
                    $("#foo1").hide();
                }
            });
            $("#state").change(function () {
                if ($(this).val() == "book") {
                    $("#foo2").show();
                } else {
                    $("#foo2").hide();
                }
            });
            $("#state").change(function () {
                if ($(this).val() == "furniture") {
                    $("#foo3").show();
                } else {
                    $("#foo3").hide();
                }
            });
        });
    </script>
</head>

<body>
<form>
<div class="page-header clearfix">
    <h2 class="pull-left">Create New Product</h2>
    <input type="submit" class="btn btn-primary pull-right" value="Submit">
</div>

    <div class="container">
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="state">Select product type</label>
                <select id="state" name="state" class="form-control">
                    <option value="free"></option>
                    <option value="cd">CD</option>
                    <option value="book">Book</option>
                    <option value="furniture">Furniture</option>
                </select>
            </div>
            <div class="form-row">
                <p id="foo1" style="display: none">
                    <label>Enter CD size
                        <input type="text" name="extra" class="form-control">
                    </label>
                </p>
                <p id="foo2" style="display: none">
                    <label>Enter book pages
                        <input type="text" class="form-control">
                    </label>
                </p>
                <p id="foo3" style="display: none">
                    <label>Enter furniture wigth
                        <input type="text" class="form-control">
                    </label>
                    <label>Enter furniture length
                        <input type="text" class="form-control">
                    </label>
                    <label>Enter furniture height
                        <input type="text" class="form-control">
                    </label>
                </p>
            </div>
        </div>
    </div>

    <div class="container">
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
            <div class="form-group col-md-4">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" placeholder="price">
            </div>
        </div>
    </div>

<!--    <div class="container">-->
<!--        <div class="form-row">-->
<!--            <input type="submit" class="btn btn-primary" value="Submit">-->
<!--        </div>-->
<!--    </div>-->
</form>
</body>
</html>

