<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Booking Website</title>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <style>
        .navbar {
            background-color: #F5FFFA !important;
        }
        .navbar-brand {
            font-size: 15px;
            font-weight: bold;
            color: #228B22 !important;
            font-family: 'Merienda', cursive;
        }
        .nav-link {
            color: #000000 !important;
            font-size: 1rem;
            font-family: 'Poppins', sans-serif;
        }
        .nav-link:hover {
            color: #228B22 !important;
        }
        .nav-link.active {
            color: #ffdd57 !important;
        }
        .custom-bg{
            background-color: #279e8c !important;
        }
        .custom-bg:hover{
            background-color: #279e8c !important;
        }
        .availability-form{
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }
        @media screen and (max-width: 575px){
            .availability-form{
            margin-top: 25px;
            padding: 0 35px;
            
        }
        }

    </style>
  </head>
  <body class="bg-light">
  <nav class="navbar navbar-expand-lg navbar-light px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <img src="images/logo.png" alt="Logo" style="height: 50px; width: auto;">
        <a class="navbar-brand me-5" href="index.php">TERRAZA DE NIÑO RESORT</a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link me-2" href="index.php">HOME</a></li>
                <li class="nav-item"><a class="nav-link me-2" href="#rooms">ROOMS</a></li>
                <li class="nav-item"><a class="nav-link me-2" href="more_function.html">FUNCTION HALLS</a></li>
            </ul>
            <ul class="navbar-nav me-lg-3 mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link me-2" href="aboutus.html">ABOUT US</a></li>
                <li class="nav-item"><a class="nav-link me-2" href="contactus.html">CONTACT US</a></li>
            </ul>
            <div class="d-flex">
                <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
                <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#registerModal">Register</button>
            </div>
        </div>
    </div>
</nav>
 <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center"><i class="bi bi-person-circle fs-3 me-2"></i> User Login</h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control shadow-none" name="username">
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control shadow-none" name="password">
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <button type="submit" class="btn btn-dark shadow-none">Login</button>
                            <a href="javascript:void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center"><i class="bi bi-person-lines-fill fs-3 me-2"></i> User Registration</h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">Note: Your details must match with your ID Card that will be required during check-in.</span> 
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 ps-0 mb-3"><label class="form-label">Name</label>
                                <input type="text" class="form-control shadow-none" name="name"></div>
                                <div class="col-md-6 ps-0 mb-3"><label class="form-label">Address</label>
                                <input type="text" class="form-control shadow-none" name="address"></div>
                                <div class="col-md-6 ps-0 mb-3"><label class="form-label">Contact Number</label>
                                <input type="text" class="form-control shadow-none" name="contact_number"></div>
                                <div class="col-md-6 ps-0 mb-3"><label class="form-label">Date of Birth</label>
                                <input type="date" class="form-control shadow-none" name="dob"></div>
                                <div class="col-md-6 ps-0 mb-3"><label class="form-label">Email</label>
                                <input type="email" class="form-control shadow-none" name="email"></div>
                                <div class="col-md-6 ps-0 mb-3"><label class="form-label">Username</label>
                                <input type="text" class="form-control shadow-none" name="username"></div>
                                <div class="col-md-6 ps-0 mb-3"><label class="form-label">Password</label>
                                <input type="password" class="form-control shadow-none" name="password"></div>
                                <div class="col-md-6 ps-0 mb-3"><label class="form-label">Confirm Password</label>
                                <input type="password" class="form-control shadow-none" name="confirm_password"></div>
                                <div class="col-md-6 ps-0 mb-3"><label class="form-label">Picture</label>
                                <input type="file" class="form-control shadow-none" name="picture"></div>
                            </div>
                            <div class="text-center my-1"><button type="submit" class="btn btn-dark shadow-none">Register</button></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
        <h2 id="rooms" class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
        <h5 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">HOTEL ROOMS</h5>

    <div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-6 mt-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                <img src="images/rooms/honeybee.jpg" class="card-img-top" alt="Simple Room Image 1">
                <div class="card-body">
                    <h5>HONEYBEE DELUXE ROOM</h5>
                    <h6 class="mb-4">₱2,350 per night</h6>
                    <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">1 Queen Bed</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathroom</span>
                    </div>
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Mini Refrigerator</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Jacuzzi</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Room Heater</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Free Breakfast</span>
                    </div>
                    <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>
                    </div>
                    <div class="d-flex justify-content-evenly mb-2">
                    <a href="book.html" class="btn btn-sm text-white custom-bg">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 mt-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                <img src="images/rooms/gumamela.jpg" class="card-img-top" alt="Simple Room Image 2">
                <div class="card-body">
                    <h5>GUMAMELA</h5>
                    <h6 class="mb-4">₱1,500 per night</h6>
                    <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">1 Queen Bed</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathroom</span>
                    </div>
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Room Heater</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Free Breakfast</span>
                    </div>
                    <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>
                    </div>
                    <div class="d-flex justify-content-evenly mb-2">
                    <a href="book.html" class="btn btn-sm text-white custom-bg">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 mt-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                <img src="images/rooms/3rooms.jpg" class="card-img-top" alt="Simple Room Image 3">
                <div class="card-body">
                    <h5>BOUGAINVILLEA</h5>
                    <h6 class="mb-4">₱2,250 per night</h6>
                    <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">1 Queen Bed</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">1 Single Bed</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathroom</span>
                    </div>
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Room Heater</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Free Breakfast</span>
                    </div>
                    <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>
                    </div>
                    <div class="d-flex justify-content-evenly mb-2">
                    <a href="book.html" class="btn btn-sm text-white custom-bg">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 mt-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                <img src="images/rooms/gumamela.jpg" class="card-img-top" alt="Simple Room Image 1">
                <div class="card-body">
                    <h5>DAISY</h5>
                    <h6 class="mb-4">₱1,350 per night</h6>
                    <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">1 Queen Bed</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathroom</span>
                    </div>
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Room Heater</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Free Breakfast</span>
                    </div>
                    <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>
                    </div>
                    <div class="d-flex justify-content-evenly mb-2">
                    <a href="book.html" class="btn btn-sm text-white custom-bg">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-6 mt-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                <img src="images/rooms/gumamela.jpg" class="card-img-top" alt="Simple Room Image 1">
                <div class="card-body">
                    <h5>CARNATION</h5>
                    <h6 class="mb-4">₱1,350 per night</h6>
                    <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">1 Queen Bed</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathroom</span>
                    </div>
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Room Heater</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Free Breakfast</span>
                    </div>
                    <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>
                    </div>
                    <div class="d-flex justify-content-evenly mb-2">
                    <a href="book.html" class="btn btn-sm text-white custom-bg">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 mt-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                <img src="images/rooms/3rooms.jpg" class="card-img-top" alt="Simple Room Image 2">
                <div class="card-body">
                    <h5>ADELFA</h5>
                    <h6 class="mb-4">₱1,500 per night</h6>
                    <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">1 Queen Bed</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">1 Single Bed</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathroom</span>
                    </div>
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Room Heater</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Free Breakfast</span>
                    </div>
                    <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>
                    </div>
                    <div class="d-flex justify-content-evenly mb-2">
                    <a href="book.html" class="btn btn-sm text-white custom-bg">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 mt-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                <img src="images/rooms/everlasting.jpg" class="card-img-top" alt="Simple Room Image 3" style="height: 220px; object-fit: cover;">
                <div class="card-body">
                    <h5>EVERLASTING</h5>
                    <h6 class="mb-4">₱2,250 per night</h6>
                    <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">2 Single Bed</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathroom</span>
                    </div>
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Room Heater</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Free Breakfast</span>
                    </div>
                    <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>
                    </div>
                    <div class="d-flex justify-content-evenly mb-2">
                    <a href="book.html" class="btn btn-sm text-white custom-bg">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 mt-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                <img src="images/rooms/jasmin.jpg" class="card-img-top" alt="Simple Room Image 3" style="height: 220px; object-fit: cover;">
                <div class="card-body">
                    <h5>JASMIN</h5>
                    <h6 class="mb-4">₱2,350 per night</h6>
                    <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">2 Single Bed</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">1 Double Deck</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathroom</span>
                    </div>
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Room Heater</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Free Breakfast</span>
                    </div>
                    <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>
                    </div>
                    <div class="d-flex justify-content-evenly mb-2">
                    <a href="book.html" class="btn btn-sm text-white custom-bg">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 mt-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                <img src="images/rooms/lily.jpg" class="card-img-top" alt="Simple Room Image 1" style="height: 210px; object-fit: cover;">
                <div class="card-body">
                    <h5>LILY</h5>
                    <h6 class="mb-4">₱2,350 per night</h6>
                    <div class="features mb-4">
                    <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">2 Double Deck (4 Single Bed)</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathroom</span>
                    </div>
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Room Heater</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Free Breakfast</span>
                    </div>
                    <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>
                    </div>
                    <div class="d-flex justify-content-evenly mb-2">
                    <a href="book.html" class="btn btn-sm text-white custom-bg">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 mt-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                <img src="images/rooms/LUTOS.jpg" class="card-img-top" alt="Simple Room Image 1" style="height: 210px; object-fit: cover;">
                <div class="card-body">
                    <h5>LOTUS</h5>
                    <h6 class="mb-4">₱2,350 per night</h6>
                    <div class="features mb-4">
                    <h6 class="mb-1">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">1 Queen Bed</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathroom</span>
                    </div>
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Room Heater</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Free Breakfast</span>
                    </div>
                    <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>
                    </div>
                    <div class="d-flex justify-content-evenly mb-2">
                    <a href="book.html" class="btn btn-sm text-white custom-bg">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
<div class="col-lg-3 col-md-4 col-6 mt-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                <img src="images/rooms/SUNFLOWER.jpg" class="card-img-top" alt="Simple Room Image 3" style="height: 210px; object-fit: cover;">
                <div class="card-body">
                    <h5>SUNFLOWER</h5>
                    <h6 class="mb-4">₱2,250 per night</h6>
                    <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">1 Queen Bed</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">1 Single Bed</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathroom</span>
                    </div>
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Room Heater</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Free Breakfast</span>
                    </div>
                    <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>
                    </div>
                    <div class="d-flex justify-content-evenly mb-2">
                    <a href="book.html" class="btn btn-sm text-white custom-bg">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 mt-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                <img src="images/rooms/TULIPS.jpg" class="card-img-top" alt="Simple Room Image 2">
                <div class="card-body">
                    <h5>TULIPS</h5>
                    <h6 class="mb-4">₱1,500 per night</h6>
                    <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">1 Queen Bed</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathroom</span>
                    </div>
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Room Heater</span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">Free Breakfast</span>
                    </div>
                    <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>
                    </div>
                    <div class="d-flex justify-content-evenly mb-2">
                    <a href="book.html" class="btn btn-sm text-white custom-bg">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<h5 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">DORMITORY ROOMS</h5>

<div class="container">
<div class="row">
    <div class="col-lg-3 col-md-4 col-6 mt-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
            <img src="images/rooms/sing.jpg" class="card-img-top" alt="Simple Room Image 1">
            <div class="card-body">
                <h5>SILANG</h5>
                <h6 class="mb-4">₱2,350 per night</h6>
                <div class="features mb-4">
                    <h6 class="mb-1">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">8 Single Bed</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">3 Bathroom (2 Comfort Room & 1 Shower Room)</span>
                </div>
                <div class="facilities mb-4">
                    <h6 class="mb-1">Facilities</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Room Heater</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Free Breakfast</span>
                </div>
                <div class="rating mb-4">
                    <h6 class="mb-1">Rating</h6>
                    <span class="badge rounded-pill bg-light">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </span>
                </div>
                <div class="d-flex justify-content-evenly mb-2">
                <a href="book.html" class="btn btn-sm text-white custom-bg">Book Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-6 mt-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
            <img src="images/rooms/flordeluna.jpg" class="card-img-top" alt="Simple Room Image 2">
            <div class="card-body">
                <h5>FLOR DE LUNA</h5>
                <h6 class="mb-4">₱1,500 per night</h6>
                <div class="features mb-4">
                    <h6 class="mb-1">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">2 Double Deck (3 Single Bed & 1 Queen Bed)</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathroom</span>
                </div>
                <div class="facilities mb-4">
                    <h6 class="mb-1">Facilities</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Room Heater</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Free Breakfast</span>
                </div>
                <div class="rating mb-4">
                    <h6 class="mb-1">Rating</h6>
                    <span class="badge rounded-pill bg-light">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </span>
                </div>
                <div class="d-flex justify-content-evenly mb-2">
                <a href="book.html" class="btn btn-sm text-white custom-bg">Book Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-6 mt-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
            <img src="images/rooms/camia.jpg" class="card-img-top" alt="Simple Room Image 3">
            <div class="card-body">
                <h5>CAMIA</h5>
                <h6 class="mb-4">₱5,250 per night</h6>
                <div class="features mb-4">
                    <h6 class="mb-1">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">6 Double Deck(12 Single Bed)</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">3 Bathroom (2 Comfort Room & 1 Shower Room)</span>
                </div>
                <div class="facilities mb-4">
                    <h6 class="mb-1">Facilities</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Room Heater</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Free Breakfast</span>
                </div>
                <div class="rating mb-4">
                    <h6 class="mb-1">Rating</h6>
                    <span class="badge rounded-pill bg-light">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </span>
                </div>
                <div class="d-flex justify-content-evenly mb-2">
                <a href="book.html" class="btn btn-sm text-white custom-bg">Book Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-6 mt-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
            <img src="images/rooms/DAMA.jpg" class="card-img-top" alt="Simple Room Image 1">
            <div class="card-body">
                <h5>DAMA DE NOCHE</h5>
                <h6 class="mb-4">₱6,350 per night</h6>
                <div class="features mb-4">
                    <h6 class="mb-1">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">8 Double Deck (16 Single Bed)</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">3 Bathroom (2 Comfort Room & 1 Shower Room)</span>
                </div>
                <div class="facilities mb-4">
                    <h6 class="mb-1">Facilities</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Room Heater</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Free Breakfast</span>
                </div>
                <div class="rating mb-4">
                    <h6 class="mb-1">Rating</h6>
                    <span class="badge rounded-pill bg-light">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </span>
                </div>
                <div class="d-flex justify-content-evenly mb-2">
                <a href="book.html" class="btn btn-sm text-white custom-bg">Book Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="container">
<div class="row">
    <div class="col-lg-3 col-md-4 col-6 mt-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
            <img src="images/rooms/kalachuchi.jpg" class="card-img-top" alt="Simple Room Image 1">
            <div class="card-body">
                <h5>KALACHUCHI</h5>
                <h6 class="mb-4">₱5,350 per night</h6>
                <div class="features mb-4">
                    <h6 class="mb-1">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">8 Double Deck (16 Single Bed)</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">3 Bathroom (2 Comfort Room & 1 Shower Room)</span>
                </div>
                <div class="facilities mb-4">
                    <h6 class="mb-1">Facilities</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Room Heater</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Free Breakfast</span>
                </div>
                <div class="rating mb-4">
                    <h6 class="mb-1">Rating</h6>
                    <span class="badge rounded-pill bg-light">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </span>
                </div>
                <div class="d-flex justify-content-evenly mb-2">
                <a href="book.html" class="btn btn-sm text-white custom-bg">Book Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-6 mt-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
            <img src="images/rooms/ilang.jpg" class="card-img-top" alt="Simple Room Image 2">
            <div class="card-body">
                <h5>ILANG-ILANG</h5>
                <h6 class="mb-4">₱6,500 per night</h6>
                <div class="features mb-4">
                    <h6 class="mb-1">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">9 Double Deck (18 Single Bed)</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">3 Bathroom (2 Comfort Room & 1 Shower Room)</span>
                </div>
                <div class="facilities mb-4">
                    <h6 class="mb-1">Facilities</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Room Heater</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Free Breakfast</span>
                </div>
                <div class="rating mb-4">
                    <h6 class="mb-1">Rating</h6>
                    <span class="badge rounded-pill bg-light">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </span>
                </div>
                <div class="d-flex justify-content-evenly mb-2">
                <a href="book.html" class="btn btn-sm text-white custom-bg">Book Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-6 mt-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
            <img src="images/rooms/catleya.jpg" class="card-img-top" alt="Simple Room Image 3">
            <div class="card-body">
                <h5>CATLEYA</h5>
                <h6 class="mb-4">₱5,250 per night</h6>
                <div class="features mb-4">
                    <h6 class="mb-1">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">3 Double Deck (6 Single Bed)</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">2 Single Bed</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathroom</span>
                </div>
                <div class="facilities mb-4">
                    <h6 class="mb-1">Facilities</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Room Heater</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Free Breakfast</span>
                </div>
                <div class="rating mb-4">
                    <h6 class="mb-1">Rating</h6>
                    <span class="badge rounded-pill bg-light">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </span>
                </div>
                <div class="d-flex justify-content-evenly mb-2">
                <a href="book.html" class="btn btn-sm text-white custom-bg">Book Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-6 mt-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
            <img src="images/rooms/SAM.jpg" class="card-img-top" alt="Simple Room Image 3" style="height: 220px; object-fit: cover;">
            <div class="card-body">
                <h5>SAMPAGUITA</h5>
                <h6 class="mb-4">₱6,250 per night</h6>
                <div class="features mb-4">
                    <h6 class="mb-1">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">5 Triple Deck (15 Single Bed)</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">3 Bathroom (2 Comfort Room & 1 Shower Room)</span>
                </div>
                <div class="facilities mb-4">
                    <h6 class="mb-1">Facilities</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Room Heater</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Free Breakfast</span>
                </div>
                <div class="rating mb-4">
                    <h6 class="mb-1">Rating</h6>
                    <span class="badge rounded-pill bg-light">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </span>
                </div>
                <div class="d-flex justify-content-evenly mb-2">
                <a href="book.html" class="btn btn-sm text-white custom-bg">Book Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-6 mt-3 ">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
            <img src="images/rooms/rosal.jpg" class="card-img-top" alt="Simple Room Image 1">
            <div class="card-body">
                <h5>ROSAL</h5>
                <h6 class="mb-4">₱6,350 per night</h6>
                <div class="features mb-4">
                    <h6 class="mb-1">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">5 Triple Deck (15 Single Bed)</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">3 Bathroom (2 Comfort Room & 1 Shower Room)</span>
                </div>
                <div class="facilities mb-4">
                    <h6 class="mb-1">Facilities</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Room Heater</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Free Breakfast</span>
                </div>
                <div class="rating mb-4">
                    <h6 class="mb-1">Rating</h6>
                    <span class="badge rounded-pill bg-light">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </span>
                </div>
                <div class="d-flex justify-content-evenly mb-2">
                <a href="book.html" class="btn btn-sm text-white custom-bg">Book Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-6 mt-3 ">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
            <img src="images/rooms/ASTRO.jpg" class="card-img-top" alt="Simple Room Image 1">
            <div class="card-body">
                <h5>ALSTROEMERIA</h5>
                <h6 class="mb-4">₱7,350 per night</h6>
                <div class="features mb-4">
                    <h6 class="mb-1">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">9 Double Deck (18 Single Bed)</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">3 Bathroom (2 Comfort Room & 1 Shower Room)</span>
                </div>
                <div class="facilities mb-4">
                    <h6 class="mb-1">Facilities</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Room Heater</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Free Breakfast</span>
                </div>
                <div class="rating mb-4">
                    <h6 class="mb-1">Rating</h6>
                    <span class="badge rounded-pill bg-light">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </span>
                </div>
                <div class="d-flex justify-content-evenly mb-2">
                <a href="book.html" class="btn btn-sm text-white custom-bg">Book Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-6 mt-3 ">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
            <img src="images/rooms/ROSE.jpg" class="card-img-top" alt="Simple Room Image 1">
            <div class="card-body">
                <h5>ROSE</h5>
                <h6 class="mb-4">₱6,350 per night</h6>
                <div class="features mb-4">
                    <h6 class="mb-1">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">5 Triple Deck (15 Single Bed)</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">3 Bathroom (2 Comfort Room & 1 Shower Room)</span>
                </div>
                <div class="facilities mb-4">
                    <h6 class="mb-1">Facilities</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Room Heater</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Free Breakfast</span>
                </div>
                <div class="rating mb-4">
                    <h6 class="mb-1">Rating</h6>
                    <span class="badge rounded-pill bg-light">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </span>
                </div>
                <div class="d-flex justify-content-evenly mb-2">
                <a href="book.html" class="btn btn-sm text-white custom-bg">Book Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-6 mt-3 ">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
            <img src="images/rooms/CACTUS.jpg" class="card-img-top" alt="Simple Room Image 1">
            <div class="card-body">
                <h5>CACTUS</h5>
                <h6 class="mb-4">₱5,350 per night</h6>
                <div class="features mb-4">
                    <h6 class="mb-1">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">6 Double Deck (16 Single Bed)</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">3 Bathroom (2 Comfort Room & 1 Shower Room)</span>
                </div>
                <div class="facilities mb-4">
                    <h6 class="mb-1">Facilities</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Room Heater</span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">Free Breakfast</span>
                </div>
                <div class="rating mb-4">
                    <h6 class="mb-1">Rating</h6>
                    <span class="badge rounded-pill bg-light">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </span>
                </div>
                <div class="d-flex justify-content-evenly mb-2">
                <a href="book.html" class="btn btn-sm text-white custom-bg">Book Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
        <footer class="bg-dark text-light py-4 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-3">
                <h5 class="text-uppercase fw-bold">About Us</h5>
                <p class="text-muted">We are committed to providing excellent service. Get in touch for any assistance you may need.</p>
            </div>
            <div class="col-md-4 mb-3">
                <h5 class="text-uppercase fw-bold">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#home" class="text-light text-decoration-none">Home</a></li>
                    <li><a href="#services" class="text-light text-decoration-none">Services</a></li>
                    <li><a href="#contact" class="text-light text-decoration-none">Contact Us</a></li>
                    <li><a href="#about" class="text-light text-decoration-none">About</a></li>
                </ul>
            </div>
            <div class="col-md-4 mb-3">
                <h5 class="text-uppercase fw-bold">Follow Us</h5>
                <a href="#" class="text-light me-3"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-light me-3"><i class="bi bi-twitter"></i></a>
                <a href="#" class="text-light me-3"><i class="bi bi-instagram"></i></a>
                <a href="#" class="text-light"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
        <div class="text-center mt-4">
            <p class="mb-0">&copy; 2024 TERRAZA DE NIÑO RESORT. All Rights Reserved.</p>
        </div>
    </div>
</footer>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  </body>
</html>