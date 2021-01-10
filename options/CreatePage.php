<?php
require_once $_SERVER['DOCUMENT_ROOT']."/DBOptions/connection.php";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$name = $price = $type = $sku = $options = "";
$name_err = $price_err = $type_err = $sku_err = $options_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_options = trim($_POST["options"]);
    if (empty($input_options)) {
        $options_err = "Please enter the options.";
    } else {
        $options = $input_options;
    }

    $input_sku = trim($_POST["sku"]);
    if (empty($input_sku)) {
        $sku_err = "Please enter the sku.";
    } else {
        $sku = $input_sku;
    }

    $input_name = trim($_POST["name"]);
    if (empty($input_name)) {
        $name_err = "Please enter a name.";

    } else {
        $name = $input_name;
    }

    $input_price = trim($_POST["price"]);
    if (empty($input_price)) {
        $price_err = "Please enter a price.";
    } else {
        $price = $input_price;
    }

    $input_type = trim($_POST["type"]);
    if (empty($input_type)) {
        $type_err = "Please enter the type.";
    } else {
        $type = $input_type;
    }









    $sql = "INSERT INTO product (options, sku, name, price, type 
                                    ) VALUES (?, ?, ?, ?, ?)";

    if ($stmt = mysqli_prepare($link, $sql)) {
        mysqli_stmt_bind_param($stmt, "sssss",$param_options,
            $param_sku,$param_name,
            $param_price, $param_type
        );
        $param_options = $options;
        $param_sku = $sku;
        $param_name = $name;
        $param_price = $price;
        $param_type = $type;



        if (mysqli_stmt_execute($stmt)) {
            header("location: http://localhost:63342/scandiweb/landingPages/ProductList.php");
            exit();
        } else {
            echo "Something went wrong. Please try again later.";
        }
    }

    // Close statement
    mysqli_stmt_close($stmt);
//    }

    // Close connection
    mysqli_close($link);
}
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
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<div class="page-header clearfix">
    <h2 class="pull-left">Create New Product</h2>
    <input type="submit" class="btn btn-primary pull-right" value="Submit">
    <a href="/scandiweb/landingPages/ProductList.php" class="btn btn-success pull-right">Cancel</a>
</div>

    <div class="container">
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="state">Select product type</label>
                <select id="state" name="type" class="form-control" >
                    <option value="free"></option>
                    <option value="cd" name="type">CD</option>
                    <option value="book" name="type">Book</option>
                    <option value="furniture" name="type">Furniture</option>
                </select>
            </div>
            <div class="form-row col-md-9">
                <p id="foo1" style="display: none">
                    <label>Enter CD size
                        <input type="text" name="options" class="form-control" value="<?php echo $options; ?>">
                    </label>
                </p>
                <p id="foo2" style="display: none">
                    <label>Enter book pages
                        <input type="text" name="options" class="form-control" value="<?php echo $options; ?>">
                    </label>
                </p>
                <p id="foo3" style="display: none">
                    <label>Enter furniture wigth, length, height
                        <input type="text" name="options" class="form-control" placeholder="Enter format x/x/x" value="<?php echo $options; ?>">
                    </label>

                </p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="form-row">
            <div class="form-group col-md-4 <?php echo (!empty($sku_err)) ? 'has-error' : ''; ?>">
                <label for="sku">Enter SKU number</label>
                <input type="text" class="form-control" id="sku" placeholder="sku" name="sku" value="<?php echo $sku; ?>">
            </div>
            <div class="form-group col-md-4 <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                <label for="name">enter name of product</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="name" value="<?php echo $name; ?>">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4 <?php echo (!empty($price_err)) ? 'has-error' : ''; ?>">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="price" value="<?php echo $price; ?>">
            </div>
        </div>
    </div>

</form>
</body>
</html>

