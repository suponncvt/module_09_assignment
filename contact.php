<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    />
    <title>Contact us - Supon's NEWS</title>
    <link
      rel="shortcut icon"
      href="./assets/img/favicon.png"
      type="image/x-icon"
    />
    <meta name="description" content="Blog website" />
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;display=swap"
    />
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css" />
    <link rel="stylesheet" href="./assets/bootstrap/css/style.css" />
  </head>

  <body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.html"
          ><!--<img src="assets/img/samin-eyaser-news.png"class="img-fluid logo-img w-50"
            alt="" />-->Supon's News </a
        ><button
          data-bs-toggle="collapse"
          data-bs-target="#navbarResponsive"
          class="navbar-toggler"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact us</a>
            </li>
            <!-- <li class="nav-item"><a class="nav-link" href="post.html">Blog Post</a></li> -->
          </ul>
        </div>
      </div>
    </nav>
    <header
      class="masthead"
      style="background-image: url('assets/img/contact-bg.jpg')"
    >
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-lg-8 mx-auto position-relative">
            <div class="site-heading">
              <h1>Contact Me</h1>
              <span class="subheading">Have questions? I have answers.</span>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto">
          <p>
            Want to get in touch? Fill out the form below to send me a message
            and I will get back to you as soon as possible!
          </p>
          <form id="contactForm" name="sentMessage" action="contact.php" method="post">
            <div class="control-group">
              <div class="form-floating controls mb-3">
                <input
                  class="form-control"
                  type="text"
                  name="name"
                  id="name"
                  required=""
                  placeholder="Name"
                /><label class="form-label" for="name">Name</label
                ><small class="form-text text-danger help-block"></small>
              </div>
            </div>
            <div class="control-group">
              <div class="form-floating controls mb-3">
                <input
                  class="form-control"
                  name="email"
                  type="email"
                  id="email"
                  required=""
                  placeholder="Email Address"
                /><label class="form-label" for="email">Email Address</label
                ><small class="form-text text-danger help-block"></small>
              </div>
            </div>
            <div class="control-group">
              <div class="form-floating controls mb-3">
                <input
                  class="form-control"
                  type="text"
                  id="subject"
                  name="subject"
                  required
                  placeholder="subject"
                /><label class="form-label" for="subject">Subject</label
                ><small class="form-text text-danger help-block"></small>
              </div>
            </div>
            <div class="control-group">
              <div class="form-floating controls mb-3">
                <textarea
                  name="message"
                  class="form-control"
                  id="message"
                  data-validation-required-message="Please enter a message."
                  required=""
                  placeholder="Message"
                  style="height: 150px"
                ></textarea
                ><label class="form-label" for="message">Message</label
                ><small class="form-text text-danger help-block"></small>
              </div>
            </div>

            <div class="mb-3 card border-0 w-25 ms-auto">
              <input
                class="btn btn-primary"
                id="sendMessageButton"
                type="submit"+
                value="send"
              /></div>
<div id="success" class="mt-3">
              <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 $name = $_POST['name'];
 echo '<div class="alert alert-success" role="alert">
  Hello, ' . $name . '! your form is successfully submitted
</div>';
}
?>
            </div>

          </form>

        </div>
      </div>
    </div>
    <hr />
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-lg-8 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <span class="fa-stack fa-lg"
                  ><i class="fa fa-circle fa-stack-2x"></i
                  ><i class="fa fa-twitter fa-stack-1x fa-inverse"></i
                ></span>
              </li>
              <li class="list-inline-item">
                <span class="fa-stack fa-lg"
                  ><i class="fa fa-circle fa-stack-2x"></i
                  ><i class="fa fa-facebook fa-stack-1x fa-inverse"></i
                ></span>
              </li>
              <li class="list-inline-item">
                <span class="fa-stack fa-lg"
                  ><i class="fa fa-circle fa-stack-2x"></i
                  ><i class="fa fa-github fa-stack-1x fa-inverse"></i
                ></span>
              </li>
            </ul>
            <p class="text-muted copyright">
              Copyright&nbsp;©&nbsp;Supon's NEWS 2023
            </p>
          </div>
        </div>
      </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
  </body>
</html>
