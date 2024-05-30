<?php
        if(isset($_POST['calculate'])) { //checks if the form has been submitted and if the 'calculate' button has been clicked. It uses the isset() function to check if the 'calculate' button has been set in the $_POST array, which contains data submitted via the HTTP POST method.
            if(isset($_POST['data']) && !empty($_POST['data'])) { //checks if the 'data' field is set in the $_POST array and if it is not empty. It ensures that the user has selected at least one data type from the dropdown list.
                $scores = array( //initializes an associative array $scores where the keys are the data types ('password', 'username', 'address') and the values are their corresponding scores. The score for 'Select a type' is set to 0 as a default option.
				    'Select a type' => 0,
                    'Name' => 3,
                    'Last Name' => 3,	
                    'Username' => 7,
                    'Password' => 10,
					'Occupation' => 4,
					'Office' => 4,
					'Phone Number' => 7,
                    'Home Phone Number' => 7,
                    'National ID' => 9,
					'Supervisor of Employee' => 5,
					'Department' => 4
                    
                );

                $totalScore = 0; //initializes a variable $totalScore to store the total score of the selected data types.
				$totalCount = 0; //initializes a variable $totalCount to store the count of selected data types.
                foreach($_POST['data'] as $dataType) { //starts a loop that iterates over each selected data type submitted via the form. It iterates through the $_POST['data'] array, assigning each value to the variable $dataType.
                        echo $dataType . "<br>";
						$totalScore += $scores[$dataType]; //adds the score corresponding to the current data type to the $totalScore. It accesses the score for the current data type from the $scores array using $dataType as the key.
						$totalCount++; //increments the $totalCount variable for each selected data type, counting the total number of selected data types.
                    
                }

                $averageScore = $totalScore / $totalCount; //calculates the average score by dividing the total score ($totalScore) by the total count of selected data types ($totalCount).
				$averageScore *= 10;
                echo "Average Score: " . $averageScore . "%"; //outputs the calculated average score to the webpage.
				
            } 
        }
        ?>
