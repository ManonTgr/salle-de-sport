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
            <a href="{{ route('acceuil') }}">Aller vers la page Acceuil</a>
            <a href="{{ route('cours') }}">Aller vers la page cours</a>
            <a href="{{ route('tarif') }}">Aller vers la page tarif</a>
            <a href="{{ route('contact') }}">Aller vers la page contact</a>
            <a href="{{ route('mentions-legales') }}">Aller vers la page Mentions Légales</a>
        </nav>  
    </header>
    @yield('content')
</body>
</html>