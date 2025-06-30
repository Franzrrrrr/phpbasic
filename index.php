<?php
include('header.html');
include('database.php');

$sql = mysqli_query($conn, "SELECT * FROM users");
$nomor = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<<<<<<< HEAD
<body>
    <form action="index.php" method="post">
        <label>username:</label><br>
        <input type="text" name="username"><br>
        <label>password:</label><br>
        <input type="password" name="password"><br>
        <label>pesanan</label><br>
        <input type="text" name="pesanan"><br>
        <input type="submit" value="Log in"><br>
=======
<body class="p-6 place justify-items-center">

<form class="mt-8 p-6 bg-gray-200 rounded-md justify-items-center" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
  username: <br>
  <input type="text" name="nama" placeholder="nama" class="border-2 border-gray-200 ring-2 ring-gray-100 rounded-md p-2 placeholder:p-2 mt-1">
  <br>
  age: <br>
  <input type="text" name="age" placeholder="age" class="border-2 border-gray-200 ring-2 ring-gray-100 rounded-md p-2 placeholder:p-2 mt-1">
  <br>
  email: <br>
  <input type="email" name="email" placeholder="email" class="border-2 border-gray-200 ring-2 ring-gray-100 rounded-md p-2 placeholder:p-2 mt-1">
  <br>
  password: <br>
  <input type="password" name="password" placeholder="password" class="border-2 border-gray-200 ring-2 ring-gray-100 rounded-md p-2 placeholder:p-2 mt-1">
  <br>
  <input type="submit" class="p-2 rounded-md bg-blue-300 mt-4   " name="submit" value="Submit">
</form>

<table class="table-auto border-collapse border border-gray-400 w-full mt-4">
    <thead class="bg-gray-200">
      <tr>
        <th class="border border-gray-400 px-4 py-2">No</th>
        <th class="border border-gray-400 px-4 py-2">Nama</th>
        <th class="border border-gray-400 px-4 py-2">Email</th>
        <th class="border border-gray-400 px-4 py-2">Age</th>
      </tr>
    </thead>
    <tbody>
      <?php while($data = mysqli_fetch_assoc($sql)) { ?>
      <tr>
        <td class="border border-gray-400 px-4 py-2"><?php echo $nomor++; ?></td>
        <td class="border border-gray-400 px-4 py-2"><?php echo $data['nama']; ?></td>
        <td class="border border-gray-400 px-4 py-2"><?php echo $data['email']; ?></td>
        <td class="border border-gray-400 px-4 py-2"><?php echo $data['age']; ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
>>>>>>> main

</body>
</html>

<?php

<<<<<<< HEAD
    $name = $_POST['username'];    
    $password = $_POST['password'];    
    $pesanan = $_POST['pesanan'];    
    $name = $_POST['username'];
    $harga = 12000 ;
    $total = $pesanan * $harga ;      

    $profil = 'password     : ' . $password . "<br>". $name ; 



    echo "$profil telah memesan makanan sebanyak $pesanan <br>
    total harga : Rp$total,00"
=======
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama     = filter_input(INPUT_POST, "nama", FILTER_SANITIZE_SPECIAL_CHARS);
    $email    = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $age      = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    if (empty($nama) ||  empty($email) || empty($age) || empty($password)) {
        echo "Please fill in all fields";
    } else {
        $hash = password_hash($password, PASSWORD_DEFAULT);
>>>>>>> main

        $sql = "INSERT INTO users (nama, email, age, password) 
                VALUES ('$nama', '$email', $age, '$hash')";

        if (mysqli_query($conn, $sql)) {
            echo "Sudah register";
        } else {
            echo "Gagal menyimpan: " . mysqli_error($conn);
        }
    }
}

mysqli_close($conn);
?>
