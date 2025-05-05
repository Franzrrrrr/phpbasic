<?php
include('header.html');
include('database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-6">

<form class="mt-8" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
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
  <input type="submit" class="p-2 rounded-sm bg-gray-200 mt-2" name="submit" value="Submit">
</form>

</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama     = filter_input(INPUT_POST, "nama", FILTER_SANITIZE_SPECIAL_CHARS);
    $email    = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $age      = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    if (empty($nama) || empty($email) || empty($age) || empty($password)) {
        echo "Please fill in all fields";
    } else {
        $hash = password_hash($password, PASSWORD_DEFAULT);

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
