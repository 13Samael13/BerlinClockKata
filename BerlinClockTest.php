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
    public function testMinutesSimpleGiven2ReturnYYOO(){
        //arrange
        $BerlinClock = new BerlinClock();
        // Act
        $actual = $BerlinClock->minutesSimple("2");
        //Assert
        $this->assertEquals( "YYOO",$actual);
    }

    public function testBloc5MGiven5ShouldReturnY0000000000(){
        //Arrange
        $BerlinClock= new BerlinClock();
        //Act
        $actual = $BerlinClock->blocDe5Min("5");
        //Assert
        $this->assertEquals("Y0000000000",$actual);
    }

    public function testBloc5MGiven7ShouldReturnY0000000000(){
        //Arrange
        $BerlinClock= new BerlinClock();
        //Act
        $actual = $BerlinClock->blocDe5Min("7");
        //Assert
        $this->assertEquals("Y0000000000",$actual);
    }
    public function testBloc5MGiven13ShouldReturnYY000000000(){
        //Arrange
        $BerlinClock= new BerlinClock();
        //Act
        $actual = $BerlinClock->blocDe5Min("13");
        //Assert
        $this->assertEquals("YY000000000",$actual);
    }
    public function testBloc5MGiven46ShouldReturnYYRYYRYYR00(){
        //Arrange
        $BerlinClock= new BerlinClock();
        //Act
        $actual = $BerlinClock->blocDe5Min("46");
        //Assert
        $this->assertEquals("YYRYYRYYR00",$actual);
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
