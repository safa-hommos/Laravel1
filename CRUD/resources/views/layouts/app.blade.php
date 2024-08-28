<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>@yield('title')</title>
</head>
<body>
<nav class="navbar bg-primary" data-bs-theme="dark">
     <img src="/Blogger-logo-2010-500x281.png" alt="">
    <ul>
        <li><a href="/">posts</a></li>
        <li><a href="#">users</a></li>
    </ul>
    <button>logout</button>
</nav>
<div class="content">
    @yield("content")
</div>
<footer>
    made with 💚 by safa hommos
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
