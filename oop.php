<?php

class Printer {
    public function printHitamPutih(){
        echo "Cetak dokumen hitam putih</br>";
    }

    public function printBerwarna(){
        echo "Cetak dokumen berwarna";
    }
}

function cetakSemua($alat){
    $alat->printHitamPutih();
    $alat->printBerwarna();
}

$printer = new Printer();
cetakSemua($printer);