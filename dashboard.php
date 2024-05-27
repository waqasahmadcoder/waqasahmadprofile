<?php
include 'db_config.php';

// Fetch data from the database
$sql = "SELECT id, name, number, email, Address FROM student_information";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css" />
</head>
<body>

 <!-- nav bar First Start -->
 <nav class="main-nav">
      <div class="helpnumber">
        <p>HELPLINE:0306-4706655</p>
      </div>
      <div class="items">
        <a href="index.html" id="home" target="_blank">Home</a>
        <a href="about.html" target="_blank">About</a>
        <a href="faq.html" target="_blank">FAQ'S</a>
        <a href="contactus.html" target="_blank">Contact</a>
        <a href="" target="_blank">Login/Registration</a>
      </div>
      <div class="logos">
        <i class="ri-facebook-circle-fill"></i>
        <i class="ri-instagram-fill"></i>
        <i class="ri-tiktok-fill"></i>
        <i class="ri-mail-fill"></i>
        <i class="ri-phone-fill"></i>
      </div>
    </nav>

    <!-- nav bar  second Start -->

    <nav class="nav-second" id="dynamic">
      <div class="log">
        <img
          width="130px"
          height="60px"
          src="https://royalwrist.pk/wp-content/uploads/2020/06/Logo_Final_File-01-1400x609.png"
        />
      </div>
      <div class="navcategory">
        <a href="" target="_blank">SHOP</a>
        <a href="men.html" target="_blank">MEN</a>
        <a href="woman.html" target="_blank">WOMEN</a>
        <a href="" target="_blank">KIDS</a>
        <a href="" target="_blank">BRANDS</a>
        <a href="" target="_blank">SELL YOUR WATCH</a>
      </div>
      <div class="search">
        <input type="text" placeholder="Your Search" />
        <i class="ri-search-line"></i>
      </div>
      <div class="wishlist">
        <p>WISHLIST <i class="ri-heart-line"></i></p>
      </div>
      <div class="cart">
        <p>Rs.0 <i class="ri-shopping-cart-fill"></i></p>
      </div>
    </nav>


    <div class="show-requests">
        <h1>Royalwrist Requests Dashboard</h1>
        <table class="request-table">
            <tr>
                <th>Request ID</th>
                <th>Requester Name</th>
                <th>Requester Email</th>
                <th>Requester Phone</th>
                <th>Requester Concern</th>
            </tr>
            <?php
            include 'db_config.php';
            $sql = "SELECT id, name, number, email, Address FROM student_information";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['id']); ?></td>
                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                        <td><?php echo htmlspecialchars($row['number']); ?></td>
                        <td><?php echo htmlspecialchars($row['email']); ?></td>
                        <td><?php echo htmlspecialchars($row['Address']); ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">No requests found</td>
                </tr>
            <?php endif; ?>
        </table>
    </div>


     <!-- lets Start make Footer -->
     <footer>
      <div class="footer-panel">
        <ul>
          <p>Top Brands</p>
          <a href="">Kenneth cole</a>
          <a href="">Tommy Hilfiger</a>
          <a href="">Emporio Armani</a>
          <a href="">Fossil</a>
          <a href="">Micheal kors</a>
          <a href="">Coach New York</a>
          <a href="">Ferrari</a>
          <a href="">Ted Baker</a>
          <a href="">See All Brnads</a>
        </ul>

        <ul>
          <p>Quick Links</p>
          <a href="">FAQ's</a>
          <a href="">shop</a>
          <a href="">About</a>
          <a href="">Contact</a>
          <a href="">Privacy Policy</a>
          <a href="">Warranty Policy</a>
          <a href="">Track your order</a>
          <a href="">Terms & Conditions</a>
          <a href="">Returns & Exchange Police</a>
          <div class="copywrite">
            <p>© Copyright Royal Wrist 2024 All Rights Reserved.</p>
          </div>
        </ul>

        <ul>
          <p>Contact Info!</p>
          <p>Mobile: 0306-4706655</p>
          <p>Email: waqasbinnawaz@gmail.com</p>
          <pre>
Address: Bhai Bhai Book Shop Mooon 
Markit Allama Iqbal town, Lahore </pre
          >
          <div class="logos">
            <i class="ri-facebook-circle-fill"></i>
            <i class="ri-instagram-fill"></i>
            <i class="ri-tiktok-fill"></i>
            <i class="ri-mail-fill"></i>
            <i class="ri-phone-fill"></i>
          </div>

          <img src="images/image 200 200.jpg" alt="" />
        </ul>
      </div>
    </footer>
</body>
</html>