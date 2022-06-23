<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel First Step</title>
  <link rel="stylesheet" href="/style.css">
</head>
<body>
  
  <section class="navbar">
    <ul class="nav-items">
      @foreach ($navbar as $key => $navItem)
        <li>
          <a href="/{{$key}}">
            {{$navItem}}
          </a>
        </li>
      @endforeach
    </ul>
  </section>

  <section class="main-aboutus">
    <h1>ABOUT US</h1>
  </section>
</body>
</html>