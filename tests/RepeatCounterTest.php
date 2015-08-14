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
            $this->assertEquals(1, $result);
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
            $this->assertEquals(1, $result);
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

        function test_countRepeats_mixedCase()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_one = "fRoG";
            $input_two = "frOg";

            //Act
            $result = $test_RepeatCounter->countRepeats($input_one, $input_two);

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_countRepeats_countWord()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_one = "dog";
            $input_two = "Dog is a dog a cat is not a dog a frog is not a dog";

            //Act
            $result = $test_RepeatCounter->countRepeats($input_one, $input_two);

            //Assert
            $this->assertEquals(4, $result);
        }

        function test_countRepeats_countWordPuncuation()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $input_one = "dog";
            $input_two = "Dog, is a dog? A cat is not a dog! a frog is not a dog.";

            //Act
            $result = $test_RepeatCounter->countRepeats($input_one, $input_two);

            //Assert
            $this->assertEquals(4, $result);
        }
    }
?>
