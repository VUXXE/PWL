# 🐘 PWL - Praktikum Pemrograman Web Lanjut

[![Language](https://img.shields.io/badge/Language-PHP-777BB4?style=flat-square&logo=php&logoColor=white)](https://www.php.net/)
[![Environment](https://img.shields.io/badge/Environment-XAMPP-FB703F?style=flat-square&logo=xampp&logoColor=white)](https://www.apachefriends.org/)
[![Database](https://img.shields.io/badge/Database-MySQL-4479A1?style=flat-square&logo=mysql&logoColor=white)](https://www.mysql.com/)

Repositori ini didedikasikan untuk mendokumentasikan perjalanan belajar dalam mata kuliah **Pemrograman Web Lanjut**. Di sini terdapat berbagai latihan (Latihan), tugas (Tugas), dan eksplorasi fitur-fitur PHP mulai dari dasar hingga tingkat lanjut.

---

## 📂 Struktur Proyek

Berikut adalah ringkasan materi berdasarkan kode praktikum yang tersedia:

- **[P2](./P2/)** - Persiapan dan Pengenalan Dasar PHP.
- **[P3](./P3/)** - Dasar PHP & Operator.
  - _Highlights:_ Penerapan operator (Aritmatika, Logika, Perbandingan, Bitwise) dan Pengenalan Form Sederhana.
- **[P4](./P4/)** - Struktur Kontrol & Perulangan.
  - _Highlights:_ Percabangan (`if-else`, `switch-case`), Perulangan (`for`), dan studi kasus Program Penilaian Mahasiswa.
- **[P5](./P5/)** - Pengenalan Superglobal `$_GET`.
  - _Highlights:_ Pemrosesan form URL parameter menggunakan method GET.
- **[P6](./P6/)** - Penanganan Form Request POST Lanjutan.
  - _Project:_ [Biodata Dinamis](./P6/Tugas/) - Form input dengan sanitasi `htmlspecialchars`, serta simulasi login & tiket bioskop dengan styling CSS.
- **[P7](./P7/)** - Pemrograman Modular & Fungsi.
  - _Highlights:_ Penerapan fungsi (Parameter & Return Value) pada studi kasus nyata seperti Perhitungan Determinan Matriks & KHS.
  - _Kuis:_ [Form Gerakan (Upin)](./P7/KUIS/KuisForm.php) - Implementasi perulangan `for` pada pengolahan form POST dengan layout 2-container.

---

## 🛠️ Stack Teknologi

| Komponen     | Teknologi                               |
| :----------- | :-------------------------------------- |
| **Backend**  | PHP 8.x                                 |
| **Database** | MySQL / MariaDB                         |
| **Server**   | Apache (XAMPP / Laragon)                |
| **Frontend** | HTML5, CSS3 (Custom Styles), JavaScript |
| **Tools**    | VS Code, PHPMyAdmin                     |

---

## 🚀 Cara Menjalankan Secara Lokal

1.  **Clone Repositori**
    ```bash
    git clone https://github.com/username/PWL.git
    ```
2.  **Pindahkan Folder**
    Pindahkan folder `PWL` ke direktori root server Anda:
    - XAMPP: `C:/xampp/htdocs/`
    - Linux: `/opt/lampp/htdocs/` atau `/var/www/html/`
3.  **Jalankan Apache & MySQL**
    Buka Control Panel XAMPP dan aktifkan modul **Apache** serta **MySQL**.
4.  **Akses via Browser**
    Buka browser dan navigasikan ke:
    `http://localhost/PWL/`

---

## 📝 Catatan Tambahan

Setiap folder `P[n]` merepresentasikan urutan pertemuan praktikum. Pastikan untuk memeriksa file `config.php` di dalam folder tugas jika ada konfigurasi database yang perlu disesuaikan.

---
