<?php
require_once "src/Scrabble.php";
class ScrabbleTest extends PHPUnit_Framework_TestCase
{
    function test_array()
    {
        //Arrange
        $Scrabble = new Scrabble;
        $input = "DOg";

        //Act
        $result = $Scrabble->scoreGenerator($input);

        //Assert
        $this->assertEquals(5, $result);
    }

    function test_compare_array()
    {
        //Arrange
        $Scrabble = new Scrabble;
        $input = "zebra";

        //Act
        $result = $Scrabble->scoreGenerator($input);

        //Assert
        $this->assertEquals(16, $result);
    }

}

?>
