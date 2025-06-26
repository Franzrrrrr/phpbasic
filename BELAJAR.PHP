<?php

class Mahasiswa {
    public ?string $nama = null;
    public $jurusan;

    function __construct($namaa, $jurusan)
    {
        $this->nama = $namaa;
        $this->jurusan = $jurusan;
    }

    function gantiNama($namaBaru, $jurusanBaru){
        $this->nama = $namaBaru;
        $this->jurusan = $jurusanBaru;
    }

    function biodata(){
        return "nama: {$this->nama} <br> jurusan: {$this->jurusan}";
    }
}

$alert = '';
$nama = '';
$jurusan = '';
$isi = '';
$m = new Mahasiswa('', 'Teknik Informatika');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];


    if ($nama === '' || $jurusan === '' || $nama === 'jokowi') {
        if ($nama === '') {
            $isi = 'kosong';
        } elseif ($nama === 'jokowi') {
            $isi = 'ada jokowi soalnya tikus jadi raja';
            $m->gantiNama('perusak', 'bangsa');
        }
        $alert = '
    <div role="alert" class="alert alert-error">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
  <span>Error! Gabole ' . $isi . '</span>
    </div>';
    } else {
        $m->gantiNama($nama, $jurusan);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
</head>
<body class="font poppins">
  <div class="card w-1/2 p-2 bg-base-100 card-sm shadow-sm">
  <div class="card-body">
    <?= $alert ?>
    <h2 class="card-title">Small form</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error fuga, commodi alias incidunt fugit expedita dolorum consectetur temporibus, harum distinctio quaerat eius aperiam quibusdam non! Itaque deleniti quaerat saepe quos?</p>
    <form action="BELAJAR.PHP" method="post" class="space-y-4">
        <label for="nama" class="font-semibold text-lg">nama :</label><br>
        <input type="text" name="nama" id="nama" placeholder="Type here" class="input" /><br>
        <label for="jurusan" class="font-semibold text-lg">jurusan :</label><br>
        <input type="text" name="jurusan" id="nama" placeholder="Type here" class="input" />
        <div class="justify-start card-actions mt-2">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    <div class="card w-96 bg-base-100 card-xs shadow-lg mt-4">
  <div class="card-body">
    <p class="font-bold font-poppins"><?= strtoupper($m->biodata()); ?></p>
  </div>
</div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</body>
</html>

<style>
    body {
        display: flex;
        justify-content: center;
        place-items: center;
        font-family: 'Poppins', sans-serif;
    }
</style>
