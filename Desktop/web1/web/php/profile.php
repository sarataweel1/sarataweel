<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="../js/profile.js"></script>
  <link rel="stylesheet" href="../css/profile.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
 
  
  <title>profile</title>
</head>

<body>

  <div class="wrapper">
    <div class="navbar">
      <div class="menu">
        <ul>
          <li><a href="../php/home.php">Home</a></li>
          <li><a href="home.php">Profile</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Map</a></li>
        </ul>
      </div>
      <div class="searchbar">
        <!-- <input type="text" placeholder="search"> -->
        <a style="color: white;"href="../php/logout.php">logout</a>
        <!-- <div class="icon">
          <i class="fas fa-search"></i>
        </div> -->
      </div>
    </div>
  </div>

  <div class="background">
    <img class="back" src="../images/2.jpg" alt="">
    <div class="filter">
    </div>
    <img class="profile" src="../images/1.jpg" alt="">
  
    <div class="bio">
    <h1 class="name"> <?php echo $_SESSION['username'];   ?></h1>
    <p class="para"> Lorem ipsum dolor, sit amet consectetur adipisicing elit.
       Libero iste dolorum beatae doloribus? Modi deserunt iusto Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
       Explicabo animi veritatis asperiores adipisci! Accusantium mollitia officia aliquid iure libero pariatur blanditiis enim ducimus 
       non alias corrupti quia, tempore eius fugit?
       provident aut necessitatibus eveniet voluptatibus numquam temporibus
       repellendus minus hic, soluta a repudiandae laboriosam.</p>
      </div>
  </div>
  

 <section >
   <div class="nav2">
     <ul class="sec">
       <li >About</li><span class="sp"> | </span>
       <li >Home</li><span class="sp"> | </span>
       <li>photos</li><span class="sp"> | </span>
       <li >posts</li><span class="sp"> | </span>
       <li >friends</li>
     </ul>
   </div>
 </section >
<h1 class="lis1">Share with others what comes to your mind !</h1>
 <section class="post">
  <div class="widget-post" aria-labelledby="post-header-title">
    <div class="widget-post__header">
      <h2 class="widget-post__title" id="post-header-title">
         <i class="fa fa-pencil" aria-hidden="true"></i>
        Share your post 
      </h2>
    </div>
    <form id="widget-form" class="widget-post__form" name="form" aria-label="post widget">
      <div class="widget-post__content">
        <label for="post-content" class="sr-only">Share</label>
        <textarea name="post" id="post-content" class="widget-post__textarea scroller" placeholder="hey dude what are you waiting for ?9"></textarea>
      </div>
      <div class="widget-post__options is--hidden" id="stock-options">
      </div>
      <div class="widget-post__actions post--actions">
        <div class="post-actions__attachments">
          <button type="button" class="btn post-actions__stock attachments--btn" aria-controls="stock-options" aria-haspopup="true">
            <i class="fa fa-usd" aria-hidden="true"></i>
            stock
          </button>
          <button type="button" class="btn post-actions__upload attachments--btn">
            <label for="upload-image" class="post-actions__label">
               <i class="fa fa-upload" aria-hidden="true"></i> 
              upload image
            </label>
          </button>
          <input type="file" id="upload-image" accept="image/*" multiple>
        </div>
        <div class="post-actions__widget">
          <button class="btn post-actions__publish">post</button>
        </div>
      </div>
    </form>
  </div>

 </section>
 <h1 class="lis">Friends list</h1>
 <section class="friends"> 
  <div class="card">
    <img class="image-card"src="../images/3.jpg" alt="">
    <h3 class="nm">sara altaweel</h3>
    <div class="visit">
      <button class="bn">visit</button>
      <button class="bn">chat</button>
      </div>
  </div>
  <div class="card">
    <img class="image-card"src="../images/3.jpg" alt="">
    <h3 class="nm">sara altaweel</h3>
    <div class="visit">
      <button class="bn">visit</button>
      <button class="bn">chat</button>
      </div>
  </div>
  <div class="card">
    <img class="image-card"src="../images/3.jpg" alt="">
    <h3 class="nm">sara altaweel</h3>
    <div class="visit">
    <button class="bn">visit</button>
    <button class="bn">chat</button>
    </div>
  </div>
  <div class="card">
    <img class="image-card"src="../images/3.jpg" alt="">
    <h3 class="nm">sara altaweel</h3>
    <div class="visit">
      <button class="bn">visit</button>
      <button class="bn">chat</button>
      </div>
  </div>
  <div class="card">
    <img class="image-card"src="../images/3.jpg" alt="">
    <h3 class="nm">sara altaweel</h3>
    <div class="visit">
      <button class="bn">visit</button>
      <button class="bn">chat</button>
      </div>
  </div>

  
 </section>
 <h3 class="lis"> Your photos</h3>
 <section >
   
   <div class="ph">
     <img class="img"src="../images/5.jpg" alt="">
     <img class="img"src="../images/4.jpg" alt="">
     <img class="img"src="../images/4.jpg" alt="">
     <img class="img"src="../images/5.jpg" alt="">
     <img class="img"src="../images/4.jpg" alt="">
     <img class="img"src="../images/5.jpg" alt="">
     <img class="img"src="../images/4.jpg" alt="">
     <img class="img"src="../images/5.jpg" alt="">
   </div>

 </section>
 <div class="load1">
 <button class="load">Load more...</button>
</div>


<div class="container">
  <div class="timeline clearfix">
  <div class="vertical-line">
    <div id="post-1" class="vesti-col timeline-post">
      <div class="vesti-content-wrapper">
        <div class="photo">
          <img src="../images/5.jpg" >
          <div class="vesti-date-wrapper">
            <div class="vesti-date">
              <span class="day">14</span>
              <br>
              <span class="month">DEC</span>
            </div>
          </div>
        </div>
        <div class="vesti-desc">
          <a class="desc-a" href="#">
            <h4>Deleniti dignissimos perferendis</h4>
          </a>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas necessitatibus laboriosam est, suscipit recusandae. Velit eius voluptatem non, fuga numquam a, quisquam sint autem praesentium laudantium explicabo eligendi.</p>
        </div>
      </div>
    </div>
    <div id="post-2" class="vesti-col timeline-post">
      <div class="vesti-content-wrapper">
        <div class="photo">
          <img src="../images/5.jpg">
          <div class="vesti-date-wrapper">
            <div class="vesti-date">
              <span class="day">25</span>
              <br>
              <span class="month">NOV</span>
            </div>
          </div>
        </div>
        <div class="vesti-desc">
          <a class="desc-a" href="#">
            <h4>Facilis ipsa fugit</h4>
          </a>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum suscipit eaque, quasi aperiam officiis ex, odio quisquam hic, ab iure placeat, possimus magnam blanditiis.</p>
        </div>
      </div>
    </div>
    <div id="post-3" class="vesti-col timeline-post">
      <div class="vesti-content-wrapper">
        <div class="photo">
          <img src="../images/5.jpg">
          <div class="vesti-date-wrapper">
            <div class="vesti-date">
              <span class="day">16</span>
              <br>
              <span class="month">NOV</span>
            </div>
          </div>
        </div>
        <div class="vesti-desc">
          <a class="desc-a" href="#">
            <h4>Rerum commodi</h4>
          </a>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, incidunt eius totam animi, alias non iste similique perspiciatis aut, dolor harum dolores explicabo sunt cum consequatur sint maiores, ullam corrupti.</p>
        </div>
      </div>
    </div>
    <div id="post-4" class="vesti-col timeline-post">
      <div class="vesti-content-wrapper">
        <div class="photo">
          <img src="../images/5.jpg">
          <div class="vesti-date-wrapper">
            <div class="vesti-date">
              <span class="day">4</span>
              <br>
              <span class="month">OCT</span>
            </div>
          </div>
        </div>
        <div class="vesti-desc">
          <a class="desc-a" href="#">
            <h4>Necessitatibus velit</h4>
          </a>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium quibusdam expedita sequi, possimus optio perferendis.</p>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>

</body>

</html>

