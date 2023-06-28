<?php

/////////// EXERCICE 1 ////////////

// $months = [
//     'janvier',
//     'février',
//     'mars',
//     'avril',
//     'mai',
//     'juin',
//     'juillet',
//     'aout',
//     'septembre',
//     'octobre',
//     'novembre',
//     'décembre'
// ];

/////////// EXERCICE 2 ////////////

// echo $months[2];

/////////// EXERCICE 3 ////////////

// echo $months[5];

/////////// EXERCICE 4 ////////////

// $months[7] = 'août';

/////////// EXERCICE 5 ////////////

$departements = [
    '02' => 'Aine',
    '59' => 'Nord',
    '60' => 'Oise',
    '62' => 'Pas-de-Calais',
    '80' => 'Somme',
];

/////////// EXERCICE 6 ////////////

// echo $departements['59'];

/////////// EXERCICE 7 ////////////

$departements['51'] = 'Reims';

/////////// EXERCICE 8 ////////////

// foreach ($months as $month) {
//     echo "$month<br/>";
// };

/////////// EXERCICE 9 ////////////

// foreach ($departements as $departement) {
//     echo "$departement<br/>";
// };

/////////// EXERCICE 10 ////////////

foreach ($departements as $departementNumber => $departementName) {
    echo "Le département $departementName a le numéro $departementNumber <br/>";
};

?>