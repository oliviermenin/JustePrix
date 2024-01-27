<?php
class JustPrice
{
    private $winningNumber;
    public function __construct(int $winningNumber = null) {
        $this->winningNumber = $winningNumber;
        $this->winningNumber = random_int(1, 20);
        echo "Nombre gagnant : $this->winningNumber\n";
        
    }

    function selectWinningNumber() {
        $score = 20;
        $i = 0;
        $try = 0;
        while($i < 1) {
            $userInput = readline("Entrer le nombre gagnant :\n");
            if($userInput < $this->winningNumber) {
                echo "C'est plus grand !\n";
                $score--;
                $try++;
            }
            elseif($userInput > $this->winningNumber) {
                echo "C'est plus petit !\n";
                $score--;
                $try++;
            }
            else{
                $try++;
                echo "Bravo vous avez gagné ! Votre score : $score\n Votre nombre d'essai : $try\n";
                $i++;
            }
        }
    }
}

$object = new JustPrice();
$object->selectWinningNumber();