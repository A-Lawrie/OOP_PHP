<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP in PHP</title>
    <?php include('class_lib.php') ;?>
</head>
<body>
    <?php
        $stefan = new person();
        $jimmy = new person();

        $stefan->set_name("Stefan Mischook");
        $jimmy->set_name("Nick Waddles");

        // directly accessing properties in a class is a no-no.
        //echo "Stefan's full name: " . $stefan->name;
        
        echo "Stefan's full name is ". $stefan->get_name(). "<br/>";
        echo "Nicks's full name is ". $jimmy->get_name(). "<br/>";
    ?>
    
</body>
</html>