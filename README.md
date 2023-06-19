# UASPPW1_22-SV-493981-20767_CINEMA-XXL
Nama : Ashila Najla Salsabilla WD

Website CINEMA XXL dibuat untuk pembelian tiket menonton film di bioskop CINEMA XXL. Selain sebagai website untuk pembelian tiket, website ini juga berguna untuk memberikan informasi mengenai penayangan film yang tersedia dan yang akan datang.
Pembuatan website ini juga bertujuan sebagai penanganan untuk panjangnya antrian pada loket tiket di bioskop. Dengan website ini, pengguna tidak perlu bingung untuk menonton film apa. Karena pengguna dapat melihat terlebih dahulu, film apa yang tersedia di website ini.
Tampilan dibuat menggunakan warna gelap yang identik dengan interior bioskop yang redup.

Alur dari website ini adalah dengan mengakses file login.php terlebih dahulu. Kemudian pengguna diharuskan untuk mengisi username dan password. Apabila tidak terisi dengan benar, maka akan muncul alert mengenai ketidaksesuaian pengisian.
Selanjutnya apabila sudah mengisi username dan password dengan benar, tombol submit akan menuju ke halaman index.php yang berisi konten dari CINEMA XXL. Pada bagian paling atas terdapat nav-bar yang menempel ke atas, walau halaman digulirkan.
Pada bagian navbar tersebut, terdapat ikon menu pada bagian kiri. Menu tersebut adalah dropdown menu yang akan menampilkan beberapa pilihan. Pilihan pilihan tersebut akan menuju ke bagian yang sesuai dengan namanya.

Selanjutnya terdapat carousel yang akan menampilkan banner banner film. Kemudian terdapat film card yang apabila di-klik akan menuju ke halaman order.php. Setelah bagian film card, terdapat tabel yang menampilkan informasi film-film yang ada dan yang akan hadir.
Kemudian pada bagian selanjutnya adalah tampilan poster-poster film yang akan datang. Dan yang terakhir adalah bagian footer yang juga bagian "about us". Pada bagian ini terdapat penjelasan mengenai CINEMA XXL dan kontak yang dapat dihubungi oleh pengguna.



##
DESAIN RAPI
##

Desain website ini dibuat seminimalis mungkin. Didominasi dengan warna hitam dan kuning keemasan, untuk memberikan kesan elegan.
Pada bagian background website, diberikan background yang tak terlalu mencolok agar tampilan tidak terlalu sepi, namun tidak pula terlalu ramai.

```ruby
body{
    background-image: url("/Pics/background.jpg");
    background-color: rgb(0, 0, 0);
    background-size: 100%;
    background-attachment: fixed;
    background-blend-mode: screen;
    height: fit-content;
    position: relative;
}

.headers .d-flex{
    background-color: #A58A00;
}
```
###
file login.php
###
![image](https://github.com/godzhilla/UASPPW1_22-SV-493981-20767_CINEMA-XXL/assets/126530924/085c8a12-e09a-49b5-a10c-31703abfb741)

###
file index.php
###
![screencapture-localhost-Project-PPW1-index-php-2023-06-19-23_53_46](https://github.com/godzhilla/UASPPW1_22-SV-493981-20767_CINEMA-XXL/assets/126530924/8db5c55e-9322-45fd-9823-5e6033df8b54)

Berikut pula tampilan headers pada website ini
```ruby
<div class="headers sticky-top">
        <div class="d-flex container-fluid px-0">
            <div class="dropdown">
                <button class="btn position-relative top-50 start-50 translate-middle border-0 py-0" type="button" data-bs-toggle="dropdown"><img src="Pics/Three Stripes.png"></button>
                <ul class=" dropdown-menu py-0">
                    <li><a href="#nowPlaying" class="dropdown-item ps-4 py-3 fw-bold">Now Playing</a></li>
                    <li><a href="#movieList" class="dropdown-item ps-4 py-3 fw-bold">Movie List</a></li>
                    <li><a href="#upComing" class="dropdown-item ps-4 py-3 fw-bold">Up Coming</a></li>
                    <li><a href="#aboutUs" class="dropdown-item ps-4 py-3 fw-bold">About Us</a></li>
                </ul>
            </div>
            <h1 class="text-center py-3">CINEMA XXL</h1>
        </div>
    </div>
```
![image](https://github.com/godzhilla/UASPPW1_22-SV-493981-20767_CINEMA-XXL/assets/126530924/d91b978e-6fe6-49ef-b965-e1c79ccba3fa)



##
WEBSITE RESPONSIVE
##

Website ini sudah responsive, dibuktikan dengan penyesuaian isi konten dalam website yang akan menyesuaikan ukuran jendela browser.
Sebagai contoh adalah bagian judul website "CINEMA XXL" yang akan menyesuaikan ukurannya sesuai ukuran dari jendela website.

![image](https://github.com/godzhilla/UASPPW1_22-SV-493981-20767_CINEMA-XXL/assets/126530924/3ecddc6d-e908-4141-acb9-137ffaef5c16)
![image](https://github.com/godzhilla/UASPPW1_22-SV-493981-20767_CINEMA-XXL/assets/126530924/471e7bc4-032b-439a-9672-3b21f059dd42)

```ruby
h1, .h1 {
  font-size: calc(1.375rem + 1.5vw);
}
@media (min-width: 1200px) {
  h1, .h1 {
    font-size: 2.5rem;
  }
}
```

Selain pada bagian tersebut, seluruh isi website juga menerapkan hal yang sama. Yaitu menyesuaikan diri terhadap ukuran jendela browser.

![screencapture-localhost-Project-PPW1-index-php-2023-06-20-01_14_46](https://github.com/godzhilla/UASPPW1_22-SV-493981-20767_CINEMA-XXL/assets/126530924/f829528d-b994-418e-8041-d0afa4b8b61f)


##
DIRECT FEEDBACK KE PENGGUNA WEBSITE
##

Direct feedback dapat dibuat menggunakan banyak cara, salah satunya dengan menggunakan javascript. Seperti yang telah saya tambahkan pada halaman login di bawah ini:

```ruby
<form action="index.php" method="POST" onsubmit="return validateForm()">
                <input type="text" name="" id="uname" placeholder="Username" class="m-3 p-3 py-1 rounded-4 bg-black">
                <br>
                <input type="password" name="" id="pass" placeholder="Password" class="mx-3 mt-3 p-3 py-1 rounded-4 bg-black">
                <br>
                <a href="lupa.php" class="forgot">Forgot password?</a>
                <br>
                <div class="text-center">
                    <button type="submit" class="mx-3 mt-3 mb-0 p-1 rounded-5 fw-bolder" value="Submit">Submit</button>
                </div>
                <p class="mt-3">Don't have any account?<a href="signup.php"> Sign Up!</a></p>
                
            </form>
            <script>
                function validateForm() {
                    var uname = document.getElementById("uname").value;
                    var pass = document.getElementById("pass").value;
                    
                    if (uname.trim() === "") {
                        alert("You have not entered your username!");
                        return false; // Mencegah pengiriman formulir
                    }
                    
                    if (pass.trim() === "") {
                        alert("You have not entered your password!");
                        return false; // Mencegah pengiriman formulir
                    }
                    
                    return true; // Mengizinkan pengiriman formulir
                }  
            </script>
```

Cara kerja dari kode diatas adalah dengan memaksa pengguna untuk mengisi username dan password pada form yang tampil. Apabila form tidak diisi dengan benar, maka script tersebut akan menghasilkan tampilan sebagai berikut:

![image](https://github.com/godzhilla/UASPPW1_22-SV-493981-20767_CINEMA-XXL/assets/126530924/5d9216d9-7bbb-4e57-8240-3e5be95edcc5)
![image](https://github.com/godzhilla/UASPPW1_22-SV-493981-20767_CINEMA-XXL/assets/126530924/e0eae647-d9f1-43de-b9b4-e98b2efa64f1)



##
KONTEN DINAMIS DARI DATABASE
##

Pengimplementasian database pada sebuah web dapat dilakukan pada berbagai bagian. Salah satunya adalah dengan menampilkan tabel database pada website. Yang saya lakukan adalah membuat koneksi dengan cara sesuai panduan dari modul.
Kemudian saya membuat tabel seperti biasa pada website dengan menambahkan kode PHP. Dimana kode tersebut akan membuat tabel tersebut terisi dengan data yang ada pada database.

###
Kode koneksi pada file conn.php:
###

```ruby
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "bioskop";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "SELECT no, judul, durasi, price, age_rate FROM list";
    $result = mysqli_query($conn, $sql);
?>
```

###
Kode yang digunakan pada file index.php:
###

```ruby
<table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th scope="col" style="width: 5%;">No</th>
                        <th scope="col" style="width: 30%;">Title</th>
                        <th scope="col" style="width: 25%;">Duration</th>
                        <th scope="col" style="width: 25%;">Price</th>
                        <th scope="col" style="width: 15%;">Age Rated</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                        include 'conn.php';
                        $list = mysqli_query($conn, "select * from list");
                        foreach ($list as $value) {
                            echo"
                            <tr>
                                <td>".$value['no']."</td>
                                <td>".$value['judul']."</td>
                                <td>".$value['durasi']."</td>
                                <td>".$value['price']."</td>
                                <td>".$value['age_rate']."</td>
                            </tr>
                            ";
                        }
                    ?>
                   
                </tbody>
            </table>
```

###
Tabel dalam database:
###

![image](https://github.com/godzhilla/UASPPW1_22-SV-493981-20767_CINEMA-XXL/assets/126530924/59602710-1fdc-4831-a5ba-84e22ac15652)

###
Tampilan pada website:
###

![image](https://github.com/godzhilla/UASPPW1_22-SV-493981-20767_CINEMA-XXL/assets/126530924/09b03d21-f984-4c7b-86ef-497674953bbf)




