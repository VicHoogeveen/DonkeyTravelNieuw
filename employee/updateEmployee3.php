<!doctype html>
<html>
<head>
</head>
    <body>
    <link rel="stylesheet" href="../DonkeyTravels.css">
        <?php
        require "employee.php";

        // info from the array into the variables
        $id = $_POST["id"];
        $name = $_POST["name"];
        $password = $_POST["password"];
        $number = $_POST["number"];
        $email = $_POST["email"];
        // maken object ---------------------------------------------------


        $id1 = new employee( $name, $password, $number, $email); // maakt object
        $id1->updateEmployee($id);                   // vervangt de tabelgegevens voor objectgegevens
        echo "This is the updated information: <br/>";
        echo $id . "<br/>";
        $id1->afdrukken();                           // prints

        ?>
    </body>
</html>
