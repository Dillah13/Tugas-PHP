<?php

    $array = array(
        array(
            'nama' => 'Fadillah',
        ),
        array(
            'nama' => 'Kusnandar',
        ),
        array(
            'nama' => 'Raden',
        
        ),
        array(
            'nama' => 'Neysa',
        ),

        array(
            'nama' => 'Rahma',
        
        ),
        array(
            'nama' => 'Renata',
        ),
    );

    foreach ($array as $key => $value){
        echo "Nama : ".$value['nama'];
        echo "<br>";
    }
?>