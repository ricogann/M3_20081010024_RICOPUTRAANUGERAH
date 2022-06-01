<?php

    $yourvote = $_POST['vote'];
    $movies = array
    (
        array("Kaguya-Sama: Love is War Season 3","2022"),
        array("My Hero Academia Season 4","2020"),
        array("Horimiya","2020"),
        array("Tsuki ga Kirei","2018"),
        array("Spy X Family", "2022")
    );

    for($baris = 0; $baris < count($movies); $baris++){
        for($kolom = 0; $kolom < count($movies[$kolom]); $kolom++){
            if($yourvote == $movies[$baris][$kolom]){
                echo '<script>alert("Vote anda Berhasil!!");</script>';
            }
        }
    }

?>