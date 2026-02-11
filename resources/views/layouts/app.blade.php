<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('titulopagina')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.6/css/dataTables.dataTables.css">
    <style>
    .fakeimg {
        height: 200px;
        background: #aaa;
    }
    </style>
    @stack('css')
</head>
<body>

<div class="p-5 text-white text-center fondo">
    <h1>@yield('titulo')</h1>
    <h4>@yield('subtitulo')</h4>
    <p>Resize this responsive page to see the effect!</p>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="#">@yield('link1')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">@yield('link2','Link #2')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container mt-5">
    <div class="row">
        <div class="col-sm-4">
            <h2>@yield('titulo1')</h2>
            <h5>Photo of me:</h5>
            <div class="fakeimg"><img src="Imagenes\Imagen01.png" class="img-responsive"></div>
            <p>@yield('descripcion_about')</p>
            <h3 class="mt-4">Some Links</h3>
            <p>Lorem ipsum dolor sit ame.</p>
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('contact')}}"
                    target="_blank">@yield('link1')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">@yield('link2','Link #2')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <hr class="d-sm-none">
        </div>
        <div class="col-sm-8">
            <h2>TITLE HEADING</h2>
            <h5>Title description, Dec 7, 2020</h5>
            <div class="fakeimg"><img src="Imagenes\Imagen02.jfif" 
            class='img-responsive'> </div>
            <p>Some text..</p>
            <p>Sunt in culpa qui officia deserunt mollit anim id est laborum
            consectetur adipiscing elit, sed do eiusmod tempor incididunt
            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            <span class="badge bg-primary">@yield("texto_ejemplo")</span>
            
            <h2 class="mt-5">TITLE HEADING</h2>
            <h5>Title description, Sep 2, 2020</h5>
            <div class="fakeimg"><img src="Imagenes\Imagen03.jpg" 
                class='img-responsive'></div>
            <p>Some text..</p>
            <p>Sunt in culpa qui officia deserunt mollit anim id est laborum
            consectetur adipiscing elit, sed do eiusmod tempor incididunt
            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
        </div>
    </div>
</div>

<div class="container mt-5 table-responsive">
    @yield('contenido_listado')
</div>

<div class="mt-5 p-4 bg-dark text-white text-center">
    <p>Footer</p>
    <em>@yield("Autor"):@yield("actividad")</em><br>
    <i class="fa-brands fa-facebook"></i>
    <i class="fa-brands fa-twitter"></i>
    <i class="fa-brands fa-instagram"></i>
    <i class="fa-brands fa-linkedin"></i>
    <i class="fa-brands fa-github"></i>
    <i class="fa-brands fa-whatsapp"></i>
    <i class="fa-brands fa-telegram"></i>
    <i class="fa-brands fa-youtube"></i>
    <i class="fa-brands fa-twitch"></i>
    <i class="fa-brands fa-discord"></i>
    <i class="fa-brands fa-snapchat"></i>
    <i class="fa-brands fa-pinterest"></i>
    <i class="fa-brands fa-reddit"></i>
    <i class="fa-brands fa-tiktok"></i>
</div>

</body>
</html>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.3.7/js/dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function () {
        $('#tablausuarios').DataTable({
            columns: [
                { data: 'name' },
                { data: 'email' },
                { data: 'telefono' },
                { data: 'calle' }
        ]
    });
});
</script>
