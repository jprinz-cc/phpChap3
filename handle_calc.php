<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style type="text/css">
        .number {
            font-weight: bold;
        }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <main>
        <?php
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $discount = $_POST['discount'];
        $tax = $_POST['tax'];
        $shipping = $_POST['shipping'];
        $payments = $_POST['payments'];

        $total = $price * $quantity;
        $total = $total + $shipping;
        $total = $total - $discount;

        $taxrate = $tax / 100;
        $taxrate = $taxrate + 1;

        $total = $total * $taxrate;

        $monthly = $total / $payments;

        print "<p>You have selected to purchase:<br>
                <span class=\"number\">$quantity</span> widget(s) at <br>
                $<span class=\"number\">$price</span> price each plus a <br>
                $<span class=\"number\">$shipping</span> shipping cost and a <br>
                <span class=\"number\">$tax</span> percent tax rate.<br>
                After your $<span class=\"number\">$discount</span> discount, the total cost is
                $<span class\"number\">$total</span>.<br>
                Divided over <span class=\"number\">$payments</span> monthly payments,
                that would be $<span class=\"number\">$monthly</span> each.</p>";

        ?>

    </main>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
