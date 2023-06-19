<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script>
        var sambutan = alert("Welcome to our website!")
    </script>
</head>
<body style="background-image:url('https://cdn.discordapp.com/attachments/1095373879268102247/1119904423066468392/background.jpg');">
    <!-- HEADERS -->
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

    <!-- Carousel -->
    <a name="nowPlaying"></a>
    <div class="preview p-0 mt-0 mx-0">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <a name="nowPlaying"></a>
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
            </ol>
            <div class="carousel-inner p-4" role="listbox">
                <div class="carousel-item active">
                    <img src="Pics/La La Land.png" class=" w-100 d-block" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img src="Pics/Palm Springs Movie Poster Glossy High Quality Print Photo Wall Art Andy Samberg Cristin Milioti Size.jpg" class="w-100 d-block" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img src="Pics/Free Vector _ Cinema film festival background with open clapper board design.jpg" class="w-100 d-block" alt="Third slide">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Movie Cards -->
    <div class="CardM mt-0 mx-0 p-0 d-flex justify-content-around">
    <div class="row d-flex justify-content-around w-100">
            <div class="col d-flex flex-column align-items-center justify-content-center m-5 p-4">
                <a class="nav-link text-center" href="order.php">
                    <img src="Pics/La La Land (2016).jpeg" alt="La La Land" class="mb-3 rounded-4">
                    <h3>LA LA LAND</h3>
                    <br>
                    <h3>2D&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;18A</h3>
                </a>
            </div>
            <div class="col d-flex flex-column align-items-center justify-content-center m-5 p-4">
                <a class="nav-link text-center" href="order.php">
                    <img src="Pics/Finding-Nemo.jpg" alt="Finding Nemo" class="mb-3 rounded-4">
                    <h3>FINDING NEMO<h3>
                    <br>
                    <h3>2D&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;G</h3>
                </a>    
            </div>
            <div class="col d-flex flex-column align-items-center justify-content-center m-5 p-4">
                <a class="nav-link text-center" href="order.php">
                    <img src="Pics/Frozen 2 Printable Activity Kit!.jpeg" alt="Frozen 2" class="mb-3 rounded-4">
                    <h3>FROZEN 2</h3>
                    <br>
                    <h3>2D&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;PG-13</h3>
                </a>
            </div>
            <div class="col d-flex flex-column align-items-center justify-content-center m-5 p-4">
                <a class="nav-link text-center" href="order.php">
                    <img src="Pics/Sakura Onigiri.jpg" alt="Sepasang Onigiri" class="mb-3 rounded-4">
                    <h3>SEPASANG ONIGIRI</h3>
                    <br>
                    <h3>2D&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;R</h3>
                </a>    
            </div>
            <div class="col d-flex flex-column align-items-center justify-content-center m-5 p-4">
                <a class="nav-link text-center" href="order.php">
                    <img src="Pics/download.jpg" alt="Sekantung Pukis" class="mb-3 rounded-4">
                    <h3>SEKANTUNG PUKIS</h3>
                    <br>
                    <h3>2D&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;R</h3>
                </a>
            </div>
            <a name="movieList"></a>
        </div>
    </div>

    <!-- Tabel -->
    <h1 class="text-center py-3 text-white">MOVIE LIST</h1>
    <div class="tabel mx-5 mt-5 p-0">
        <div class="table-responsive">
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
            <a name="upComing"></a>
        </div>
    </div>

    <div class="cards mt-0 mx-0 p-0">
        <h1 class="text-center py-3 text-white">COMING SOON</h1><br>
        <div class="container">
            <div class="row">
                <div class="d-flex col justify-content-center m-2 p-0">
                    <img src="Pics/memori.jpg" alt="La La Land" class="img h-100 w-100">
                </div>
                <div class="d-flex col justify-content-center m-2 p-0">
                    <img src="Pics/Walter Mitty.jpg" alt="La La Land" class="img h-100 w-100">
                </div>
                <div class="d-flex col justify-content-center m-2 p-0">
                    <img src="Pics/THE GREATEST SHOWMAN POSTER A4 A3 A2 A1 CINEMA MOVIE LARGE FORMAT  _ eBay.jpg" alt="La La Land" class="img h-100 w-100">
                </div>
                <div class="d-flex col justify-content-center m-2 p-0">
                    <img src="Pics/Maleficent_ Mistress of Evil Movie Review _ Safe for Kids_.jpg" alt="La La Land" class="img h-100 w-100">
                </div>
            </div>
            <div class="row">
                <div class="d-flex col justify-content-center m-2 p-0">
                    <img src="Pics/AVATAR 2 The Way Of Water Trailer.jpg" alt="La La Land" class="img h-100 w-100">
                </div>
                <div class="d-flex col justify-content-center m-2 p-0">
                    <img src="Pics/Parasite.jpg" alt="La La Land" class="img h-100 w-100">
                </div>
                <div class="d-flex col justify-content-center m-2 p-0">
                    <img src="Pics/What I Watched In A Month With The NOW TV Movie Pass - Ellis Tuesday.jpg" alt="La La Land" class="img h-100 w-100">
                </div>
                <div class="d-flex col justify-content-center m-2 p-0">
                    <img src="Pics/Her (2013).jpg" alt="La La Land" class="img h-100 w-100">
                </div>
            </div>
            
        </div>
    </div>

    <!-- ABOUT US -->
    <br><br>
    <a name="aboutUs"></a><br>
    <div class="footer mt-5 mx-10 p-0 bg-orange">
        <br>
        <h1 class="text-center py-3">ABOUT US</h1>

        <div class="text p text-center">
            <p>
                Cinema XXL is present as a pioneer in the world of film screenings that provides the best and exclusive services. We are here with the latest feature films with the most comfortable atmosphere and facilities for you and your loved ones.
                Cinema XXL is committed to consistently providing the best quality entertainment without compromise at affordable prices. In 2006, Cinema XXL introduced m.tix to facilitate online cinema ticket booking, and in 2012, it brought the revolutionary 
                LMAX theater experience. To enhance the service for the audience, Cinema XXL also introduced advanced audio systems with "Dolby Atmos" technology, which is now available in 62 screens.
            </p><br>
            <p>
            Not just a place to watch movies, but also a second home to spend time with family and friends. Cinema XXL provides an unforgettable movie-watching experience for today and tomorrow. For three consecutive years in 2017, 2018, and 2019, Cinema XXL was honored with the 
            "World Branding Award" in Kensington, London as the Best Brand in the Entertainment Cinema (Nation Tier) category. In early 2019, Cinema XXL was also awarded the "Millennials Top Brand Awards" by one of the preferred media for Indonesian millennials, as their top choice for the leading cinema network category in Indonesia. Despite the challenges posed by the pandemic, in 2020, Cinema XXL was recognized as the "Industry Champion of The Year" by the Asia Corporate Excellence and Sustainability (ACES) Awards.
            </p>
        </div>

        <br><br>
        <table class="table-footer no-border text-center center-table">
            <tr>
                <th colspan="5">Contact Us</th>
            </tr>
            <tr>
                <th>
                <a class="nav-link" href="https://instagram.com/bcomplex22?igshid=MzRlODBiNWFlZA==">Instagram</a>
                </th>
                <th>|</th>
                <th>
                <a class="nav-link" href="https://www.youtube.com/@bcomplex22">Youtube</a>
                </th>
                <th>|</th>
                <th>
                <a class="nav-link" href="mailto:trplk3bb@gmail.com">Email</a>
                </th>
            </tr>
        </table>

    </div>


    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>