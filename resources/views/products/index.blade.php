<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cred-Notes : Home</title>
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
      }

      .button-container {
    display: flex; /* Use flexbox for flexible layout */
    gap: 10px; /* Add some spacing between buttons */
}

.card-button {
        display: flex;
        align-items: center;
        padding: 10px;
    }

    .card-button button {
        width: 100%;
        /* Add any additional styling you want for the button here */
    }

</style>
<body>
    <!-- NavBar Starts -->
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid mt-2">
        <a class="navbar-brand mx-4" href="" style="font-family: 'Noto Serif Vithkuqi', serif;">Cred-Notes</a>
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
          <div class="pe-1">
            <a href="{{route('product.create')}}" class="btn btn-dark">Create Notes</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- NavBar ends -->
<hr>
    <div class="container" style="height: 330px;">
  <div class="row">
    <div class="col-8">
      <!-- Hero -->
        <div class="container mt-5" >
          <div class="p-4 shadow-2 rounded-3 hero" style="padding-left: 80px;">
            <h2 class="mb-4">Welcome to CRED-notes!</span></h2>
            <p>Introducing the innovative CRED Note App, a powerful tool designed to streamline your note-taking experience like never before. Built with a seamless blend of cutting-edge technology and user-centric design, our app empowers you to Create, Read, Update, and Delete your notes effortlessly.</p>
            <button type="button" class="btn btn-outline-dark">
              Learn more
            </button>
          </div>
        </div>
      <!-- Hero -->
    </div>


<div class="container d-flex mx-auto justify-content-center mt-5 mobilecontainer">
  <h3 class="mobilescreen" style="font-family: 'Noto Serif Vithkuqi', serif; font-size: 26px;">Your Notes</h3>
</div>

<!-- Table Starts -->
<div class="container-md pt-3 col-md mb-5 mt-3">
<div class="row">
            @foreach($products as $product)
            <div class="col px-2 d-flex justify-content-center my-3 mobilecard" >
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->notestitle}}</h5><hr>
                        <p class="card-text">{{$product->notescontent}}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Created : {{$product->created_at}}</li>
                        <li class="list-group-item">Updated : {{$product->updated_at}}</li>
                    </ul>
                    <div class="card-button button-container">
                        <a href="{{route('product.edit', ['product' => $product])}}" class="card-link flex"><button class="btn btn-outline-dark flex">Edit</button></a>
                        <a href="{{route('product.view', ['product' => $product])}}" class=" flex"><button class="btn btn-outline-dark flex">View</button></a>
                        <form method="post" action="{{route('product.destroy', ['product' => $product])}}">
                          @csrf 
                          @method('delete')
                          <input type="submit" value="Delete" class="btn btn-outline-dark flex"/>
                        </form>
                    </div>
                </div> 
            </div>
          @endforeach
  </div>
</div>
<!-- Copyright -->
<div class="text-center p-3" style="background-color: rgb(244, 244, 244); color: black;">
        © 2023 Copyright: Created by - 
        <a href="/">Anubhav Tripathi</a>
      </div>
      <!-- Copyright -->
</body>
</html>