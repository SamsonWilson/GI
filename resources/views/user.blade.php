<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d enregistrement</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            display: flex;
            align-items: ;
            justify-content: center;
            height: 100vh;
        }

        .form-container {
            background-color: #fff;
            width: 400px;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            margin-right: 20px;
            /* Espacement entre l'image et le formulaire */
        }

        .image-container {
            {{--  width: 800px;  --}}
            /* Largeur de l'image */
            width: 800px;
            /* Largeur fixe */
            height: 500px;
            /* Hauteur fixe */
            overflow: hidden;
            /* Masquer le débordement */
            position: relative;
        }

        .image-container img {
            {{--  max-width: 95%;
             max-height: 90%;
            /* Réduire la hauteur de l'image */
            border: 1px solid #ccc;
            border-radius: 5px;  --}} {{--  height: auto;  --}} width: 95%;
            /* Pour s'adapter à la largeur du conteneur */
            height: 80%;
            /* Pour s'adapter à la hauteur du conteneur */
            object-fit: cover;
            /* Redimensionner l'image pour couvrir le conteneur */
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .gallery {
            {{--  display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;  --}} display: flex;
            flex-wrap: nowrap;
            /* Empêche les éléments de passer à la ligne suivante */
            justify-content: flex-start;
            /* Aligner les images à gauche */
            overflow-x: auto;
            /* Activer la barre de défilement horizontale si nécessaire */
        }

        .gallery img {
            max-width: 100px;
            height: auto;
            margin: 5px;
            /* Espacement entre les images dans la galerie */
        }


        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: calc(100% - 12px);
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #4caf50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .image-container {
            position: relative;
        }

        .navigation-button {
            position: absolute;
            top: 40%;
            transform: translateY(-40%);
            background-color: rgb(255, 251, 251);
            border: none;
            color: black;
            font-size: 24px;
            padding: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .navigation-button:hover {
            background-color: rgba(20, 19, 19, 0.9);
        }

        #prevButton {
            left: 10px;
        }

        #nextButton {
            right: 50px;
        }
    </style>
</head>

<body>
    <h2> Quartier {{ $logement->quartier_nom }} Dans
        la ville {{ $logement->ville_nom }} chambre
        {{ $logement->type_logement_nom }}</h2>
    <div class="container">
        <div class="image-container">
            <!-- Image principale -->
            <img id="mainImage" src="/storage/imagelogement/{{ $logement->photo }}" alt="Votre image">

            <!-- Boutons de navigation sur l image -->
            <button id="prevButton" class="navigation-button" onclick="showPreviousImage()">&lt;</button>
            <button id="nextButton" class="navigation-button" onclick="showNextImage()">&gt;</button>
            <div class="gallery">
                <img src="/storage/imagequartier/{{ $logement->quartier_image }}" alt="Image 2">
                <img src="/storage/imagelogement/{{ $logement->photo }}" alt="Image 3">

                <!-- Ajoutez autant d images que nécessaire ici -->
            </div>
            {{--  <button id="prevButton" class="navigation-button" onclick="showPreviousImage()">&lt;</button>
            <button id="nextButton" class="navigation-button" onclick="showNextImage()">&gt;</button>  --}}
        </div>
        <div class="form-container">
            <form action="{{ route('enregistrerVisite') }}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required>

                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom" required>

                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>

                <label for="mot_de_passe">Téléphone :</label>
                <input type="text" id="mot_de_passe" name="tel1" required>

                <label for="confirmation_mot_de_passe">Confirmation Téléphone :</label>
                <input type="text" id="confirmation_mot_de_passe" name="tel2" required>

                <label for="confirmation_mot_de_passe">Localité :</label>
                <input type="text" id="confirmation_mot_de_passe" name="adress" required>

                <input type="hidden" value="{{ $logement->id }}" name="logement_id" readonly required>

                <input type="submit" value="Demande de visite">
                <hr>
                <input type="submit" value="Reserver une chambre">
            </form>
        </div>
    </div>

    <script>
        // Sélectionnez l'image principale et la galerie d'images
        const mainImage = document.getElementById('mainImage');
        const galleryImages = document.querySelectorAll('.gallery img');

        // Définir l'index de l'image actuellement affichée dans la galerie
        let currentIndex = 0;

        // Fonction pour afficher l'image suivante
        function showNextImage() {
            currentIndex = (currentIndex + 1) % galleryImages.length;
            mainImage.src = galleryImages[currentIndex].src;
        }

        // Fonction pour afficher l'image précédente
        function showPreviousImage() {
            currentIndex = (currentIndex - 1 + galleryImages.length) % galleryImages.length;
            mainImage.src = galleryImages[currentIndex].src;
        }
    </script>
</body>

</html>














{{--  <!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d enregistrement</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        form {
            background-color: #fff;
            width: 300px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: calc(100% - 12px);
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #4caf50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <h2>Formulaire d enregistrement</h2>
    <form action="{{ route('enregistrerVisite') }}" method="post" enctype="multipart/form-data">
        @csrf


        <div class="container">
            <div class="image-container">
                <img src="Documents/7-1.jpg" alt="Votre image">
                <div class="image-description">
                    Description de limage ou informations supplémentaires ici.
                </div>
            </div>
        </div>


        <label for="nom">Nom :</label><br>
        <input type="text" id="nom" name="nom" required><br>

        <label for="prenom">Prénom :</label><br>
        <input type="text" id="prenom" name="prenom" required><br>

        <label for="email">Email :</label><br>
        <input type="email" id="email" name="email" required><br>

        <label for="mot_de_passe"> Téléphone </label><br>
        <input type="text" id="mot_de_passe" name="tel1" required><br>

        <label for="confirmation_mot_de_passe"> Téléphone :</label><br>
        <input type="text" id="confirmation_mot_de_passe" name="tel2" required><br>

        <label for="confirmation_mot_de_passe"> Localité :</label><br>
        <input type="text" id="confirmation_mot_de_passe" name="adress" required><br>

        <input type="hidden" value="{{ $logement->id }}" name="logement_id" readonly required><br>

        <input type="submit" value="Demande de visite ">
        <hr>
        <input type="submit" value="Reserver une chambre ">
    </form>
</body>

</html>  --}}
