<style type="text/css">
/*============================

Universal Styling

*=========================*/
* {
padding: 0;
margin: 0;
border:0;
font-family: 'Karla', sans-serif;
}

@font-face {
  font-family: 'Didot Regular';
  src: url('../Font/Didot_Regular.ttf')
  format('truetype');
}

main .container {
  color:#534836;
  text-align: center;
}

main h1{
  font-family: "Didot_Regular";
  padding: 100px 0 40px 0;
}

main p{
  font-size: 30px;
}

main {
  background: #f7e5db;
  width: 100%;
  height: 550px;
  position: relative;
}
/*============================

Header Styling

*=========================*/
header {
  background: #c79783;
}

header img {
  display: block;
  max-width: 350px;
  margin: auto;
  padding-bottom: 10px;
}

header nav {
  min-width: 600px;
  text-align: right;
  padding: 15px 15px 0px;
}

nav ul li {
  display: inline;
}

header nav a {
  text-decoration: none;
  color: #534836;
  padding: 10px;
  margin: 10px 0;
  font-family: "Didot Regular";
  font-size: 27px;
  transition: .3s;
}

  header nav a:hover {
  color: #f7e5db;
  transition: .3s;
}
/*============================

  Footer Styling

*=========================*/
footer {
  background: #c79783;
  color: #534836;
  height: 120px;
}

footer h3 {
  font-family: "Didot_Regular";
  font-size: 25px;
  text-align: center;
  padding-top: 20px;
}

footer .icons {
  text-align: center;
  font-size: 45px;
  padding: 10px 10px;
}

footer .fa-envelope,
footer .fa-instagram {
  color: #534836;
  transition: .3s;
}

footer .fa-envelope:hover,
footer .fa-instagram:hover {
  color: #f7e5db;
  transition: .3s;
}

footer a:visited {
  color: #534836;
  text-decoration: none;
}
</style>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title>Thankyou</title>

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/3d5ccbc9dd.js" crossorigin="anonymous"></script>

  </head>

  <body>
    <header>
      <nav>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">Headshots</a></li>
          <li><a href="services.html">Graduation</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </nav>
      <img src="Images/contact_header.jpg" alt="Noa Michele logo">
    </header>

    <main>
      <div class="container">
        <h1>Sorry something went wrong with your submission</h1>
        <p>Please try again!</p>
      </div>
    </main>

    <footer>
      <h3>Call Me, Beep Me</h3>
      <div class="icons">
        <a href="https://www.instagram.com/noamichelefriedman/" target="_blank"><i class="fab fa-instagram"></i></a>
        <a class="email" href="mailto:noafriedman825@gmail.com"><i class="far fa-envelope"></i></a>
      </div>
    </footer>
  </body>
</html>
