<!DOCTYPE html>
<html>

<head>
    <title>Location Confirmée</title>
</head>

<body>
    <h1>Confirmation de votre location</h1>
    <p>Bonjour {{ $location->client->nom }} {{ $location->client->prenom }},</p>
    <p>Nous avons le plaisir de vous informer que votre location a été enregistrée avec succès. Voici les détails de
        votre location :</p>
    <ul>
        <li>Date de début : {{ $location->date_debut }}</li>
        <li>Date de fin avance : {{ $location->date_finavance }}</li>
        <li>Avance : {{ $location->avance }}</li>
        <li>Caution : {{ $location->caution }}</li>
        <li>Total avance : {{ $location->Tavance }}</li>
        <li>Total caution : {{ $location->Tcaution }}</li>
    </ul>
    <p>Merci d avoir choisi notre Agence Atanyce.</p>
</body>

</html>
