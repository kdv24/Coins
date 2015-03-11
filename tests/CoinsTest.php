<?php
    require_once "src/Coins.php";

    class CoinsTest extends PHPUnit_Framework_TestCase
    {
      function test_penny_only()
      {
        //Arrange
        $test_Coins = new Coins();
        $input = 1;

        //Act
        $result = $test_Coins->makeChange($input);

        //Assert
        $output = array(1);
        $this->assertEquals($output, $result);
      }

      function nickel_only()
      {
        //Arrange
        $test_Coins = new Coins();
        $input = 5;

        //Act
        $result = $test_Coins->makeChange($input);

        //Assert
        $output = array(5);
        $this->assertEquals($output, $result);
      }
    }

?>
