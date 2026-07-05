<!DOCTYPE html>
<html lang="en">
<head>

    <!-- ==========================
         CHARACTER SET
    =========================== -->
    <meta charset="UTF-8">

    <!-- ==========================
         RESPONSIVE
         Jangan dihapus agar tampilan
         tetap responsive di HP
    =========================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ==========================
         UBAH JUDUL WEBSITE DI SINI
    =========================== -->
    <title>Login Page</title>

    <!-- ==========================
         FILE CSS
         Jika ingin mengganti style,
         edit file:
         static/style.css
    =========================== -->
    <link rel="stylesheet" href="static/style.css">

</head>

<body>

    <!-- ==========================
         BACKGROUND
         Ganti gambar di:
         asset/background/backround.png
    =========================== -->
    <div class="background-animation"></div>

    <!-- ==========================
         METEOR EFFECT
         Jangan dihapus jika ingin
         efek bintang jatuh tetap ada.
    =========================== -->
    <div class="meteor-field" id="meteorField"></div>

    <!-- Flash saat meteor besar -->
    <div class="flash" id="flash"></div>

    <!-- ==========================
         LOGIN CARD
    =========================== -->
    <div class="login-container">

        <form class="login-form" action="login.php" method="POST">

            <!-- Judul Login -->
            <h2>Login</h2>

            <!-- ==========================
                 USERNAME
            =========================== -->
            <div class="input-group">

                <input
                    type="text"
                    name="username"
                    id="username"
                    required
                >

                <label for="username">
                    Username
                </label>

            </div>

            <!-- ==========================
                 PASSWORD
            =========================== -->
            <div class="input-group">

                <input
                    type="password"
                    name="password"
                    id="password"
                    required
                >

                <label for="password">
                    Password
                </label>

            </div>

            <!-- ==========================
                 TOMBOL LOGIN
                 Ganti tulisan Login di sini
            =========================== -->
            <button type="submit">
                Login
            </button>

            <!-- ==========================
                 SOCIAL LOGIN
                 Hapus bagian ini jika tidak
                 ingin menampilkan ikon sosial.
            =========================== -->
            <div class="social-login">

                <p>or login with</p>

                <div class="social-icons">

                    <a href="#" class="icon facebook"></a>

                    <a href="#" class="icon twitter"></a>

                    <a href="#" class="icon google"></a>

                </div>

            </div>
            <p class="daftar">belum punya akun?

        <a href="#">Daftar sekarang</a>
        </p>

        </form>
        
    </div>

    <!-- ==========================
         FILE JAVASCRIPT

         Semua animasi berada di:
         static/script.js

         Yang dapat diedit:
         ✔ Meteor
         ✔ Kecepatan meteor
         ✔ Warna meteor
         ✔ Efek 3D
         ✔ Efek Flash
    =========================== -->
    <script src="static/script.js"></script>

</body>
</html>