<!DOCTYPE html>
    <html>
        <head>
        </head>
        <body>
            <p>
                <?php
                    $name = "Scotty";

                    if($name = "scotty"){
                        print "Keep that muffin upright!"."<br>";
                        print "You idiot";
                    }
                    else{
                        print"go away!!";
                    }
                ?>
            </p>

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
        </body>
    </html>