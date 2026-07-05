# 🚀 Modern Login Page Template

Modern Login System dibuat menggunakan **PHP**, **CSS**, **JavaScript**, dan **MySQL**.

Dirancang dengan tampilan Glassmorphism modern, efek meteor (shooting star), animasi 3D Card, serta kode yang rapi sehingga mudah dipelajari maupun dikembangkan.

---

# 📸 Preview

> Tambahkan thumbnail produk di sini.

Contoh:

```
preview.png
```

---

# ✨ Features

- 🎨 Modern Glassmorphism UI
- 🌠 Shooting Star Animation
- ✨ Spark Effect
- ⚡ Flash Effect
- 💎 Interactive 3D Card
- 📱 Responsive Design
- 🔐 Secure Login System
- 🔒 Password Hashing
- 👤 Session Authentication
- 🚪 Logout System
- 🧹 Clean & Well Commented Code
- 🎯 Beginner Friendly
- ⚙ Easy to Customize

---

# 🛠 Technologies

- PHP
- CSS3
- JavaScript
- MySQL
- XAMPP

---

# 📂 Project Structure

```text
LOGIN PAGE
│
├── asset
│   └── background
│       └── backround.png
│
├── static
│   ├── style.css
│   └── script.js
│
├── config.php
├── create_user.php
├── dashboard.php
├── index.php
├── login.php
├── logout.php
├── login_db.sql
├── README.md
└── LICENSE.txt
```

---

# 📄 File Description

## 📁 asset/

Berisi seluruh asset project.

### background/

Tempat gambar background website.

Contoh:

```
asset/
└── background/
    └── backround.png
```

---

## 📁 static/

Berisi file CSS dan JavaScript.

### style.css

Mengatur seluruh tampilan website seperti:

- Glassmorphism
- Responsive Layout
- Login Card
- Button
- Input
- Shooting Star Style
- Spark Effect
- Flash Effect

---

### script.js

Mengatur seluruh animasi website seperti:

- Meteor Animation
- Spark Effect
- Flash Effect
- Meteor Spawn
- 3D Card Effect
- Mouse Interaction

---

## 📄 config.php

Konfigurasi koneksi database.

Apabila username MySQL, password atau nama database berubah, edit file ini.

---

## 📄 login.php

Memproses proses login.

Fitur:

- Username Validation
- Password Verify
- Session Login
- Redirect Dashboard

---

## 📄 create_user.php

Membuat akun default.

Password otomatis dienkripsi menggunakan Password Hash.

---

## 📄 dashboard.php

Halaman dashboard.

Hanya user yang berhasil login yang dapat membuka halaman ini.

---

## 📄 logout.php

Menghapus Session kemudian mengembalikan user ke halaman Login.

---

## 📄 login_db.sql

Database project.

Import file ini sebelum menjalankan website.

---

# ⚙ Requirements

- PHP 8+
- MySQL
- Apache
- XAMPP

---

# 🚀 Installation

## 1. Install XAMPP

Download dan install XAMPP.

---

## 2. Jalankan XAMPP

Buka XAMPP Control Panel.

Klik:

- Start Apache
- Start MySQL

Pastikan keduanya berwarna hijau.

---

## 3. Copy Project

Copy folder project.

Contoh:

```
LOGIN PAGE
```

Paste ke:

```
C:\xampp\htdocs\
```

Hasilnya menjadi:

```
C:\xampp\htdocs\LOGIN PAGE
```

---

## 4. Import Database

Buka browser.

```
http://localhost/phpmyadmin
```

Klik

```
New
```

Buat database baru dengan nama

```
login_db
```

Kemudian klik database tersebut.

Pilih menu

```
Import
```

Lalu pilih file

```
login_db.sql
```

Klik

```
Go
```

Tunggu hingga proses selesai.

---

## 5. Membuat User

Apabila database belum memiliki akun login.

Buka browser:

```
http://localhost/LOGIN%20PAGE/create_user.php
```

Akan muncul tulisan

```
User berhasil dibuat
```

---

## 6. Jalankan Project

Buka browser.

```
http://localhost/LOGIN%20PAGE/
```

---

# 🔑 Default Login

Username

```
admin
```

Password

```
123456
```

---

# 🎨 Customization

## Mengubah Judul Website

Buka

```
index.php
```

Cari

```html
<title>Login Page</title>
```

Ganti sesuai kebutuhan.

---

## Mengubah Background

Ganti file berikut:

```
asset/background/backround.png
```

---

## Mengubah Ukuran Login Card

Buka

```
static/style.css
```

Cari

```css
.login-container{

    width:400px;

    height:500px;

}
```

---

## Mengubah Border

Cari

```css
border:1px solid rgba(255,255,255,.5);
```

---

## Mengubah Border Radius

Cari

```css
border-radius:17px;
```

---

## Mengubah Warna Button

Cari

```css
button[type="submit"]
```

---

## Mengubah Font

Pada bagian paling atas

```
style.css
```

Ganti

```css
@import url(...)
```

dengan Google Font favorit Anda.

---

## Mengubah Kecepatan Meteor

Buka

```
static/script.js
```

Cari

```javascript
const duration =
    bigMeteor
    ? 1 + Math.random()*0.3
    : 0.35 + Math.random()*0.25;
```

Semakin kecil nilainya

➡ Meteor semakin cepat.

Semakin besar nilainya

➡ Meteor semakin lambat.

---

## Mengubah Frekuensi Meteor

Cari

```javascript
2500 + Math.random()*4500
```

Semakin kecil

➡ Meteor lebih sering muncul.

Semakin besar

➡ Meteor lebih jarang muncul.

---

## Mengubah Warna Meteor

Cari

```javascript
const colors = [
```

Tambahkan warna sesuai kebutuhan.

---

## Menonaktifkan Meteor

Di dalam

```
script.js
```

Comment baris berikut:

```javascript
createMeteor();
```

---

## Menonaktifkan Efek 3D Card

Hapus atau comment bagian

```javascript
// ==========================
// 3D CARD
// ==========================
```

---

# 🔒 Security

Project ini menggunakan:

- Password Hash
- Password Verify
- Prepared Statement
- PHP Session

---

# 💡 Tips

✔ Ganti background agar sesuai branding.

✔ Tambahkan logo perusahaan.

✔ Ganti warna tombol.

✔ Ubah Dashboard sesuai kebutuhan.

✔ Tambahkan fitur Register apabila diperlukan.

---

# ❓ FAQ

## Website tidak bisa dibuka?

Pastikan:

- Apache aktif
- MySQL aktif
- Folder project berada di dalam

```
xampp/htdocs/
```

---

## Login selalu gagal?

Periksa:

- Database sudah diimport
- User sudah dibuat
- Username dan password benar

---

## Background tidak muncul?

Pastikan file berada di:

```
asset/background/backround.png
```

---

## Apakah boleh digunakan untuk project client?

Ya.

Project ini boleh digunakan untuk:

- Personal Project
- Company Project
- Client Project
- Commercial Project

---

# 📜 License

✅ Allowed

- Personal Use
- Commercial Use
- Client Project

❌ Not Allowed

- Menjual ulang source code.
- Mengupload ulang source code ke marketplace lain.
- Mengklaim source code sebagai milik sendiri.

---

# ❤️ Thank You

Terima kasih telah menggunakan produk ini.

Semoga project ini bermanfaat dan membantu pekerjaan Anda.

Happy Coding 🚀