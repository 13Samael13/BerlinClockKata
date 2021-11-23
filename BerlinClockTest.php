<?php


use PHPUnit\Framework\TestCase;
require 'BerlinClock.php';

class BerlinClockTest extends TestCase{

    public function testMinutesSimpleGiven1ReturnYOOO(){
        //arrange
        $BerlinClock = new BerlinClock();
        // Act
        $actual = $BerlinClock->minutesSimple("1");
        //Assert
        $this->assertEquals( "YOOO",$actual);
    }

    public function testSimpleHeureGiven1ReturnRRRR(){
        //Arrange

        //Act

        //Assert
}


}
