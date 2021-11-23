<?php
    class BerlinClock{
        //Y --> Yellow R --> Red O --> OFF
        public function minutesSimple(string $nbrMinutes) : string{
            if($nbrMinutes%5 == "1") return "YOOO";
            if($nbrMinutes%5 == "2") return "YYOO";
            if($nbrMinutes%5 == "3") return "YYYO";
            if($nbrMinutes%5 == "4") return "YYYY";
            return "OOOO";
        }

    }
