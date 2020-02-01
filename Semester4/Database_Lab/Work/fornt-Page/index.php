<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="index.css">
<link rel="stylesheet" type="text/css" href="nav.css">
<link rel="stylesheet" type="text/css" href="login.css">

</head>
<body>
  <header class="v-header container">
    <div class="fullscreen-video-wrap">
     <video autoplay muted loop id="myVideo">
        <source src="rain.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
      </video>
    </div>
    <div class="header-overlay"></div>
    <div class="header-content text-md-center">
       <div class="wrap">
  <span class="decor"></span>
 
  </div>
          <h1 class="control">Welcome To ACM Election 2019</h1>
          <p >The Association for Computing Machinery is an international learned society for computing. It was founded in 1947, and is the world's largest scientific and educational computing society.</p>
    <!--  <a class="btn">Sign in</a>
          <a class="btn">Sign up</a> -->
          <button class="bttn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
          
          <!-- <button class="btn ">sign up</button> -->

    <div id="id01" class="modal">
      
      <form class="modal-content animate" action="main_page.php" method="post">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
          <img src="images.jpg" alt="Avatar" class="avatar">
        </div>

        <div class="container">
          <!-- <label for="uname"><b>Username</b></label> -->
          <input type="text" placeholder="Enter User-Id" name="acm_id" required>

          <!-- <label for="psw"><b>Password</b></label> -->
        
          <!-- <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label> -->
            
          <button class="bttn" type="submit">Login</button>
        </div>
      </form>
    </div>

          <!-- <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn"></button> -->
      </form>
    </div>
    </div>
  </header>
  <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
var modal1 = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>
