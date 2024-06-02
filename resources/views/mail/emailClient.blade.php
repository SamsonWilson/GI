<!DOCTYPE html>
<html>

<head>
    <title>Welcome</title>
</head>

<body>
    <h1>Bienvenue, {{ $client->nom }} {{ $client->prenom }}!</h1>
    <p>Nous sommes ravis de vous accueillir au sein de notre agence Atanyce. Vous avez fait le choix judicieux de nous
        confier votre projet de location.</p>
    <p>Notre expertise couvre divers domaines, notamment la gestion de projets de location, la vente de terrains, et la
        location de véhicules. Nous nous engageons à vous offrir un service de qualité supérieure, adapté à vos besoins
        spécifiques.</p>
    <ul>
        <li>Nom: {{ $client->nom }} {{ $client->prenom }}</li>
        <li>Email: {{ $client->email }}</li>
        <li>Address: {{ $client->adress }}</li>
        <li>Téléphone: {{ $client->tel1 }} {{ $client->tel2 }} </li>
        <li>Sexe: {{ $client->sexe }}</li>
    </ul>
</body>

</html>
