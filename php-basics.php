<?php

echo "This is my first CLI script in PHP";

// 1.uzdevums
// a) Izveido ciklu, lai izvadītu skaitļu no 1-10 <-- increment
// b) Izveido ciklu, lai izvadītu skaitļu no 10-1 <-- decrement

// a)
for ($x = 0; $x <= 10; $x++) {
    echo "Number: $x <br>";
}

// b)
for ($x = 10; $x <= 0; $x--) {
    echo "Number: $x <br>";
}


// 2.uzdevums
// Izveido asociatīvo masīvu, kurā ir dati
// par 3 personām (vārds un vecums)
// Ar cikla palīdzību izvadīt katras personas datus
// sekojošā formaātā: "Vārds: Jānis, Veucums: 19".

$people = [
    'person1' => ['name' => 'janis', 'age' => 18],
    'person1' => ['name' => 'janis', 'age' => 18],
    'person1' => ['name' => 'janis', 'age' => 18]
];

$people = [
    'name' => 'janis', 'age' => 18
];
