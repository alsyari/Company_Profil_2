<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>SDI Al-Azhar 33 Tasikmalaya</title>

<style>
*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:Arial, sans-serif;
}

body{
  background:#2f4a73;
  color:#fff;
}

/* NAVBAR */
header{
  display:flex;
  justify-content:space-between;
  align-items:center;
  padding:15px 50px;
  background:#1f3558;
}

.logo{
  display:flex;
  align-items:center;
  gap:10px;
}

.logo img{
  width:40px;
}

nav ul{
  list-style:none;
  display:flex;
}

nav ul li{
  position:relative;
}

nav ul li a{
  display:block;
  padding:10px 15px;
  color:#fff;
  text-decoration:none;
}

nav ul li:hover > a{
  background:#294b7a;
  border-radius:5px;
}

/* DROPDOWN */
nav ul li ul{
  position:absolute;
  top:100%;
  left:0;
  background:#1f3558;
  display:none;
  min-width:180px;
  border-radius:8px;
  overflow:hidden;
}

nav ul li:hover ul{
  display:block;
}

nav ul li ul li a{
  padding:12px 15px;
}

/* BUTTON */
.nav-btn a{
  margin-left:10px;
  padding:8px 18px;
  border-radius:20px;
  text-decoration:none;
}

.btn-outline{
  border:1px solid #fff;
  color:#fff;
}

.btn-login{
  background:#4aa3ff;
  color:#fff;
}

/* HERO */
.hero{
  display:flex;
  align-items:center;
  justify-content:space-between;
  padding:80px 50px;
}

.hero-text h1{
  font-size:48px;
  margin-bottom:10px;
}

.hero-text p{
  margin-bottom:25px;
}

.hero-btn a{
  margin-right:15px;
  padding:12px 22px;
  border-radius:25px;
  text-decoration:none;
  font-weight:bold;
}

.btn-primary{
  background:#4aa3ff;
  color:#fff;
}

.btn-video{
  color:#fff;
}

.hero-img img{
  width:350px;
}
</style>
</head>

<body>

<header>
  <div class="logo">
    <img src="logo.png" alt="Logo">
    <strong>SDI Al-Azhar 33</strong>
  </div>

  <nav>
    <ul>
      <li><a href="#">Beranda</a></li>

      <li>
        <a href="#">Tentang Kami ▾</a>
        <ul>
          <li><a href="#profil">Profil</a></li>
          <li><a href="#visi">Visi & Misi</a></li>
          <li><a href="#guru">Tenaga Pendidik</a></li>
          <li><a href="#berita">Berita</a></li>
        </ul>
      </li>

      <li>
        <a href="#">PMB ▾</a>
        <ul>
          <li><a href="#info-pmb">Info PMB</a></li>
          <li><a href="#daftar">Daftar</a></li>
        </ul>
      </li>

      <li><a href="#">Prestasi</a></li>
      <li><a href="#">Fasilitas</a></li>
    </ul>
  </nav>

  <div class="nav-btn">
    <a href="#daftar" class="btn-outline">Daftar</a>
    <a href="#" class="btn-login">Login</a>
  </div>
</header>

<section class="hero">
  <div class="hero-text">
    <h1>SDI Al-Azhar 33<br>Tasikmalaya</h1>
    <p>"Sekolah Islam Unggulan"</p>

    <div class="hero-btn">
      <a href="#daftar" class="btn-primary">Daftar</a>
      <a href="#" class="btn-video">▶ Tonton Video</a>
    </div>
  </div>

  <div class="hero-img">
    <img src="student.png" alt="Siswa">
  </div>
</section>

</body>
</html>
