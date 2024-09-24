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
        // creating an object with constructors
        $stefan = new person("Stefan Mischook");
  
        //showed from using constructor
        echo "Stefan's full name: " . $stefan->get_name();

    ?>
    
</body>
</html>