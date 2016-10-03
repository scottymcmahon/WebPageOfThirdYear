<!DOCTYPE html>
<html>
<head>
</head>
<body>
<!--BASIC PHP-->
<p>
    <?php
    $name = "Scotty";

    if ($name = "scotty") {
        print "Keep that muffin upright!" . "<br>";
        print "You idiot";
    } else {
        print"go away!!";
    }
    ?>
</p>
<!--SWITCHES-->
<b>
    <?php
    $numberOfHobbits = 2;
    switch ($numberOfHobbits) {
        case 1:
            echo "1 sad hobbit";
            break;
        case 2:
            echo "2 happy hobbits";
            break;
        case 3:
            echo "3 hobbits are a crowd";
            break;
        default:
            echo "All the hobbits have gone home";
    }
    ?>
</b>
<!--ARRAY PRACTICE-->
<b>
    <?php
    $provisionedActivity = array("specs", "drugs", "rock", "roll");//Declaring the array

    foreach ($provisionedActivity as $x) {
        print "<p>$x</p>";
    }

    $provisionedActivity[1] = "hugs";

    unset($provisionedActivity[3]);

    foreach ($provisionedActivity as $x) {
        print "<p>$x</p>";
    }
    ?>
</b>
<!--LOOP PRACTICE-->
<b>
    <?php
        for ($i = 1; $i < 10; $i++)
        {
            echo "<p>Hello!</p>";
        }
    ?>
</b>
</body>
</html>