<?php
 session_start();

  if(isset($_SESSION['admin'])) {
        
  }
  else {
    header("Location:adminLogin.php");
  }
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
       .sidebar .logo-details .logo_name{
          padding-left: 12px;
        }

        .sidebar{
          background: #1C4E80;
        }

        .home-section{
          background: #DADADA;
        }

        .home-section nav .profile-details{
          background: lightgray;
        }
        
     </style>
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <span class="logo_name">StyleIt</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="addMaterial.php">
            <i class="bi-plus-square"></i>
            <span class="links_name">Add Material</span>
          </a>
        </li>
        <li>
          <a href="addPattern.php">
            <i class="bi-plus-square"></i>
            <span class="links_name">Add Pattern</span>
          </a>
        </li>
        <li>
          <a href="addCollar.php">
            <i class="bi-plus-square"></i>
            <span class="links_name">Add Collar</span>
          </a>
        </li>
        <li>
          <a href="addSleeve.php">
            <i class="bi-plus-square"></i>
            <span class="links_name">Add Sleeve</span>
          </a>
        </li>
        <li>
          <a href="addCity.php">
            <i class="bi-plus-square"></i>
            <span class="links_name">Add City</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-detail'></i>
            <span class="links_name">User Details</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-detail'></i>
            <span class="links_name">Tailor Details</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Manage Account</span>
          </a>
        </li>
        <li class="log_out">
          <a href="logoutA.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>

      <div class="profile-details">
        <span class="admin_name"><?php echo $_SESSION['admin'];?></span>
      </div>
    </nav>

  

<script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>

