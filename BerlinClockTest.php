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

    public function testMinutesSimpleGiven5ShouldReturnOOOO(){
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->minutesSimple("5");

        $this->assertEquals("OOOO", $actual);
    }

    public function testMinutesSimpleGiven6ShouldReturnYOOO(){
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->minutesSimple("6");

        $this->assertEquals("YOOO", $actual);
    }

    public function testBlocDe5MinGiven0ShouldReturnOOOOOOOOOOO(){
        $BerlinClock = new BerlinClock();

        $actual = $BerlinClock->blocDe5Min("0");

        $this->assertEquals("OOOOOOOOOOO", $actual);
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

    public function testBloc5MinGiven10ShouldReturnYYOOOOOOOOO(){
        $BerlinClock= new BerlinClock();

        $actual = $BerlinClock->blocDe5Min("10");

        $this->assertEquals("YYOOOOOOOOO", $actual);
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

    public function testBloc5MinGiven20ShouldReturnYYRYOOOOOOO(){
        $BerlinClock= new BerlinClock();

        $actual = $BerlinClock->blocDe5Min("20");

        $this->assertEquals("YYRYOOOOOOO", $actual);
    }

    public function testBloc5MinGiven60ShouldReturnOOOOOOOOOOO(){
        $BerlinClock= new BerlinClock();

        $actual = $BerlinClock->blocDe5Min("60");

        $this->assertEquals("OOOOOOOOOOO", $actual);
    }

    public function testHeureSimpleGiven0ShouldReturnOOOO(){
        $BerlinClock= new BerlinClock();

        $actual = $BerlinClock->heureSimple("0");

        $this->assertEquals("OOOO", $actual);
    }

    public function testHeureSimpleGiven1ShouldReturnROOO(){
        $BerlinClock= new BerlinClock();

        $actual = $BerlinClock->heureSimple("1");

        $this->assertEquals("ROOO", $actual);
    }

    public function testHeuresimplGiven4ShouldReturnRRRR(){
        $BerlinClock= new BerlinClock();

        $actual = $BerlinClock->heureSimple("4");

        $this->assertEquals("RRRR", $actual);
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

    public function testBloc5HeuresGiven0ShouldReturnOOOO(){
        $BerlinClock= new BerlinClock();

        $actual = $BerlinClock->Bloc5Heures("0");

        $this->assertEquals("OOOO", $actual);
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

    public function testBloc5HeuresGiven20ShouldReturnRRRR(){
        $BerlinClock= new BerlinClock();

        $actual = $BerlinClock->bloc5Heures("20");

        $this->assertEquals("RRRR", $actual);
    }

    public function testSecondesGiven0ShouldReturnR(){
        $BerlinClock= new BerlinClock();

        $actual = $BerlinClock->secondes("0");

        $this->assertEquals("R", $actual);
    }

    public function testSecondesGiven1ShouldReturnO(){
        $BerlinClock= new BerlinClock();

        $actual = $BerlinClock->secondes("1");

        $this->assertEquals("O", $actual);
    }

    public function testSecondesGiven2ShouldReturnR(){
        $BerlinClock= new BerlinClock();

        $actual = $BerlinClock->secondes("2");

        $this->assertEquals("R", $actual);
    }

    public function testafficherHeureiven17h21m36sShouldReturnR__RRRO__RROO__YYRYOOOOOOO__YOOO(){
        $BerlinClock= new BerlinClock();

        $actual = $BerlinClock->afficherHeure("17:21:36");

        $this->assertEquals("R\nRRRO\nRROO\nYYRYOOOOOOO\nYOOO",$actual);
    }





}
