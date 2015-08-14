<?php

    require_once "src/CountRepeats.php";

    class CountRepeatsTest extends PHPUnit_Framework_TestCase
    {

        function test_single letter()
        {
            //Arrange
            $test_CountRepeats = new CountRepeats;
            $input_one = "m";
            $input_two = "m";

            //Act
            $result = $test_CountRepeats->checkWords($input_one, $input_two);

            //Assert
            $this->assertEquals("m" $result);
        }
    }
?>
