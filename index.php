<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Trator</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Raleway:wght@400;500;600;700;800&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   </head>
   <style>
.car-results {
      margin-top: 30px;
      margin-left: 150px;
      display: flex;
      flex-wrap: wrap;
      gap: 25px;
   }

.car-card {
      width: 30%;
      background: #fff;
      padding: 15px;
      border-radius: 12px;
      box-shadow: 0px 4px 12px rgba(0,0,0,0.1);
      transition: 0.3s ease;
      text-align: center;
   }

.car-card:hover {
      transform: scale(1.03);
   }

.car-img {
      width: 100%;
      height: 180px;
      object-fit: contain;
      margin-bottom: 15px;
   }

.rent-btn {
      display: inline-block;
      padding: 10px 20px;
      background: #000;
      color: #fff;
      border-radius: 6px;
      text-decoration: none;
      font-weight: bold;
      margin-top: 10px;
   }

.rent-btn:hover {
      background: #444;
   }

.popup {
   display: none;
   position: fixed;
   z-index: 1000;
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
   background: rgba(0,0,0,0.7);
   justify-content: center;
   align-items: center;
}

.popup-content {
   background: #fff;
   padding: 20px;
   width: 350px;
   border-radius: 10px;
   animation: fade 0.3s;
}

@keyframes fade {
   from {opacity: 0; transform: scale(0.8);}
   to {opacity: 1; transform: scale(1);}
}
.popup-content input,
.popup-content button {
   width: 100%;
   margin-bottom: 12px;
   padding: 10px;
}


.client_img img {
    width: 150px;
    height: 150px;
    object-fit: cover;
    border: 3px solid #fff;
    display: block;
    margin: 0 auto;
}
.carousel-item {
    min-height: 450px; /* sesuaikan sesuai kebutuhan */
}


</style>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand"href="index.html"><img src="images/logo.png"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="services.html">Services</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="gallery.html">Vehicles</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="client.html">Client</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                  </form>
               </div>
            </nav>
         </div>
      </div>
      <!-- header section end -->
      <div class="call_text_main">
         <div class="container">
            <div class="call_taital">
               <div class="call_text"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left_15">Location</span></a></div>
               <div class="call_text"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_15">(+71) 8522369417</span></a></div>
               <div class="call_text"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_15">demo@gmail.com</span></a></div>
            </div>
         </div>
      </div>
      <!-- banner section start --> 
      <div class="banner_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div id="banner_slider" class="carousel slide" data-ride="carousel">
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="banner_taital_main">
                              <h1 class="banner_taital">Car Rent <br><span style="color: #fe5b29;">For You</span></h1>
                              <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority</p>
                              <div class="btn_main">
                                 <div class="contact_bt"><a href="#">Read More</a></div>
                                 <div class="contact_bt active"><a href="#">Contact Us</a></div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="banner_taital_main">
                              <h1 class="banner_taital">Car Rent <br><span style="color: #fe5b29;">For You</span></h1>
                              <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority</p>
                              <div class="btn_main">
                                 <div class="contact_bt"><a href="#">Read More</a></div>
                                 <div class="contact_bt active"><a href="#">Contact Us</a></div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="banner_taital_main">
                              <h1 class="banner_taital">Car Rent <br><span style="color: #fe5b29;">For You</span></h1>
                              <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority</p>
                              <div class="btn_main">
                                 <div class="contact_bt"><a href="#">Read More</a></div>
                                 <div class="contact_bt active"><a href="#">Contact Us</a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#banner_slider" role="button" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                     </a>
                     <a class="carousel-control-next" href="#banner_slider" role="button" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                     </a>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="banner_img"><img src="images/banner-img.png"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- banner section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="about_section_2">
               <div class="row">
                  <div class="col-md-6"> 
                     <div class="image_iman"><img src="images/about-img.png" class="about_img"></div>
                  </div>
                  <div class="col-md-6"> 
                     <div class="about_taital_box">
                        <h1 class="about_taital">About <span style="color: #fe5b29;">Us</span></h1>
                        <p class="about_text">going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined </p>
                        <div class="readmore_btn"><a href="#">Read More</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      <?php
        require_once 'koneksi.php';

        // Ambil dan sanitize input GET
        $brand = $_GET['brand'] ?? ''; //Jika GET brand ada → pakai nilai brand Jika GET brand tidak ada → pakai string kosong
        $type  = $_GET['type'] ?? '';
        $price = $_GET['price'] ?? '';


        // Mempersiapkan query dinamis dengan named params
        $where = [];
        $params = [];

        if ($brand !== '') {
            $where[] = "brand LIKE :brand";
            $params[':brand'] = "%$brand%";
        }
        if ($type !== '') {
            $where[] = "type LIKE :type";
            $params[':type'] = "%$type%";
        }
        // price sebagai maximum price (numeric)
        if ($price !== '' && is_numeric($price)) {
            $where[] = "price <= :price";
            $params[':price'] = (int)$price;
        }

        $sql = "SELECT id, brand, type, price, image FROM carsren";
        if (!empty($where)) {
            $sql .= " WHERE " . implode(" AND ", $where);
        }
        $sql .= " ORDER BY price ASC"; // Default sorting: termurah di atas

        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
        $cars = $stmt->fetchAll();

        // helper untuk escape output
        function e($str) {
            return htmlspecialchars($str, ENT_QUOTES|ENT_SUBSTITUTE, 'UTF-8');
        }
        ?>
        <!-- Search Your Best Cars start -->
        <div class="search_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="search_taital">Search Your Best Cars</h1>
                        <p class="search_text">Using 'Content here, content here', making it look like readable</p>

                        <!-- FORM Search start -->
                        <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <div class="row">

                                <!-- BRAND -->
                                <div class="col-md-3 select-outline">
                                    <select name="brand">
                                        <option value="">Any Brand</option>
                                        <?php
                                        $brands = ['Avanza','Pajero','Toyota Supra','Xenia'];
                                        foreach ($brands as $b) {
                                            $sel = ($brand === $b) ? 'selected' : '';
                                            echo "<option value=\"" . e($b) . "\" $sel>" . e($b) . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>

                                <!-- TYPE -->
                                <div class="col-md-3 select-outline">
                                    <select name="type">
                                        <option value="">Any Type</option>
                                        <?php
                                        $types = ['MPV','SUV','Convertible'];
                                        foreach ($types as $t) {
                                            $sel = ($type === $t) ? 'selected' : '';
                                            echo "<option value=\"" . e($t) . "\" $sel>" . e($t) . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>

                                <!-- PRICE -->
                                <div class="col-md-3 select-outline">
                                    <select name="price">
                                        <option value="">Price</option>
                                        <?php
                                        $prices = [
                                            '200000' => 'Rp200.000',
                                            '250000' => 'Rp250.000',
                                            '500000' => 'Rp500.000',
                                            '1500000' => 'Rp1.500.000'
                                        ];
                                        foreach ($prices as $val => $label) {
                                            $sel = ($price === $val) ? 'selected' : '';
                                            echo "<option value=\"" . e($val) . "\" $sel>" . e($label) . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>

                                <!-- BUTTON -->
                                <div class="col-md-3">
                                    <button class="button1" type="submit">Search Now</button>
                                </div>
                            </div>
                        </form>
                        <!-- FORM Search end -->
                        <!-- Hasil Pencarian -->
                        <?php if ($cars): ?>
                            <div class="car-results" style="margin:30px auto; display:flex; flex-wrap:wrap; gap:25px; justify-content:center;">
                                <?php foreach ($cars as $row): ?>
                                    <div class="car-card" style="width:30%; background:#fff; padding:15px; border-radius:12px; box-shadow:0 4px 12px rgba(0,0,0,0.1); text-align:center;">
                                        <img src="images/<?php echo e($row['image']); ?>" class="car-img" style="width:100%; height:180px; object-fit:contain; margin-bottom:15px;">
                                        <h3><?php echo e($row['brand'] . ' - ' . $row['type']); ?></h3>
                                        <p>Harga: <strong>Rp <?php echo number_format($row['price'],0,',','.'); ?></strong></p>
                                        <a href="rent.php?id=<?php echo e($row['id']); ?>" class="rent-btn" style="display:inline-block; padding:10px 20px; background:#000; color:#fff; border-radius:6px; text-decoration:none; margin-top:10px;">Rent Now</a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php elseif (!empty($_GET)): ?>
                            <p style="text-align:center; margin-top:20px;"><strong>Tidak ada hasil ditemukan</strong></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
       <!-- Search Your Best Cars end -->
      <!-- gallery section start -->
      <div class="gallery_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="gallery_taital">Our best offers</h1>
               </div>
            </div>
            <div class="gallery_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="images/img-1.png"></div>
                        <h3 class="types_text">Mercedes Benz X1</h3>
                          <p class="looking_text">Start per day $4500</p>
                        <div class="read_bt">
                            <a href="#" class="openFormBtn" data-car="Mercedes Benz X1">Book Now</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="images/img-2.png"></div>
                        <h3 class="types_text">Mercedes Benz S class</</h3>
                          <p class="looking_text">Start per day $4500</p>
                        <div class="read_bt">
                            <a href="#" class="openFormBtn" data-car="Mercedes Benz S class">Book Now</a>
                                </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="images/img-3.png"></div>
                        <h3 class="types_text">Mercedes Benz X class</h3>
                          <p class="looking_text">Start per day $4500</p>
                        <div class="read_bt">
                            <a href="#" class="openFormBtn" data-car="Mercedes Benz X class">Book Now</a>
                            </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="gallery_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="images/img-1.png"></div>
                        <h3 class="types_text">Mercedes Benz z class</h3>
                          <p class="looking_text">Start per day $4500</p>
                        <div class="read_bt"><a href="#" class="openFormBtn" data-car="Mercedes Benz z class">Book Now</a></div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="images/img-2.png"></div>
                        <h3 class="types_text">Mercedes Benz A class</h3>
                          <p class="looking_text">Start per day $4500</p>
                        <div class="read_bt"><a href="#" class="openFormBtn" data-car="Mercedes Benz A class">Book Now</a></div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="images/img-3.png"></div>
                        <h3 class="types_text">Toyota car</h3>
                          <p class="looking_text">Start per day $4500</p>
                        <div class="read_bt"><a href="#" class="openFormBtn" data-car="Toyota car">Book Now</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- gallery section end -->

      <!-- ===================== POPUP FORM ===================== -->
        <div id="popupForm" class="popup">
           <div class="popup-content">
              <span class="close">&times;</span>
              <h2>Booking Form</h2>

              <form action="save_booking.php" method="POST">
                 <label>Car Name</label>
                 <input type="text" name="car" id="carName" readonly>

                 <label>Your Name</label>
                 <input type="text" name="name" required>

                 <label>Phone</label>
                 <input type="text" name="phone" required>

                 <label>Rent Duration (days)</label>
                 <input type="number" name="days" required>

                 <button type="submit">Save Booking</button>
              </form>
           </div>
        </div>


        <script>
        document.querySelectorAll(".openFormBtn").forEach(btn => {
           btn.addEventListener("click", function(e){
              e.preventDefault();
      
              let car = this.getAttribute("data-car");
              document.getElementById("carName").value = car;

              document.getElementById("popupForm").style.display = "flex";
           });
        });

        document.querySelector(".close").addEventListener("click", function(){
           document.getElementById("popupForm").style.display = "none";
        });
        window.onclick = function(e){
           if (e.target == document.getElementById("popupForm")) {
              document.getElementById("popupForm").style.display = "none";
           }
        }
        </script>

      <!-- choose section start -->
      <div class="choose_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="choose_taital">WHY CHOOSE US</h1>
               </div>
            </div>
            <div class="choose_section_2">
               <div class="row">
                  <div class="col-sm-4">
                     <div class="icon_1"><img src="images/icon-1.png"></div>
                     <h4 class="safety_text">SAFETY & SECURITY</h4>
                     <p class="ipsum_text">variations of passages of Lorem Ipsum available, but the majority have </p>
                  </div>
                  <div class="col-sm-4">
                     <div class="icon_1"><img src="images/icon-2.png"></div>
                     <h4 class="safety_text">Online Booking</h4>
                     <p class="ipsum_text">variations of passages of Lorem Ipsum available, but the majority have </p>
                  </div>
                  <div class="col-sm-4">
                     <div class="icon_1"><img src="images/icon-3.png"></div>
                     <h4 class="safety_text">Best Drivers</h4>
                     <p class="ipsum_text">variations of passages of Lorem Ipsum available, but the majority have </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- choose section end -->

        <?php
            // Ambil data dari DB dengan PDO
            $sql = "SELECT id, name, message, image, created_at FROM whatsayscustomers ORDER BY created_at DESC";
            $stmt = $pdo->query($sql);
            $testimonials = $stmt->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <!-- client section start -->
        <div class="client_section layout_padding">
           <div class="container">
              <div id="custom_slider" class="carousel slide" data-ride="carousel">
                 <div class="carousel-inner">

                    <div class="row">
                       <div class="col-md-12 text-center">
                          <h1 class="client_taital">What Says Customers</h1>
                       </div>
                    </div>

                    <?php 
                    $active = "active"; 
                    $counter = 0;

                    foreach ($testimonials as $index => $row):
                        $image = !empty($row['image']) ? "images/".$row['image'] : "images/client-img1.png";

                        if ($counter % 2 == 0): ?>
                            <div class="carousel-item <?= $active; ?>">
                               <div class="client_section_2">
                                  <div class="row">
                        <?php endif; ?>

                        <div class="col-md-6">
                            <div class="client_taital_box">
                               <div class="client_img"><img src="<?= $image; ?>"></div>
                               <h3 class="moark_text"><?= htmlspecialchars($row['name']); ?></h3>
                               <p class="client_text"><?= htmlspecialchars($row['message']); ?></p>
                            </div>
                            <div class="quick_icon"><img src="images/quick-icon.png"></div>
                        </div>

                        <?php
                        $counter++;

                        if ($counter % 2 == 0 || $index == count($testimonials) - 1): ?>
                                  </div>
                               </div>
                            </div>
                        <?php
                        $active = "";
                        endif;
                    endforeach;
                    ?>

                 </div>

                 <a class="carousel-control-prev" href="#custom_slider" role="button" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                 </a>
                 <a class="carousel-control-next" href="#custom_slider" role="button" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                 </a>

              </div>
           </div>
        </div>
      <!-- client section end -->

      <!-- contact section start --> <!-- GET IN TOUCH SECTION -->
      <div class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="contact_taital">Get In Touch</h1>
               </div>
            </div>
         </div>
         <?php             // pastikan koneksi PDO benar
?>
           <div class="container">
              <div class="contact_section_2">
                 <div class="row">
                    <div class="col-md-12">
                       <div class="mail_section_1">
                          <form id="feedbackForm" method="POST" action="">
                              <input type="text" class="mail_text" placeholder="Name" name="Name" required>
                              <input type="text" class="mail_text" placeholder="Email" name="Email" required>
                              <input type="text" class="mail_text" placeholder="phone_number" name="Phone_number" required>
                              <textarea class="massage-bt" placeholder="Massage" rows="5" name="Massage" required></textarea>
                              <div class="send_bt"><button class="rent-btn" type="submit">Send</button></div>
                          </form>
                          <div id="response" style="margin-top:10px; color:green;"></div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
         <!-- PHP untuk insert ke database -->
        <?php        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['Name'] ?? '';
            $email = $_POST['Email'] ?? '';
            $phone_number = $_POST['Phone_number'] ?? '';
            $massage = $_POST['Massage'] ?? '';

            if (!$name || !$email || !$phone_number || !$massage) {
                echo "Form tidak lengkap!";
                exit;
            }

            try {
                $sql = "INSERT INTO getintouch (name, email, phone_number, massage) 
                        VALUES (:name, :email, :phone_number, :massage)";
                $stmt = getPDO()->prepare($sql);
                $stmt->execute([
                    ':name' => $name,
                    ':email' => $email,
                    ':phone_number' => $phone_number,
                    ':massage' => $massage
                ]);

                echo "Message sent successfully!";
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
        ?>

      <!-- contact section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="footeer_logo"><img src="images/logo.png"></div>
               </div>
            </div>
            <div class="footer_section_2">
               <div class="row">
                  <div class="col">
                     <h4 class="footer_taital">Subscribe Now</h4>
                     <p class="footer_text">There are many variations of passages of Lorem Ipsum available,</p>
                     <div class="form-group">
                        <textarea class="update_mail" placeholder="Enter Your Email" rows="5" id="comment" name="Enter Your Email"></textarea>
                        <div class="subscribe_bt"><a href="#">Subscribe</a></div>
                     </div>
                  </div>
                  <div class="col">
                     <h4 class="footer_taital">Information</h4>
                     <p class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the majority </p>
                  </div>
                  <div class="col">
                     <h4 class="footer_taital">Helpful Links</h4>
                     <p class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the majority </p>
                  </div>
                  <div class="col">
                     <h4 class="footer_taital">Invesments</h4>
                     <p class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the majority </p>
                  </div>
                  <div class="col">
                     <h4 class="footer_taital">Contact Us</h4>
                     <div class="location_text"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left_15">Location</span></a></div>
                     <div class="location_text"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_15">(+71) 8522369417</span></a></div>
                     <div class="location_text"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_15">demo@gmail.com</span></a></div>
                     <div class="social_icon">
                        <ul>
                           <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <p class="copyright_text">2023 All Rights Reserved. Design by <a href="https://html.design">Free Html Templates</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a></p>
               </div>
            </div>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>