<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />
        <title>Website Template</title>
    </head>
    <body>
         <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
             <div class="container">
                <a href="#" class="navbar-brand">LOGO</a>
                <button class="navbar-toggler"type="button" 
                data-bs-toggle="collapse" data-bs-target="#navmenu"
                >  
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="navbar-nav ms-auto">
                        <li class="navbar-item">
                            <a href="" class="nav-link">Home</a>
                        </li>
                        <li class="navbar-item">
                            <a href="" class="nav-link">Services</a>
                        </li>
                        <li class="navbar-item">
                            <a href="" class="nav-link">Contact</a>
                        </li>
                    </ul>
                </div> 
             </div>
         </nav>

         <!-- Showcase -->
         <section class="bg-dark text-light p-5 text-center text-sm-start">
             <div class="container">
                 <div class="d-sm-flex align-items-center justify-center-between">
                     <div><h1>Sample Website <span class="text-warning"> Template </span></h1>
                        <p class="lead my-4">
                          I'm Leomar a Software Engineer, 5 years in web developer, 3 years in SQL 
                          and Reporting Services SQL and 2 years as a finance assistant and teller.
                          Freelance
                        </p>
                        <button class="btn btn-primary btn-lg">Contact Me</button>
                     </div>
                     <img class="img-fluid rounded w-25 d-none d-sm-block" src="{{asset('html/dist/img/avatar5.png')}}" alt="">
                 </div>
             </div>
         </section>
 
         <!-- Services -->
         <section class="p-5">
             <div class="container">
                <div class="row text-center g-4">
                    <div class="col-md">
                        <div class="card bg-secondary text-light">
                            <div class="card-body text-center">
                                <div class="h1 mb-3">
                                <i class="bi bi-laptop"></i>
                                </div>
                                <h3 class="card-title">
                                    Website Devops
                                </h3>
                                <a href="#" class="btn btn-primary">Example Project</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card bg-secondary text-light">
                            <div class="card-body text-center">
                                <div class="h1 mb-3">
                                <i class="bi bi-card-image"></i>
                                </div>
                                <h3 class="card-title">
                                    Photo Editing
                                </h3>
                                <a href="#" class="btn btn-primary">Example Project</a> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card bg-secondary text-light">
                            <div class="card-body text-center">
                                <div class="h1 mb-3">
                                    <i class="bi bi-cloud-check"></i>
                                </div>
                                <h3 class="card-title">
                                    Cloud Services
                                </h3>
                                <a href="#" class="btn btn-primary">Example Project</a> 
                            </div>
                        </div>
                    </div>
                </div>
             </div>
         </section>

         <!-- Lead -->
         <section id="learn" class="p-5">             
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md">
                        <img src="{{asset('html/dist/img/avatar2.png')}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md p-5">
                        <h2>Project Accomplishment</h2>
                        <p class="lead">
                            All of the examples in Tailwind UI rely on the default Tailwind CSS configuration, but some rely on additional first-party
                             plugins like @tailwindcss/forms, @tailwindcss/typography, and @tailwindcss/aspect-ratio. 
                        </p>
                    </div>
                </div>
            </div>
         </section>

         <!-- Contact & Map -->
        <section class="p-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md">
                        <h2 class="text-center mb-4">Contact Info</h2>
                        <ul class="list-group list-group-flush lead">
                            <li class="list-group-item">
                                <span class="fw-bold">Whatsapp:</span> +971557153812
                            </li>
                            <li class="list-group-item">
                                <span class="fw-bold">Whatsapp:</span> +971557153812
                            </li>
                            <li class="list-group-item">
                                <span class="fw-bold">Whatsapp:</span> +971557153812
                            </li>
                            <li class="list-group-item">
                                <span class="fw-bold">Whatsapp:</span> +971557153812
                            </li>
                        </ul>
                    </div>
                    <div class="col-md">
                        <div id='map' style='width: 400px; height: 300px;' ></div>
                    </div>
                </div>
            </div>
        </section>

         <!-- Footer -->
         <footer class="p-5 bg-dark text-white text-center position-relative">
            <div class="container">
                <p class="lead">
                    Copyright &copy; 2022 karleo
                </p>
            </div>
         </footer>
         
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

         <script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>

         <script>
            mapboxgl.accessToken = 'pk.eyJ1Ijoia2FybGVvIiwiYSI6ImNrenRnb2c4YjBoMm0yd2w2ZTVkaHdzdDAifQ.Qtld5SDyRp1qqxCkV2YcPQ';
            var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [-71.060982, 42.35725],
            zoom: 18,
            });
            </script>
    </body>
</html>