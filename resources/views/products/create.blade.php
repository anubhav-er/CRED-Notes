<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cred-Notes : Create Notes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Irish+Grover&family=Londrina+Shadow&family=Noto+Serif+Vithkuqi&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="https://img.icons8.com/color/48/pokeball--v1.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://img.icons8.com/color/48/pokeball--v1.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://img.icons8.com/color/48/pokeball--v1.png">

</head>
<style>
      *{
        font-family: Georgia, 'Times New Roman', Times, serif;
        max-height: 100%;
      }
</style>
<body>
    <!-- NavBar Starts -->
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand mx-4" href="/" style="font-family: 'Noto Serif Vithkuqi', serif;">Cred-Notes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mx-4" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item" style="padding-right: 20px;">
              <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item" style="padding-right: 20px;">
              <a class="nav-link active" href="#">About us</a>
            </li>
            <li class="nav-item" style="padding-right: 20px;">
              <a class="nav-link active" href="#">Contact us</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-dark" type="submit">Search</button>
          </form>
          <div class="ps-2">
            <a href="/" class="btn btn-dark">Return to Home</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- NavBar ends -->

    <!-- Form starts -->
    <div class="container w-75 border border-gray p-5 my-5">
        <div class="container"  style="height: 400px;">
          <div class="row justify-content-center">
            <div class="col-sm-8">
              <div class="card  border-0 mt-2">
                  <div>
                    @if($errors->any())
                    <ul>
                      @foreach($errors->all() as $error)
                        <li class="text-red">{{$error}}</li>
                      @endforeach
                    </ul>
                    @endif
                  </div>
                <form method="POST" action="{{route('product.store')}}">
                  @csrf 
                  @method('post')
                  <div class="form-group">
                    <label class="mb-2">Write a Title : </label>
                    <input type="text" name="notestitle" class="form-control border border-secondary mb-3">
                  </div>
                  <div class="form-group">
                    <label class="mb-2">Write your Note : </label>
                    <textarea class="form-control border border-secondary" name="notescontent"  style="height: 200px;"></textarea>
                  </div>
                  <div class="container text-center">
                    <button type="submit" class="btn btn-dark my-3 mx-auto">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- Form ends -->

</body>
</html>