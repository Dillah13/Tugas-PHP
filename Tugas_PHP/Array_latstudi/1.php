<?php

    $array = array(
        array(
            'nama' => 'Fadillah',
            'umur' => 21,
            'kelas' => 'Laravel'
        ),
        array(
            'nama' => 'Asep',
            'umur' => 20,
            'kelas' => 'NodeJS'
        ),
        array(
            'nama' => 'Ujang',
            'umur' => 22,
            'kelas' => 'Digital Marketing'
        ),
    );

    foreach ($array as $key => $value){
        echo "Nama : ".$value['nama'].", Umur :".$value['umur'].", Kelas :".$value['kelas'];
        echo "<br>";
    }
    
?>