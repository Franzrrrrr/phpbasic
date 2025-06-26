<?php

    $db_server = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "mydb";    
    $conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);

?>
<!-- 
<?php

    class Buku {

        // ini properti, yang mana bisa di pake untuk mewakili, dan nyimpan data
        public $judul;

        // ini ngatur judul dengan membuat nilai di parameter. biar bisa di isi
        public function aturJudul($judulBaru){

            // si judulBaru nampung nilai dari judul
            $this->judul = $judulBaru;
        }

        // ya ini buat mengembalikan nilai judul. karna nilai judulkan bakalan disi sama nilai yang mau di isi di dalam parameter aturJudul
        public function tampilJudul(){
            return $this->judul;
        }

    }

    // ngebuat clas jadi objek biar bisa di akses, kalao objek bisa di akses lebih mudah aja sih
    $buku1 = new Buku();

    // nah ini buat ngisi judul buku1 dengan judul "lalala"
    $buku1->aturJudul('lalalala'); 

    // ini  buat menampilkan
    echo "judul buku nya" . $buku1->tampilJudul();
?> -->
