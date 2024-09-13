<?php

$taskList = ["first task", "second task"];
function showallTasks($inputTasks) {
    foreach($inputTasks as $task) {
        echo $task . "\n";
    }
}

function addTask($inputTasks) {
    echo "to be implemented";
}
// $name = readline("Ievadi savu vārdu: ");
// echo "Your name is $name";

// 1.uzdevums
// Uztaisīt do-while ciklu, ko lietotājs 
// var apstādināt ievadot 'N'

// do {
//     $continue = readline("Vai tu vēlies turpināt?\n");
// } while ($continue != "N");

// 2.uzdevums
// Izveidot switch-case konstrukciju,
// lai apstrādātu dažādas lietotāja ievades

do {
    echo "==> Uzdevumu pārvaldnieks:\n\n";
    echo "Apskatīt visus uzdevumus => 1\n";
    echo "Ievadīt jaunu uzdevumu => 2\n";
    echo "Apskatīt vienu uzdevumus => 3\n";

    $choice = readline("Izvēlies darbību: ");

    switch ($choice) {
        case '1':
          viewAllTasks($taskList);
          break;
        case '2':
          addTask();
          break;
        case '3':
          viewTask();
          break;
        default:
          echo "Invalid option!\n\n";
      }


    $continue = readline("Vai tu vēlies turpināt?\n");
} while ($continue != "N");