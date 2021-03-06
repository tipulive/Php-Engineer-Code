<?php
/*
 * Flicker Leap PHP Engineer Test
 *
 * This is where the magic happens. Run all code in here to show your end result.
 */

require __DIR__ . '/vendor/autoload.php';

use FlickerLeap\Diamond;
use FlickerLeap\Rectangle;
use FlickerLeap\square;
use FlickerLeap\Service;

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Flicker Leap - PHP Engineer Test</title>
    </head>
    <style type="text/css">
        body{line-height: 1em;}
    </style>
    <body>

        <h1>PHP Engineer Test</h1>

        <h2>Hello World</h2>

        <p>At the end of this test, you should have all the answers on this page.</p>

        <h2>Output a square</h2>

        <?php
            // implement the square class here
            $MySquare=new square();
            $MySquare->displayName();
            echo "<br />";
            $MySquare->draw();
        ?>

        <h2>Output a diamond</h2>

        <?php
            // output your diamond here

            $MyDiamond = new Diamond();
            $MyDiamond->displayName();
            echo "<br />";
            $MyDiamond->draw();
        ?>

        <h2>Output your rectangle</h2>

        <?php
            // output your working rectangle here
            $MyRectangle = new Rectangle();
            $MyRectangle->displayName();
            echo "<br />";
            $MyRectangle->draw();
        ?>

        <h2>Output the result of the API</h2>

        <?php
            // Use the Httpful client to output the API results here.

            $MyApi=new Service();
            $MyApi->displayName();
            echo "<br />";
            $MyApi->ApiCall();
            $responseData=json_decode($MyApi->ApiCall(),false); 
           // echo $responseData->abilities[0]->ability->name;
            echo "<ul>
            <li>id:{$responseData->id}</li>
            <li>Name:{$responseData->name}</li>
            <li>Order:{$responseData->order}</li>
            </ul>";
        ?>

        <h2>Recommendations</h2>

        <p>i think this one is enough or  you may add some Database related too</p>

    </body>
</html>
