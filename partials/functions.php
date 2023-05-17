<?php
    function generateCasualPassword($numCharacters){
        
        // Array of letters, numbers and special symbols
        $lowercaseAlphabet = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
        $uppercaseAlphabet = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
        $randNums = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
        $randSymbols = ['&', '%', '£', '$', '^' ,'+', '*', '§', '#', '@', '-', '.', ',', ';', '_', '<', '>', '!', '?', '/', '=', '(', ')', '[', ']', '{', '}'];

        // Array which contains previous arrays concatenated
        $casualArray = array_merge($lowercaseAlphabet, $uppercaseAlphabet, $randNums, $randSymbols);
        
        // Randoming order of characters in the new array
        shuffle($casualArray);
        
        // Estraggo $numCharacters dall'array 
        $randomCharacters = array_slice($casualArray, 0, $numCharacters);

        $randomPassword = implode($randomCharacters);


        echo $randomPassword;
    }


?>