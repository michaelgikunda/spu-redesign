<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <title>Blog Now | A Leading Christian University</title>
   <meta name="description"
      content="Explore our programs and discover why St. Paul's University is the perfect choice for your higher education needs. Learn about our high-quality education, experienced faculty, and successful alumni. Apply now and take the first step towards a rewarding future at SPU.">
   <meta name="author" content="St. Paul's University">
   <link href="../logo-small.png" rel="icon" sizes="68x55" type="image/png">
   <link href="../css/web-project.css" rel="stylesheet">
   <link href="../css/blogHome.css" rel="stylesheet">
   <script src="../javascript/jquery-3.6.0.min.js"></script>
   <script src="../javascript/popper.min.js"></script>
   <script src="../javascript/bootstrap.min.js"></script>
   <script src="../javascript/bootstrap.dropdown.min.js" defer></script>
   <script src="../javascript/affix.min.js"></script>
   <script>
      document.addEventListener('DOMContentLoaded', function (event) {
         var DropdownMenu1_dropdownToggle = document.querySelectorAll('#DropdownMenu1 .dropdown-toggle');
         DropdownMenu1_dropdownToggle.forEach(item => {
            var dropdown = new bootstrap.Dropdown(item, { popperConfig: { placement: item.getAttribute('data-bs-placement') } });
         });
         var DropdownMenu1_dropdown = document.querySelectorAll('#DropdownMenu1 .dropdown');
         DropdownMenu1_dropdown.forEach(item => {
            item.addEventListener('shown.bs.dropdown', function (e) {
               e.currentTarget.classList.add('show');
            });
            item.addEventListener('hidden.bs.dropdown', function (e) {
               e.currentTarget.classList.remove('show');
            });
         });
         $("#wb_DropdownMenu1").affix({ offset: { top: $("#wb_DropdownMenu1").offset().top } });
      });
   </script>
   <script>
      $(document).ready(function () {
         $("#wb_DropdownMenu1").affix({ offset: { top: $("#wb_DropdownMenu1").offset().top } });
         if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) { $('#preloader').remove(); }
      });
      $(window).on('load', function () {
         $('#preloader').remove();
      });
   </script>
</head>

<body>
   <div id="wb_Text1"
      style="position:absolute;left:290px;top:305px;width:801px;height:109px;text-align:center;z-index:0;">
      <span style="color:#000000;font-family:Boldfinger;font-size:96px;">Spu Blog page</span>
   </div>
   <div id="wb_ThemeableButton1" style="position:absolute;left:610px;top:414px;width:164px;height:55px;z-index:1;">
      <a class="ui-button ui-corner-all" id="ThemeableButton1" href="../addpost.html" style="width:100%;height:100%;">Add
         Post</a>
   </div>
   <div id="wb_Image1" style="position:absolute;left:665px;top:232px;width:55px;height:65px;z-index:2;">
      <img src="../images/spu_logo.png" id="Image1" alt="" width="55" height="66">
   </div>
   <div id="wb_DropdownMenu1" style="position:absolute;left:483px;top:47px;width:515px;height:38px;z-index:3;">
      <div id="DropdownMenu1" class="DropdownMenu1" style="width:100%;height:auto !important;">
         <div class="container">
            <div class="navbar-header">
               <button title="Dropdown Menu" type="button" class="navbar-toggle" data-bs-toggle="collapse"
                  data-bs-target=".DropdownMenu1-navbar-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
               </button>
            </div>
            <div class="DropdownMenu1-navbar-collapse collapse">
               <ul class="nav navbar-nav" itemscope="itemscope" itemtype="https://schema.org/SiteNavigationElement">
                  <li itemprop="name" class="nav-item">
                     <a href="../index.html" class="nav-link" itemprop="url">Home</a>
                  </li>
                  <li itemprop="name" class="nav-item">
                     <a href="../about.html" class="nav-link" itemprop="url">About</a>
                  </li>
                  <li itemprop="name" class="nav-item">
                     <a href="../contacts.html" class="nav-link" itemprop="url">Contacts</a>
                  </li>
                  <li itemprop="name" class="nav-item">
                     <a href="../signup.html" class="nav-link" itemprop="url">Blog</a>
                  </li>
                  <li itemprop="name" class="nav-item dropdown-hover dropdown">
                     <a href="#" class="dropdown-toggle" data-bs-offset="0,1" data-bs-placement="bottom-start"
                        data-bs-toggle="dropdown">Portals<b class="caret"></b></a>
                     <ul class="dropdown-menu">
                        <li itemprop="name" class="nav-item dropdown-item">
                           <a href="https://students.spu.ac.ke/" target="_blank" class="nav-link"
                              itemprop="url">Student</a>
                        </li>
                        <li itemprop="name" class="nav-item dropdown-item">
                           <a href="https://exams.spu.ac.ke/login/index.php" target="_blank" class="nav-link"
                              itemprop="url">Exams</a>
                        </li>
                        <li itemprop="name" class="nav-item dropdown-item">
                           <a href="https://elearning.spu.ac.ke/login/index.php" target="_blank" class="nav-link"
                              itemprop="url">E-Learning</a>
                        </li>
                        <li itemprop="name" class="nav-item dropdown-item">
                           <a href="https://staff.spu.ac.ke/" target="_blank" class="nav-link" itemprop="url">staff</a>
                        </li>
                     </ul>
                  </li>
                  <li itemprop="name" class="nav-item">
                     <a href="../apply.html" class="nav-link" itemprop="url">Apply Now</a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <?php
   $conn = mysqli_connect("localhost", "root", "", "schoolproject");
   $show = "SELECT * FROM blog";
   $query = mysqli_query($conn, $show);

   ?>

   <div id="Blog1" style="overflow:hidden;position:absolute;left:292px;top:831px;width:800px;z-index:4;">
   <?php foreach ($query as $q) { ?>
      <div class="blogitem">
            <?php
            echo '<div class="blogthumb"><img src="../images/' . $q['image'] . '"></div>';
            ?>
            <div class="bloginfo">
               <?php
               echo '<span class="blogsubject">' . $q['title'] . '</span>';
               ?>
               <?php
               echo '<p><span style="color:#000000;">' . $q['content'] . '</span></p>';
               ?>
            </div>
         </div>
         <div class="clearfix visible-col1"></div>
      <?php } ?>
   </div>
   <div id="preloader"></div>
</body>

</html>