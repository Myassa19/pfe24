<?php
// ComputerController.php

class ComputerController {
    private $computer;

    public function __construct($computer) {
        $this->computer = $computer;
    }

    public function addComputer($idob,$numserie,$type, $network, $groupe, $lieu, $description) {
        return $this->computer->addComputer($idob ,$numserie,$type, $network, $groupe, $lieu, $description);
    }
    public function getAllComputers() {
        // Appel de la méthode pour récupérer tous les ordinateurs du modèle
        return $this->computer->getAllComputers();
    }
}

?>

