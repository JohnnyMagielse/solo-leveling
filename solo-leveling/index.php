<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Solo Leveling</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css" />
</head>

<body class="bg-dark">
  <section id="header">
    <div id="header-img">
      <div class="container h-100">

        <!-- hamburger menu -->
        <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
        <label for="openSidebarMenu" class="sidebarIconToggle" onClick="navbar()">
          <div class="spinner diagonal part-1"></div>
          <div class="spinner horizontal"></div>
          <div class="spinner diagonal part-2"></div>
        </label>

        <!-- navbar -->
        <div class="sidenav">
          <a href="#">Home</a>
          <a href="#">Sung jin woo</a>
          <a href="#">Story</a>
          <a href="#">Characters</a>
          <a href="#">Contact</a>
          <div class="w-100 text-left">
            <img src="img/Chibi.png" alt="Ahjin Logo" width="80%" height="100%">
          </div>
        </div>

        <!-- header title (img) -->
        <div class="row">
          <div class="col-lg-6 col-12 my-auto">
            <img src="img/header-title.png" alt="Solo Leveling" width="100%" height="100%">
          </div>
          <div class="col-lg-6 col-12 vh-85">
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-12 col-md-12 text-center">
            <img id="mouse" src="img/mouse.jpg" alt="Mouse" width="50px" height="50px">
          </div>
          <div class="col-12 col-md-12 text-center pt-2">
            <img id="mouse" src="img/pngwing.com.png" alt="Arrow" width="30px" height="30px">
          </div>
        </div>

      </div>
    </div>
  </section>

  <section id="sung-jin">
    <div class="bg-blue">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-5 py-5">

            <form action='php/ContentSelector.php' method='post' id='theform' name='handleData'>
              <div id='content'>
                
                <?php // getting the "about" at the begin if nothing given
                require_once 'php/ContentSelector.php'; ?>

              </div> 
            </form>

          </div>
          <div class="col-12 col-md-4">
            <img class="img-fluid" src="img/sung.png">
          </div>
          <div class="col-12 col-md-3 my-auto">
            <nav class="text-end">
              <ul class="list-unstyled">
                <li><a class="button" onClick="loadPage('php/ContentSelector.php?read=About', sendToContent);">About</a></li>
                <li><a class="button" onClick="loadPage('php/ContentSelector.php?read=Relationships', sendToContent);">Relationships</a></li>
                <li><a class="button" onClick="loadPage('php/ContentSelector.php?read=Skills', sendToContent);">Skills</a></li>
                <li><a class="button" onClick="loadPage('php/ContentSelector.php?read=Troops', sendToContent);">Troops</a></li>
                <li><a class="button" onClick="loadPage('php/ContentSelector.php?read=Equipment', sendToContent);">Equipment</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="banner">
    <div class="bg-dark py-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-12 text-center">
            <h1></h1>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 col-md-5 text-center">
            <img class="img-fluid" src="img/welcome-player.png">
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    function navbar() {
      let element = document.querySelector(".sidenav");
      element.classList.toggle("nav-width")
    }

    // [].forEach.call(document.querySelectorAll('a.button'), 
    //   function(node) {
    //     node.style.fontWeight = "bold";
    //   });

    function loadPage(href, callback) {
        var form = document.getElementById('theform');
        var formData = new FormData(form);
        var xhr = new XMLHttpRequest();
        xhr.onload = function() {

            if (this.readyState == 4 && this.status == 200) {
                callback(this);
            }

        };
        xhr.open("POST", href, true);
        xhr.send(formData);

        // if (xhr.read.classList.contains(".active")) {
        //   xhr.read.classList.remove("active");
        // }        
      
        // xhr.read.classList.add(".active");
    }

    function sendToContent(result){
        console.log(result);
        // 'This is the returned text.'
        // return document.getElementById("content").innerHTML = result;
        return document.getElementById("content").innerHTML = result.response;
    }

  </script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>