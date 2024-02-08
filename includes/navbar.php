<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<style>
  header {
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    font-family: "Josefin Sans", sans-serif;
    font-size: 1.5rem;
  }

  button {
    color: #343434 !important;
    outline: none !important;
  }

  a.nav-link {
    color: #343434;
    text-decoration: none;
    min-width: 80px;
  }

  a.nav-link.active {
    color: #000;
    font-weight: bold
  }

  .head {
    font-size: 2em
  }

  #scrollContent {
    display: flex;
    justify-content: flex-start;
    align-items: center;
    width: 100%;
    height: 100%;
    white-space: nowrap;
  }

  #scrollContent>div {
    display: flex;
    animation: textScrollEffect 12s infinite linear;
  }

  @keyframes textScrollEffect {
    from {
      transform: translateX(0%);
    }

    to {
      transform: translateX(-50%);
    }
  }
</style>

<header>

  <div role="navigation">
    <div class="p-3 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-3 col-md-3 d-none d-md-block logo">
            <img src="assets/img/logo/au.png" alt="">
          </div>
          <div class="col-lg-6 col-md-6 text-center">
            <div class="head">HEALTH CENTRE</div>
            <div class=" text-secondary">MIT campus, Anna University</div>
          </div>
          <div class="col-lg-3 col-md-3 text-end d-none d-md-block logo">
            <img src="assets/img/logo/mit-logo.png" alt="">
          </div>
        </div>
      </div>
    </div>

    <div class="border-bottom border-top" id="subNavContainer">
      <nav class="navbar navbar-expand-md">
        <div class="container-fluid">
          <button class="navbar-toggler mx-auto" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
            aria-label="Toggle navigation"><i class="fas fa-bars me-2"></i>
            Menu</button>

          <div class=" collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mx-auto ">
              <li class="nav-item">
                <a class="nav-link mx-2 active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2" href="staff.php">Staffs</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="facility.php">Facilities</a></li>
                  <li><a class="dropdown-item" href="equipments.php">Eqiupments</a></li>
                  <li><a class="dropdown-item" href="schedule.php">Doctor Schedules</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link mx-2 dropdown-toggle" href="blog.html" id="navbarDropdownMenuLink" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  Blog
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Gallery</a></li>
                  <li><a class="dropdown-item" href="#">Details</a></li>
                  <li><a class="dropdown-item" href="#">Recent Events</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2" href="contact.php">Contact </a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2" href="#">Healthcare + </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <div class="border-bottom d-flex">
      <div>
        <div class="py-2 px-5 bg-danger text-white">Updates</div>
      </div>
      <div class="px-1" style="overflow:hidden">
        <div id="scrollContent" class="text-secondary">
          <div>Register now for our Health Center Automation Software to streamline your health
            appointments
            and services!</div>
        </div>
      </div>
    </div>
  </div>
</header>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>