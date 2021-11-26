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

    public function testMinutesSimpleGiven3ShouldReturnYYYO(){
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->minutesSimple("3");

        $this->assertEquals("YYYO", $actual);
    }

    public function testMinutesSimpleGiven4ShouldReturnYYYY(){
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->minutesSimple("4");

        $this->assertEquals("YYYY", $actual);
    }

    public function testMinutesSimpleGiven5ShouldReturnXXXX(){
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->minutesSimple("5");

        $this->assertEquals("OOOO", $actual);
    }

    public function testMinutesSimpleGiven6ShouldReturnYXXX(){
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->minutesSimple("6");

        $this->assertEquals("YOOO", $actual);
    }


    public function testBloc5MGiven5ShouldReturnYOOOOOOOOOOO(){
        //Arrange
        $BerlinClock= new BerlinClock();
        //Act
        $actual = $BerlinClock->blocDe5Min("5");
        //Assert
        $this->assertEquals("YOOOOOOOOOO",$actual);
    }

    public function testBloc5MGiven7ShouldReturnYOOOOOOOOOO(){
        //Arrange
        $BerlinClock= new BerlinClock();
        //Act
        $actual = $BerlinClock->blocDe5Min("7");
        //Assert
        $this->assertEquals("YOOOOOOOOOO",$actual);
    }
    public function testBloc5MGiven13ShouldReturnYYOOOOOOOOO(){
        //Arrange
        $BerlinClock= new BerlinClock();
        //Act
        $actual = $BerlinClock->blocDe5Min("13");
        //Assert
        $this->assertEquals("YYOOOOOOOOO",$actual);
    }
    public function testBloc5MGiven46ShouldReturnYYRYYRYYROO(){
        //Arrange
        $BerlinClock= new BerlinClock();
        //Act
        $actual = $BerlinClock->blocDe5Min("46");
        //Assert
        $this->assertEquals("YYRYYRYYROO",$actual);
    }

    public function testSimpleHeureGiven19ReturnRRRR(){
        //Arrange
        $BerlinClock= new BerlinClock();
        //Act
        $actual = $BerlinClock->heureSimple("19");
        //Assert
        $this->assertEquals("RRRR", $actual);
    }
    public function testSimpleHeureGiven16ReturnROOO(){
        //Arrange
        $BerlinClock= new BerlinClock();
        //Act
        $actual = $BerlinClock->heureSimple("16");
        //Assert
        $this->assertEquals("ROOO", $actual);
    }

    public function testSimpleHeureGiven18ReturnRRR0(){
        //Arrange
        $BerlinClock= new BerlinClock();
        //Act
        $actual = $BerlinClock->heureSimple("18");
        //Assert
        $this->assertEquals("RRRO", $actual);
    }

    public function testBloc5HeuresGiven15ReturnRRRO(){
        //Arrange
        $BerlinClock= new BerlinClock();
        //Act
        $actual = $BerlinClock->bloc5Heures("15");
        //Assert
        $this->assertEquals("RRRO", $actual);
    }
    public function testBloc5HeuresGiven14ReturnRROO(){
        //Arrange
        $BerlinClock= new BerlinClock();
        //Act
        $actual = $BerlinClock->bloc5Heures("14");
        //Assert
        $this->assertEquals("RROO", $actual);
    }





}
