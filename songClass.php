<?php
// Creating a class. This way we make sure we can update it with anything we need without re-coding everything. We can simply Add or remove a function to update it.
class Song
{
    public $highest = 99; // Declaring those properties give us a minimal and maximum range to not exceed.
    public $lowest = 0; 


    public function numberVerification($user_choice, $highest, $lowest) // This function is made to check the value choosed by the user. 
    {

        if ($user_choice < $lowest) {
            return false;
        } 

        if ($user_choice > $highest) {
            return false;
        }

        if ($user_choice >= $lowest && $user_choice <= $highest) {
            return is_numeric($user_choice);
        }
        return true;
    }

    public function startSong() // Whole process to excecute. Basic IF/ELSE to expose the different case.
    {

        if (isset($_POST['user_input'])) {

            $user_choice = htmlspecialchars($_POST['user_input']);

            if ($this->numberVerification($user_choice, $this->highest, $this->lowest)) {
                if ($user_choice == $this->lowest) {
                    echo '<p class="result">
							Plus de shooters sans alcool sur le mur, plus de shooters sans alcool. </br> 
							Vas au supermarché pour en acheter, 99 shooters sans alcool sur le mur.					
						  </p>';
                } elseif ($user_choice == 1) {
                    echo '<p class="result">'.
							$user_choice.' shooter sans alcool sur le mur, '.$user_choice.' shooter sans alcool. </br>
							Bois en un et au suivant ! plus de shooters sans alcool sur le mur.
						  </p>';
                } elseif ($user_choice == 2) {	
                    echo '<p class="result">'.
							$user_choice.' shooters sans alcool sur le mur, '.$user_choice.' shooters sans alcool. </br>
							Bois en un et au suivant ! '.(--$user_choice).' shooter sans alcool sur le mur.
						  </p>';
                } else {        
                    echo '<p class="result">'.
							$user_choice.' shooters sans alcool sur le mur, '.$user_choice.' shooters sans alcool. </br>
							Bois en un et au suivant ! '.(--$user_choice).' shooters sans alcool sur le mur.
						  </p>';
                }
            } elseif (empty($user_choice)) {
                echo '<p class="result isEmpty">
						Vous n\'avez indiquer aucune valeur ! </br> 
						Veuilllez recommencer.
					  </p>';
            } else {	
				echo '<p class="result isFalse">
						'.$user_choice. ' n\'est pas une valeur correcte ! </br> 
						Veuilllez n\'utiliser que des nombres entiers compris entre 0 et 99.
					  </p>';
            }
        }
    }
}