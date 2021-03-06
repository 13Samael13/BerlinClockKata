<?php
    class BerlinClock{
        //Y --> Yellow R --> Red O --> OFF
        public function minutesSimple(string $nbMinutes) : string{
            if($nbMinutes%5 == "1") return "YOOO";
            if($nbMinutes%5 == "2") return "YYOO";
            if($nbMinutes%5 == "3") return "YYYO";
            if($nbMinutes%5 == "4") return "YYYY";
            return "OOOO";
        }

        public function blocDe5Min(string $nbMinutes) : string{
            if($nbMinutes >= "60") return "OOOOOOOOOOO";
            if($nbMinutes >= "55") return "YYRYYRYYRYY";
            if($nbMinutes >= "50") return "YYRYYRYYRYO";
            if($nbMinutes >= "45") return "YYRYYRYYROO";
            if($nbMinutes >= "40") return "YYRYYRYYOOO";
            if($nbMinutes >= "35") return "YYRYYRYOOOO";
            if($nbMinutes >= "30") return "YYRYYROOOOO";
            if($nbMinutes >= "25") return "YYRYYOOOOOO";
            if($nbMinutes >= "20") return "YYRYOOOOOOO";
            if($nbMinutes >= "15") return "YYROOOOOOOO";
            if($nbMinutes >= "10") return "YYOOOOOOOOO";
            if($nbMinutes >= "5" ) return "YOOOOOOOOOO";
            return "OOOOOOOOOOO";
        }

        public function heureSimple(string $nbHeures) : string {
            if($nbHeures % 5 == "4") return "RRRR";
            if($nbHeures % 5 == "3") return "RRRO";
            if($nbHeures % 5 == "2") return "RROO";
            if($nbHeures % 5 == "1") return "ROOO";
            return "OOOO";
        }

        public function bloc5Heures(string $nbHeures) : string{
            if($nbHeures >= "20") return "RRRR";
            if($nbHeures >= "15") return "RRRO";
            if($nbHeures >= "10") return "RROO";
            if($nbHeures >= "5") return "ROOO";
            return "OOOO";
        }

        public function secondes(string $nbSecondes) : string{
            if($nbSecondes % 2 == "1") return "O";
            return "R";
        }

        public function afficherHeure(string $heure) : string{
            $divisionHeureTab = explode(":",$heure);
            $nbrHeure = (string) $divisionHeureTab[0];
            $nbrMinutes = (string) $divisionHeureTab[1];
            $nbrSecondes = (string) $divisionHeureTab[2];
            $affichageHeure = "";
            $affichageHeure = $affichageHeure . $this->secondes($nbrSecondes) . "\n";
            $affichageHeure = $affichageHeure . $this->bloc5Heures($nbrHeure) . "\n";
            $affichageHeure = $affichageHeure . $this->heureSimple($nbrHeure) . "\n";
            $affichageHeure = $affichageHeure . $this->blocDe5Min($nbrMinutes) . "\n";
            $affichageHeure = $affichageHeure . $this->minutesSimple($nbrMinutes);
            return $affichageHeure;
        }


    }
