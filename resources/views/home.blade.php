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
      <li>
        <a href="">
          @foreach ($navbar as $navItem)
              {{$navItem}}
          @endforeach
        </a>
      </li>
    </ul>
  </section>

</body>
</html>