<?php
    require_once "src/AnagramGenerator.php";

    class AnagramGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_breakDownWord()
        {
            //arrange
            $test_AnagramGenerator = new AnagramGenerator;
            $input = "lemon";

            //act
            $result = $test_AnagramGenerator->breakDownWord($input);

            //assert
            $this->assertEquals(["l","e","m","o","n"], $result);
        }

        function test_splitUpMatches()
        {
            //arrange
            $test_AnagramGenerator = new AnagramGenerator;
            $input = "melon";

            //act
            $result = $test_AnagramGenerator->splitUpMatches($input);

            //assert
            $this->assertEquals(["m","e","l","o","n"], $result);
        }

        function test_testIfMatch()
        {
            //arrange
            $test_AnagramGenerator = new AnagramGenerator;
            $input1 = ["l","e","m","o","n"];
            $input2 = ["m","l","n","o","e"];

            //act
            $result = $test_AnagramGenerator->testIfMatch($input1, $input2);

            //assert
            $this->assertEquals("The words are anagrams!", $result);
        }
    }
 ?>
