<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="Adminv/dist/css/sheetlogin.css">
    <title>Modern Login Page | AsmrProg</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form>
            <form action="index.php?page=postRegist" method="POST">
                    <h1>Daftar Akun</h1>
                    <input type="text" name="UserID" hidden>
                    <input type="text" name="NamaLengkap" placeholder="Nama Lengkap" required />
                    <input type="text" name="Username" placeholder="Nama Pengguna" required />
                    <input type="email" name="Email" placeholder="Email" required />
                    <input type="text" name="telp" placeholder="No. Telepon" required />
                    <input type="password" name="Password" placeholder="Kata Sandi" required />
                    <input cols="30" rows="5" name="Alamat" placeholder=" Alamat" required></input>
                    <button>Daftar Akun</button>
                </form>
        </div>
        <div class="form-container sign-in">
        <form action="index.php?page=postlogin" method="POST">
                    <h2>Masuk Akun</h2>
                    <input type="text" name="Username" placeholder="Nama Pengguna" required />
                    <input type="password" name="Password" placeholder="Kata Sandi" required />
                    <button>Masuk Akun</button>
                </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Ohh Kamu sudah memiliki akun?</h1>
                    <p>Sudah ada akun ya??? Tekan Tombol ini saja</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Selamat Datang Cendikiawan baru</h1>
                    <p>Gak punya akun yahh??? Daftar dulu ya disini</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="Adminv/dist/js/script.js"></script>
</body>

</html>