<!doctype html>
<html>
<head>
</head>
    <body>
        <?php

        require "Customer.php";                    // needed to make an object
        $id = $_POST["id"];
        $id1 = new Customer();                // makes the object
        $id1->searchCustomer($id);



        // properties into the variables


        // properties in variabelen zetten
        $name = $id1->get_name();
        $password = $id1->get_password();
        $number = $id1->get_number();
        $email = $id1->get_email();
        ?>

        <form action="updateCustomer3.php" method="POST">
            <!-- $id cant be changed -->
            <input type="hidden" name="id" value="<?php echo $id1; ?> "><br/>
            <input type="text" name="name" value="<?php echo $name; ?> "><br/>
            <input type="text" name="password" value="<?php echo $password; ?> "><br/>
            <input type="text" name="number" value="<?php echo $number; ?> "><br/>
            <input type="text" name="email" value="<?php echo $email; ?> "><br/>
            <input type="submit"><br/><br/>
        </form>
    </body>
</html>

