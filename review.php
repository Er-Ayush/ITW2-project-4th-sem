<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Contact Us!</title>
  </head>
  <style>
    nav {
        z-index: 1000;
        text-decoration: none;
        width: 100%;
        height: 70px;
        background: rgb(0, 0, 0);
        /* color: rgb(0, 0, 0); */
        display: flex;
        justify-content: space-between;
        align-items: center;
        /* padding: 0px 80px; */
        padding-left: 80px;
        padding-right: 100px;
        /* border-style: solid;
    border-width: 3px;
    border-color: rgb(12, 86, 206); */
        position: fixed;
        top: 0%;
    }

    .logo {
        font-family: sans-serif;
        font-size: 20px;
        padding-right: 1px;
        border-style: solid;
    }

    .logo img {
        width: 130px;

    }

    .menu a {
        text-decoration: none;
        color: rgb(255, 255, 255);
        padding-right: 10px;
        font-family: sans-serif;
        font-weight: bolder;
    }

    .menu a:first-child {
        color: crimson;
    }

    .menu a:hover {
        color: rgb(255, 77, 77);
    }

    .icon i {
        font-size: 20px;
    }

    .icon a {
        font-size: 20px;
        text-decoration: none;
        background: red;
        color: rgb(255, 255, 255);
        border-radius: 5px;
        padding: 4px 5px;
        margin-left: 25px;
    }

    .icon a:hover {
        color: red;
    }
</style>
  <body>
  <header>
        <nav>
            <div class="logo"><a href="index.html"><img src="images/NEWZZZY (2)LOGOO.png" alt=""></a></div>
            <div class="menu">
                <a href="index.html">HOME|</a>
                <a href="national.html">NATIONAL|</a>
                <a href="international.html">INTERNATIONAL|</a>
                <a href="sports.html">SPORTS|</a>
                <a href="cultural.html">CULTURE|</a>
                <a href="politics.html">POLITICS|</a>
                <a href="tech.html">TECH|</a>
                <a href="review.php">REVIEW|</a>
                <a href="about.html">ABOUT|</a>
            </div>
            <div class="icon">
                <i class="fa fa-search"></i>
                <a href="login.html">Login</a>
            </div>
        </nav>
    </header>
  </br></br></br>
    <div class="container w-50 m-auto">
        <div class="text">
            <h1 class="text-center">Contact Us</h1>
            <hr class="w-25 m-auto bg-dark">
        </div>
        <form action="action.php" method="POST" autocomplete="on">
            <div class="user my-4 ">
              <label for="username">Username: </label>
              <input type="text" name="username" id="username" class="form-control" required>
            </div>
            <div class="email my-4">
              <label for="email">E-mail: </label>
              <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="contact my-4">
              <label for="contact">rating: </label>
              <input type="number" name="contact" id="contact" class="form-control" required>
            </div>
            <div class="address my-4">
              <label for="address">Address: </label>
              <input type="text" name="address" id="address" class="form-control" required>
            </div>
            <div class="message my-4">
              <label for="message">Message: </label>
              <textarea name="message" id="message" class="form-control" cols="30" rows="5"></textarea>
            </div>
            <button class="btn btn-success">Send Message</button>
        </form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
    <script src="review.js"></script>
  </body>
</html>