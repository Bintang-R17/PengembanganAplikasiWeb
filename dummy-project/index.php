<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <title>My Portofolio</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#">BINTANG</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir navbar -->

    <!--Jumbotron Mulai  -->
    <section class="jumbotron text-center">
      <img
        src="th (1).jpeg"
        alt="Semar"
        width="200px"
        class="rounded-circle img-thumbnail"
      />
      <h1 class="display-4">Bintang Rizqi Anugrah</h1>
      <p>Mahasiswa UII 23</p>
    </section>
    <!-- Akhir Jumbotron -->

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col text-center mb-3">
            <h2>About Me</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <div class="col-4">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio
              blanditiis beatae et aut asperiores illum minima vero modi
              molestiae quibusdam iusto, delectus ducimus praesentium maiores
              ratione exercitationem id veritatis nobis. Exercitationem,
              expedita laborum animi odio fugiat libero quas officia minus quod
              itaque numquam pariatur corrupti deleniti voluptates at, nulla a
              voluptatem quo assumenda ipsa quam ea iste iusto explicabo. Ab.
            </p>
          </div>
          <div class="col-4">
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. In
              possimus ea vel laboriosam quisquam. Culpa atque eligendi optio?
              Veritatis eius alias, delectus necessitatibus magni aut.
            </p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#e2edff"
          fill-opacity="1"
          d="M0,192L48,170.7C96,149,192,107,288,117.3C384,128,480,192,576,202.7C672,213,768,171,864,149.3C960,128,1056,128,1152,138.7C1248,149,1344,171,1392,181.3L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir About -->

    <!-- Cart -->
    <section id="cart" style="background-color: #e2edff">
      <div class="container">
        <div class="row text-center mb-4">
          <div class="col">
            <h2>My Project</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-3">
            <div class="card border border-2 border-info">
              <img
                src="mike-meyers-IJyXoyGmiZY-unsplash.jpg"
                class="card-img-top"
                alt="gamepad-1"
              />
              <div class="card-body">
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card border border-2 border-info">
              <img
                src="mike-meyers-FXYpXiVyM48-unsplash.jpg"
                class="card-img-top"
                alt="gamepad-1"
              />
              <div class="card-body">
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card border border-2 border-info">
              <img
                src="istockphoto-1364911473-612x612.webp"
                class="card-img-top"
                alt="gamepad-1"
              />
              <div class="card-body">
                <p class="card-text">
                  Some quick example text to build on the card title and make up
                  the bulk of the card's content.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,160L48,181.3C96,203,192,245,288,245.3C384,245,480,203,576,197.3C672,192,768,224,864,229.3C960,235,1056,213,1152,181.3C1248,149,1344,107,1392,85.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>

  


<!-- contact -->
<div class="container">
  <div class="row">
        <div class="col text-center">
          <h2>Contact Me</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label"
              >Email address</label
              >
              <input
              type="email"
              class="form-control"
              id="exampleInputEmail1"
              aria-describedby="emailHelp"
              />
              <div id="emailHelp" class="form-text">
                Well never share your email with anyone else.
              </div>
                </div>
                <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"
                >Password</label
                >
                <input
                type="password"
                class="form-control"
                id="exampleInputPassword1"
                />
                </div>
                <div class="mb-3 form-check">
                <input
                type="checkbox"
                class="form-check-input"
                id="exampleCheck1"
                />
                <label class="form-check-label" for="exampleCheck1"
                >Check me out</label
                >
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
                </div>
                </div>
                <br />
                <!-- Akhir Contact -->

                  <!-- Footer -->
                <footer class="bg-dark text-white text-center py-3">
                <p>&copy; 2023 Bintang Rizqi Anugrah. Hak Cipta Dilindungi.</p>
                </footer>
                <script
                src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                crossorigin="anonymous"
                ></script>
                <link rel="stylesheet" href="style.css" />
                </body>
                </html>
