Laravel Logo
Build Status Total Downloads Latest Stable Version License

Laravel 11 | E-Learning
Screenshoot
Frontend

image

Dashboard Admin

image

image

Halaman Soal

image

Daftar Raport

image

Skema Tabel dan Relasi
Tabel:

Siswa:

ID siswa (Primary Key)
Nama siswa
Jenis kelamin
Tanggal lahir
Alamat
Jenjang (SMP/SMA)

Mata Pelajaran:

ID mata pelajaran (Primary Key)
Nama mata pelajaran
Deskripsi

Guru:

ID guru (Primary Key)
Nama guru
Mata pelajaran yang diajarkan
Jenjang (SMP/SMA)

Nilai:

ID nilai (Primary Key)
ID siswa (Foreign Key)
ID mata pelajaran (Foreign Key)
Nilai Ulangan Harian
Nilai Ujian Tengah Semester
Nilai Ujian Akhir Semester
Sumber Nilai (e-learning/manual)
Jenjang (SMP/SMA)

Raport:

ID raport (Primary Key)
ID siswa (Foreign Key)
Semester
Tahun ajaran
Rata-rata nilai
Keterangan (naik kelas, tidak naik kelas, dll.)
Jenjang (SMP/SMA)

E-Learning:

ID materi (Primary Key)
ID guru (Foreign Key)
ID mata pelajaran (Foreign Key)
Judul materi
Deskripsi materi
Tautan materi
Jenjang (SMP/SMA)

Soal:

ID soal (Primary Key)
ID guru (Foreign Key)
ID mata pelajaran (Foreign Key)
Jenis Soal (essay/pilihan ganda)
Pertanyaan
Jenjang (SMP/SMA)

Jawaban:

ID jawaban (Primary Key)
ID soal (Foreign Key)
Opsi jawaban
Jenjang (SMP/SMA)

Kelas:

ID kelas (Primary Key)
Nama kelas
Tingkat
Jenjang (SMP/SMA)

Jurusan:

ID jurusan (Primary Key)
Nama jurusan
Jenjang (SMA)

Absensi Siswa:

ID absensi siswa (Primary Key)
ID siswa (Foreign Key)
Tanggal
Kehadiran (hadir/tidak hadir/izin)
Jenjang (SMP/SMA)

Absensi Guru:

ID absensi guru (Primary Key)
ID guru (Foreign Key)
Tanggal
Kehadiran (hadir/tidak hadir/izin)
Jenjang (SMP/SMA)

Relasi:
Setiap Siswa memiliki banyak Nilai (one-to-many dengan Siswa sebagai entitas utama).
Setiap Mata Pelajaran memiliki banyak Nilai (one-to-many dengan Mata Pelajaran sebagai entitas utama).
Setiap Siswa memiliki satu Raport untuk setiap Semester (one-to-many dengan Siswa sebagai entitas utama).
Setiap Raport berhubungan dengan banyak Nilai (one-to-many dengan Raport sebagai entitas utama).
Setiap Guru dapat membuat banyak E-Learning (one-to-many dengan Guru sebagai entitas utama).
Setiap Mata Pelajaran memiliki banyak E-Learning (one-to-many dengan Mata Pelajaran sebagai entitas utama).
Setiap Guru dapat membuat banyak Soal (one-to-many dengan Guru sebagai entitas utama).
Setiap Mata Pelajaran memiliki banyak Soal (one-to-many dengan Mata Pelajaran sebagai entitas utama).
Setiap Soal memiliki banyak Jawaban (one-to-many dengan Soal sebagai entitas utama).
Setiap Kelas memiliki banyak Siswa (one-to-many dengan Kelas sebagai entitas utama).
Setiap Jurusan memiliki banyak Siswa (one-to-many dengan Jurusan sebagai entitas utama).
Setiap Siswa memiliki banyak Absensi Siswa (one-to-many dengan Siswa sebagai entitas utama).
Setiap Guru memiliki banyak Absensi Guru (one-to-many dengan Guru sebagai entitas utama).
Urutan Membuat Migration

1. Jenjang
2. Jurusan
3. Mata Pelajaran
4. Kelas
5. Guru
6. E-Learning
7. Soal
8. Jawaban
9. Siswa
10. Nilai
11. Raport
12. Absensi Guru
13. Absensi Siswa
    Install ation & Configuration
    composer install
    composer update
    npm install
    npm run dev
    npm run build
    composer require spatie/laravel-permission
    php artisan migrate --seed
    About Laravel
    Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

Simple, fast routing engine.
Powerful dependency injection container.
Multiple back-ends for session and cache storage.
Expressive, intuitive database ORM.
Database agnostic schema migrations.
Robust background job processing.
Real-time event broadcasting.
Laravel is accessible, powerful, and provides tools required for large, robust applications.

Learning Laravel
Laravel has the most extensive and thorough documentation and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the Laravel Bootcamp, where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, Laracasts can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

Laravel Sponsors
We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel Partners program.

Premium Partners
Vehikl
Tighten Co.
WebReinvent
Kirschbaum Development Group
64 Robots
Curotec
Cyber-Duck
DevSquad
Jump24
Redberry
Active Logic
byte5
OP.GG
Contributing
Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the Laravel documentation.

Code of Conduct
In order to ensure that the Laravel community is welcoming to all, please review and abide by the Code of Conduct.

Security Vulnerabilities
If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via taylor@laravel.com. All security vulnerabilities will be promptly addressed.

License
The Laravel framework is open-sourced software licensed under the MIT license.
