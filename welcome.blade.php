<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Doctor Appointment</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Styles / Scripts -->
        
            <style>
                
            </style>

            <style>
                body{
                    font-family: 'manito', sans-serif;
                    background-color:rgb(70, 161, 64);
                }
            </style>

    </head>
    <body class='antialised'>
      <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content" style="background-color:skyblue; color:red;">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Doctors Appointment</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="background-color:skyblue; color:red;">
                  <form action="{{route('save.appointment')}}" method='POST'>
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Name</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Age</label>
                      <input type="text" class="form-control" name="age" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Timing</label>
                      <input type="text" class="form-control" name="timing" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        <!-- As a link -->
      <nav class="navbar bg-body-tertiary" style="background-color:skyblue; color:#FFFFFF;">
          <div class="container-fluid">
            <a class="navbar-brand" href="{{url('/Doctor/login')}}" style="background-color:blue; color:#FFFFFF; width:15rem;">Login</a>
            <a class="navbar-brand" href="{{url('/Doctor/signup')}}" style="background-color:blue; color:#FFFFFF; width:15rem;">Signup</a>
            <a class="navbar-brand" href="#appointment" style="background-color:blue; color:#FFFFFF; width:15rem;">Take Appointments</a>
          </div>
      </nav>
      <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">
          {{--<div class="carousel-item active">
            <img src="https://www.doctorsplaza.in/_next/static/media/top-banner.05984c80.png" class="d-block w-100" alt="...">
          </div>--}}
          <div class="carousel-item">
            <img src="https://img.freepik.com/free-photo/male-working-as-paediatrician_23-2151696318.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item active">
            <img src="https://media.hswstatic.com/eyJidWNrZXQiOiJjb250ZW50Lmhzd3N0YXRpYy5jb20iLCJrZXkiOiJnaWZcL2JlY29taW5nLWRvY3Rvci5qcGciLCJlZGl0cyI6eyJyZXNpemUiOnsid2lkdGgiOjgyOH19fQ==" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button> 
      </div>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
      <nav class="row container mt-5">
        <nav class="col-md-4">
          <div class="card" style="width: 20rem; background-color:brown; color:#FFFFFF;" id="appointment">
            <img src="https://media.istockphoto.com/id/177839842/photo/smiling-doctor-woman-with-arms-crossed.jpg?s=612x612&w=0&k=20&c=infRKfdmTMS8WYFZHF_GPuBpLPszyyXhiP5Er9a50jA=" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">DR.Vemula Sri</h5>
              <p class="card-text">Cardiologist <br> Bachelor of Medicine, Bachelor of Surgery (MBBS)</p>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Take Appointments</a>
            </div>
          </div>
      </nav>
        <nav class="col-md-4">
        <div class="card" style="width: 20rem; background-color:brown; color:#FFFFFF;">
            <img src="https://content.jdmagicbox.com/v2/comp/delhi/l9/011pxx11.xx11.180216200520.b7l9/catalogue/dr-ankita-bali-bhms-dnhe-pg-hom-london-md-scholar-connaught-place-delhi-homeopathic-doctors-o2fj073lyd-250.jpg" class="card-img-top" alt="..." style="height:30rem;">
            <div class="card-body">
              <h5 class="card-title">DR.Sahasra</h5>
              <p class="card-text">Ophthalmologist <br> Master of Surgery (MS Ophthalmology)</p>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Take Appointments</a>
            </div>
          </div>
        </nav>
        <nav class="col-md-4">
        <div class="card" style="width: 20rem; background-color:brown; color:#FFFFFF;">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-2Zaz49_rRmvLXQb0iADoapW3Wgq-on9XouXzPutw5nv2otM9Z3jc3FUw2qO6AE5UHDY&usqp=CAU" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">DR.Varma</h5>
              <p class="card-text">Anesthesiologist <br> A Doctor of Medicine (MD) <br> Doctor of Osteopathic Medicine (DO)</p>
              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Take Appointments</a>
            </div>
          </div>
        </nav>
      </nav>
      <nav class="row" style="width:device-width height:30px; background-color:black;color:#FFFFFF; margin-top:20px;">
        <nav class="col-md-4">
          Phone no:89562314
        </nav>
        <nav class="col-md-4">
          &copy Doctor
        </nav>
        <nav class="col-md-4">
          Email:exampleemail.gmail.com
        </nav>
      </nav>
</html>
