<h1 align="center"> Laporan Tugas Akhir<br>Pengembangan Sistem Berorientasi Objek<br>Semester Genap 2021/2022</h1><br><br>
<p align="center"><img src="https://user-images.githubusercontent.com/60166781/119503623-6065e780-bd95-11eb-9824-2015fefbe967.png"></p><br><br>
<h3 align="center"> Kelompok 7 | Paralel 2 </h3>
<h4 align="center"> Abbas Zabier Mohammad (G64180018) </h4>
<h4 align="center"> Luthfi Fachruddin (G64180025) </h4>
<h4 align="center"> M. Aldi Alripa (G64180057) </h4>
<h4 align="center"> Bayu Tri Atmojo (G64180092) </h4><br>

[Deskripsi](#deskripsi) | [User Analysis](#user-analysis) | [Spesifikasi](#spesifikasi) | [Konsep OOP](#konsep-oop) | [Tipe Desain](#tipe-desain) | [Pembahasan](#pembahasan) | [Implementasi](#implementasi) | [Saran](#saran) | [Job Desk](#job-desk)
:---:|:---:|:---:|:---:|:---:|:---:|:---:|:---:|:---:

# Deskripsi
Aplikasi **IPB Borrowbook** yang akan dirancang dalam bentuk aplikasi web dengan tujuan agar mudah diakses oleh siapapun dari platform apapun. Aplikasi ini akan terintegrasi dengan IPB Account dan SSO. Setelah login ke dalam aplikasi web ini, user akan disuguhi halaman utama (homepage) yang berisi 2 menu, yaitu “Ingin Meminjamkan Buku” dan “Ingin Meminjam Buku”.
Jika user memilih menu “Ingin Meminjamkan Buku”, maka user akan diarahkan ke suatu laman yang akan meminta user untuk mengisi beberapa data seperti informasi dan kategori buku yang dipinjamkan, kontak yang bisa dihubungi, kuantitas, serta alamat jelas. Jika user memilih menu “Ingin Meminjam Buku”, user akan diarahkan ke laman yang menampilkan list buku yang bisa dipinjam. Pada laman tersebut juga ada filter kategori dan kotak search untuk memudahkan user mencari buku yang diinginkan. Saat user memilih buku yang diinginkan, maka user akan diarahkan ke laman yang menampilkan detail dari buku tersebut yang informasinya telah diinput sebelumnya oleh user yang meminjamkan buku.

# User Analysis
<p align="center"><img src="https://user-images.githubusercontent.com/60166781/120910039-98c6c900-c6a5-11eb-9c21-e70cc2e926f3.png"></p>

# Spesifikasi
* **Software**
<p align="center"><img src="https://user-images.githubusercontent.com/60166781/121784380-f1ceb980-cbdd-11eb-8bef-bd38910c839a.jpg"></p>

* **Hardware**
<p align="center"><img src="https://user-images.githubusercontent.com/60166781/121784676-6eae6300-cbdf-11eb-84f8-e5ae99e1c5e0.JPG"></p>

* **Tech Stack**
  - Framework
    + bootstrap
    + PHP
    + React JS
        
   - Database
        + PHPMyAdmin
        + Laravel
        + Mysql
        
   - Testing
        + Postman

# Konsep OOP 
* **Abstrak Class**

   - Kelas merupakan deskripsi abstrak informasi dan tingkah laku dari sekumpulan data
   - Kelas dapat diilustrasikan sebagai suatu cetak biru(blueprint) atau prototipe yang digunakan untuk menciptakan objek.
   - Kelas merupakan tipe data bagi objek yang mengenkapsulasi data dan operasi pada data dalam suatu unit tunggal.
   - Kelas mendefinisikan suatu struktur yang terdiri atas data kelas (data field), prosedur atau fungsi (method), dan sifat kelas (property).
   

* **Encapsulation**
    - Istilah enkapsulasi sebenarnya adalah kombinasi data dan fungsionalitas dalam sebuah unit tunggal sebagai bentuk untuk menyembunyikan detail informasi.
    - Proses enkapsulasi memudahkan kita untuk menggunakan sebuah objek dari suatu kelas karena kita tidak perlu mengetahui segala hal secara rinci.
    - Enkapsulasi menekankan pada antarmuka suatu kelas, atau dengan kata lain bagaimana menggunakan objek kelas tertentu.
    ![image](https://user-images.githubusercontent.com/44494446/122142996-b43a8c80-ce7a-11eb-927a-fb2e74233e0c.png)


# Tipe Desain

# Pembahasan
* **Usecase Diagram**
<p align="center"><img src="https://user-images.githubusercontent.com/60166781/121785269-082b4400-cbe3-11eb-85e8-28b3cca19123.jpg"></p>

* **Activity Diagram**
<p align="center"><img src="https://user-images.githubusercontent.com/60166781/121785238-cf8b6a80-cbe2-11eb-9005-70e4cb7977f6.jpg"></p>

* **Class Diagram**
<p align="center"><img src="https://user-images.githubusercontent.com/60166781/121785310-4aed1c00-cbe3-11eb-849d-6d72a1748430.jpg"></p>

* **Entity Relationship Diagram**
<p align="center"><img src="https://user-images.githubusercontent.com/60166781/121792421-a5f03480-cc1e-11eb-9b8d-e8267334b68d.jpg"></p>

* **Arsitektur Sistem**
* **Fungsi Utama**
* **Fungsi CRUD**
  - Create Function
    + Membuat akun user 
    + Membuat pengajuan meminjamkan buku

  - Read Function
    + Melihat status peminjaman buku (buku sedang dipinjam atau tidak)
    + Melihat daftar/detail data buku

  - Update Function
    + Mengubah status data buku
    + Mengubah data profile

  - Delete Function
    + Menghapus pengajuan meminjamkan buku
    + Menghapus akun

# Implementasi
* **Screenshot Sistem**
   - Login
  <p align="center"><img src="https://user-images.githubusercontent.com/60166781/121792868-50b72180-cc24-11eb-87b2-05aecb7057de.JPG"></p>

   - Signup
  <p align="center"><img src="https://user-images.githubusercontent.com/60166781/121792873-64fb1e80-cc24-11eb-9d0c-1c4fa0ad675e.JPG"></p>

   - Homepage
  <p align="center"><img src="https://user-images.githubusercontent.com/60166781/121792889-7c3a0c00-cc24-11eb-8e71-aecbd02ce8e5.JPG"></p>

   - Page Pinjam Buku
  <p align="center"><img src="https://user-images.githubusercontent.com/60166781/121792900-8fe57280-cc24-11eb-94c1-abd8cc6ce96b.JPG"></p>

   - Dashboard
  <p align="center"><img src="https://user-images.githubusercontent.com/60166815/122082029-d5bf5800-ce29-11eb-9524-113178e6dac4.png"></p>
  <p align="center"><img src="https://user-images.githubusercontent.com/60166815/122082085-dfe15680-ce29-11eb-97cd-1960bc0e3144.png"></p>
  
   - Page Form Meminjamkan buku
  <p align="center"><img src="https://user-images.githubusercontent.com/60166815/121996497-ea243600-cdd2-11eb-8f34-72c583c9ef45.png"></p>

* **Link Aplikasi (Jika sudah didevelop)**

# Saran
Aplikasi IPB Borrowbook yang kami buat pada versi awal ini tentu masih jauh dari kesempurnaan, untuk itu diperlukan pengembagan lebih jauh khususnya dalam integritas database dengan perpustakaan IPB dan sosialisasi kepada mahasiswa IPB sehingga aplikasi ini dapat optimal dan memberikan kebermanfaatan yang jauh lebih luas.


# Job Desk
| Nama | Nim | Job |
| ----------- | :---------: | :----------: |
| Abbas Zabier Mohammad | G64180018 | UI Designer & Frontend Developer |
| Luthfi Fachruddin | G64180025 | Frontend Developer |
| M.Aldi Alripa | G64180057 | UI/UX Designer |
| Bayu Tri Atmojo | G64180092 | Project Manajer & Backend Developer |

