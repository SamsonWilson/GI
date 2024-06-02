<!DOCTYPE html>
<html>

<head>
    <title>Facture Payée</title>
</head>

<body>
    <h1>Confirmation de votre paiement de facture</h1>
    <p>Bonjour {{ $client->nom }},</p>
    <p>Nous avons le plaisir de vous informer que votre paiement a été enregistré avec succès. Vous trouverez ci-dessous
        les détails de votre facture :</p>
    <ul>
        <li>Date de paiement : {{ $facture->date_payement }}</li>
        <li>Mois payé : {{ $facture->mois_payer }}</li>
        {{--  <li>Mode de paiement : {{ $facture->mode_payement->nom }}</li>  --}}
        <li>Montant : {{ $facture->montant }}</li>
    </ul>
    <p>Merci d avoir choisi notre service.</p>
</body>

</html>
