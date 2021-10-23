<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
</head>
<body>
    <nav class="navbar" id="side-nav">      
      <ul class="navbar-nav  flex-column vertical-nav" id= "side-nav">
        <li class="nav-item">
          <hr>
          <a class="nav-link" href={{ route('user.voting') }}>Voting</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('user.profile') }}">User Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('user.detail') }}">Candidate details</a>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('user.setting') }}">Setting</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('user.about-us') }}">About Us</a>
        </li>
        </ul>      
      </nav>
</body>
</html>