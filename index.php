<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> PSA Quirino</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <div>
    <header class="header">
     
        <div class="header-logo">
            <img src="imgs/psalogo.png" alt="Logo"> <!-- Add the logo image here -->
        </div>
    
      
        <div>
            <div class="header-title">Philippine Statistics Authority</div>
            <div class="header-subtitle">Quirino Provincial Office</div> <!-- Added subtitle -->
        </div>
    
        <h3 style="margin-left: auto; color: white; font-size: 16px;">
            <?php 
            if (isset($_SESSION['userdata'])) {
                echo 'Hello, ' . $_SESSION['userdata']['fullname'] . '!'; 
            } else {
                echo 'Hello Guest!';
            }
            ?>
        </h3>
        <!-- Profile Picture
    <img src="uploaded_photos/hello.png" alt="Profile Picture" style="width: 135px; height: 135px; position: absolute; right: -15px; top: -31px;"> -->
    </header>
       
        </div>
        </div>
<body>
  <div class="sidebar">
    <div class="logo-details">
        <div class="logo_name">PSA Quirino</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="#">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="#">
         <i class='bx bx-user' ></i>
         <span class="links_name">Manage Employee List</span>
       </a>
       <span class="tooltip">Manage Employee List</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Messages</span>
       </a>
       <span class="tooltip">Messages</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">Analytics</span>
       </a>
       <span class="tooltip">Analytics</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-folder' ></i>
         <span class="links_name">File Manager</span>
       </a>
       <span class="tooltip">Files</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-cart-alt' ></i>
         <span class="links_name">Order</span>
       </a>
       <span class="tooltip">Order</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-heart' ></i>
         <span class="links_name">Saved</span>
       </a>
       <span class="tooltip">Saved</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Setting</span>
       </a>
       <span class="tooltip">Setting</span>
     </li>
     <li class="profile">
         <div class="profile-details">
           <img src="profile.jpg" alt="profileImg">
           <div class="name_job">
             <div class="name">Prem Shahi</div>
             <div class="job">Web designer</div>
           </div>
         </div>
         <i class='bx bx-log-out' id="log_out" ></i>
     </li>
    </ul>
  </div>
  <section class="home-section">
      <div class="text">Dashboard</div>
  </section>
  <script>
  document.getElementById('btn').addEventListener('click', function () {
  const sidebar = document.querySelector('.sidebar');
  const header = document.querySelector('.header');
  
  sidebar.classList.toggle('open');
  if (sidebar.classList.contains('open')) {
      header.style.left = '250px';
      header.style.width = 'calc(100% - 250px)';
  } else {
      header.style.left = '78px';
      header.style.width = 'calc(100% - 78px)';
  }
});

  </script>
</body>
</html>