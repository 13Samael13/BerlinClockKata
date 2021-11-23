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

    public function testBloc5MGiven2ShouldReturnY0000000000(){
        //Arrange
        $BerlinClock= new BerlinClock();
        //Act
        $actual = $BerlinClock->blocDe5Min("2");
        //Assert
        $this->assertEquals("Y0000000000",$actual);
    }

    public function testSimpleHeureGiven19ReturnRRRR(){
        //Arrange
        $BerlinClock= new BerlinClock();
        //Act
        $actual = $BerlinClock->heureSimple("19");
        //Assert
        $this->assertEquals("RRRR", $actual);

    }






}
