<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/site-salle-sport.css', 'resources/js/site-salle-sport.js'])
</head>
<body>
    <header>
        <h1>Site Salle de Sport</h1>
        <nav>
            <a href="{{ route('main.acceuil') }}">Aller vers la page Acceuil</a>
            <a href="{{ route('main.cours') }}">Aller vers la page cours</a>
            <a href="{{ route('main.tarif') }}">Aller vers la page tarif</a>
            <a href="{{ route('main.contact') }}">Aller vers la page contact</a>
        </nav>  
    </header>
    @yield('content')
    
    <footer>
        
        <a href="{{ route('main.mentions-legales') }}">Aller vers la page Mentions Légales</a>
    </footer>
</body>
</html>