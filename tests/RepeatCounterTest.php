<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function test_countRepeats_oneLetter()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_one = "m";
            $input_two = "m";

            //Act
            $result = $test_RepeatCounter->countRepeats($input_one, $input_two);

            //Assert
            $this->assertEquals("m", $result);
        }

        function test_countRepeats_oneWord()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_one = "dog";
            $input_two = "dog";

            //Act
            $result = $test_RepeatCounter->countRepeats($input_one, $input_two);

            //Assert
            $this->assertEquals("dog", $result);
        }

        function test_countRepeats_noMatch()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_one = "dog";
            $input_two = "cat";

            //Act
            $result = $test_RepeatCounter->countRepeats($input_one, $input_two);

            //Assert
            $this->assertEquals("no word matches found", $result);
        }
    }
?>
