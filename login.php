<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>002PRESENSI</title>
    <!-- link boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- link css pribasi -->
     <link rel="stylesheet" href="login.css">
  </head>
  <!DOCTYPE html>
  <body> 
    <div class="login-container">
      <i class="bi-person-circle"></i>
      <h1 class="container-h1">LOGIN</h1>
        <form action="#" method="POST">
          <label for="username" class="name">Username:</label>
          <input type="text" id="username" name="username" placeholder="Masukkan nama pengguna" required>
          </br>
          <label for="password" class="name">Password:</label>
          <input type="password" id="password" name="password" placeholder="Masukkan kata sandi" required>
          </br>
          <label>
            <input type="checkbox" name="remember"> Ingat saya</label>
            <br>
            <button type="submit" ><a href="beranda.php" style="text-decoration:none; color: black;">MASUK</a></button>
            <p><a href="#">Lupa kata sandi Anda?</a></p>
        </form>
      </div>
    </body>
  </html>
