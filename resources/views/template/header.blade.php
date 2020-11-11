
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
        <img class="navbar-brand" src="https://assets.stickpng.com/thumbs/580b57fcd9996e24bc43c513.png" alt="logo">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            @guest
            <a class="nav-link nav-item m-3" href="{{route('register')}}">Registrati</a>
            <a class="m-3" href="{{ route('login') }}">Login</a>
            @endguest
            <a class="m-3" href="">Inserisci un appartamento</a>
            @auth
            <a  class="m-3" href="">Messaggi</a>
            <a class="m-3" href="">Appartamenti</a>
            <a class="m-3 b3" href="{{route('logout')}}">Logout</a>
            @endauth
        </div>
    </div>
    </nav>
</header>




