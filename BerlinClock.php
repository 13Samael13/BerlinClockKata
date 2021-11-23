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

        public function blocDe5Min(string $nbMinutes) : string{
            if($nbMinutes >= "60") return "00000000000";
            if($nbMinutes >= "55") return "YYRYYRYYRYY";
            if($nbMinutes >= "50") return "YYRYYRYYRY0";
            if($nbMinutes >= "45") return "YYRYYRYYR00";
            if($nbMinutes >= "40") return "YYRYYRYY000";
            if($nbMinutes >= "35") return "YYRYYRY0000";
            if($nbMinutes >= "30") return "YYRYYR00000";
            if($nbMinutes >= "25") return "YYRYY000000";
            if($nbMinutes >= "20") return "YYRY0000000";
            if($nbMinutes >= "15") return "YYR00000000";
            if($nbMinutes >= "10") return "YY000000000";
            if($nbMinutes >= "5") return "Y0000000000";
            return "00000000000";
        }

    }
