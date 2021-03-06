<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Hello, world!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="{{ asset('figma.css') }}">
  </head>
  <body>
    <div class="figma">
      <div class="col-md-7 figma_body"></div>
      <div class="figma_form">
        <div class="form-body pt-5 pb-5">
          <h6>Explore new courese... Hurry Up!!</h6>
          <br>
          <form action="{{ route('signin') }}" method="POST">
            @csrf
            @if (session('status'))
            <div class="alert alert-info">
              {{session('status')}}
            </div>
            @endif
            <input type="email" name="email" class="form_control"  placeholder="Email Address" >
            <br>
            <br>
            <input type="password" name="password" class="form_control"  placeholder="Password" >
            <br>
            <a class="fp" href="">Forget Password?</a>
            <br>
            <div class="d-grid gap-2 col-6 mx-auto">
              <button class="btn btn-submit" type="submit">LOG IN</button>
              
            </div>
            <br>
            <div id="header">
              <p style="font-weight:bolder;">or</p>
            </div>
            <i class="fab fa-facebook fa-2x"></i><i class="fab fa-google fa-2x"></i>
            <br>
            <br>
            <p style="font-size: 12px;">Don't Have an Account? <a href="{{ route('signup') }}" style="font-weight: bolder;text-decoration: none; color: #40C2F3;" href="">Sign Up</a></p>
          </form>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>