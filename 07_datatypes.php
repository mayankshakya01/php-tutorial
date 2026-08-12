<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "There are seven deta types in php<br>";
    $a=10;
    echo $a; //var_dump is used to know the type od the variable and what it store
    ?>
    <ul>
        <li>Integer</li>
        <li>Float</li>
        <li>String</li>
        <li>Boolean</li>
        <li>Object</li>
        <li>Array</li>
        <li>Null</li>
    </ul>   
    <ol>
       
        <li>
            $b=12.3;
            echo $b
        </li>
        <li>
            $name="Mayank";
            echo "$name is good boy"
        </li>
        <li>
            $x=true;
            $y=false;
            echo var_dump($x);
            echo var_dump($y);
        </li>
        <li>
            $employee="mayank"
            echo "company is class and $employee is employee"
        </li>
        <li>
            $fruits=("apple","mango","papaya")
            echo var_dump($fruits)
        </li>
        <li>
            echo "null is empty data type"
        </li>
    </ol>
    
    </body>
</html>