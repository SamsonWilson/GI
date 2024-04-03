<!doctype html>
<html lang="en">


<!-- Mirrored from codervent.com/dashtreme/demo/vertical/index.html by HTTrack Website Copier/3.x [XR&CO 2014], Wed, 06 Sep 2023 18:56:45 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="assetsc/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="assetsc/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="assetsc/plugins/fancy-file-uploader/fancy_fileupload.css" rel="stylesheet" />
    <link href="assetsc/plugins/Drag-And-Drop/dist/imageuploadify.min.css" rel="stylesheet" />
    <link href="assetsc/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="assetsc/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />


    <!--plugins-->
    <link href="assetsc/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="assetsc/plugins/datetimepicker/css/classic.css" rel="stylesheet" />
    <link href="assetsc/plugins/datetimepicker/css/classic.time.css" rel="stylesheet" />
    <link href="assetsc/plugins/datetimepicker/css/classic.date.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="assetsc/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="assetsc/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="assetsc/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />

    <!--plugins-->
    <link href="assetsc/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../../../cdn.jsdelivr.net/npm/select2%404.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet"
        href="../../../../cdn.jsdelivr.net/npm/select2-bootstrap-5-theme%401.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <link href="assetsc/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="assetsc/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />

    <link href="assetsc/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="assetsc/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="assetsc/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <link href="assetsc/plugins/highcharts/css/highcharts-white.css" rel="stylesheet" />

    <!--plugins-->
    <link href="assetsc/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="assetsc/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="assetsc/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <link href="assetsc/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />

    <!--plugins-->

    <link href="assetsc/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="assetsc/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="assetsc/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />

    <!--plugins-->
    <link href="assetsc/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <link href="assetsc/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="assetsc/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="assetsc/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />

    <!-- loader-->
    <link href="assetsc/css/pace.min.css" rel="stylesheet" />
    <script src="assetsc/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="assetsc/css/bootstrap.min.css" rel="stylesheet">
    <link href="assetsc/css/bootstrap-extended.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link href="assetsc/css/app.css" rel="stylesheet">
    <link href="assetsc/css/icons.css" rel="stylesheet">



    <title>Dashtreme - Multipurpose Bootstrap5 Admin Template</title>


    <style>
        /* Style pour cacher l'élément d'entrée de fichier */
        #fancy-file-upload {
            display: none;
        }

        /* Style pour le conteneur de remplacement */
        .file-input-wrapper {
            position: relative;
            width: 150px;
            /* Largeur du bouton personnalisé */
            height: 40px;
            /* Hauteur du bouton personnalisé */
            background-color: #007bff;
            /* Couleur de fond du bouton */
            color: #fff;
            /* Couleur du texte du bouton */
            border-radius: 5px;
            /* Bord arrondi du bouton */
            text-align: center;
            /* Alignement du texte au centre */
            line-height: 40px;
            /* Hauteur de ligne pour centrer le texte */
            cursor: pointer;
            /* Curseur de pointeur au survol */
        }

        /* Style pour le texte du bouton */
        .file-input-wrapper span {
            font-size: 14px;
            font-weight: bold;
        }

        /* Style pour le véritable élément de téléchargement de fichier caché */
        #fancy-file-upload {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }

        #image-preview {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 200px;
            /* Hauteur fixe pour le conteneur */
            border: 1px solid #ccc;
            /* Bordure pour le conteneur */
        }

        #image-preview img {
            max-width: 100%;
            /* Assurez-vous que l'image reste dans les limites du conteneur */
            max-height: 100%;
            /* Assurez-vous que l'image reste dans les limites du conteneur */
        }
    </style>
</head>

<body class="bg-theme bg-theme1">
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->

        <x-Menu />

        <!--end sidebar wrapper -->
        <!--start header -->
        <header>

            <x-HautMenu />

        </header>


        {{--  page d'accueil  --}}
        @yield('contenu')


        <x-color />



        <!-- Bootstrap JS -->
        <script src="assetsc/js/bootstrap.bundle.min.js"></script>
        <!--plugins-->
        <script src="assetsc/js/jquery.min.js"></script>
        <script src="assetsc/plugins/simplebar/js/simplebar.min.js"></script>
        <script src="assetsc/plugins/metismenu/js/metisMenu.min.js"></script>
        <script src="assetsc/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
        <script src="assetsc/plugins/chartjs/chart.min.js"></script>
        <script src="assetsc/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="assetsc/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="assetsc/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
        <script src="assetsc/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
        <script src="assetsc/plugins/jquery-knob/excanvas.js"></script>
        <script src="assetsc/plugins/jquery-knob/jquery.knob.js"></script>
        <script>
            $(function() {
                $(".knob").knob();
            });
        </script>
        <script src="assetsc/js/index.js"></script>
        <!--app JS-->
        <script src="assetsc/js/app.js"></script>
        <script src="assetsc/js/bootstrap.bundle.min.js"></script>
        <!--plugins-->
        <script src="assetsc/js/jquery.min.js"></script>
        <script src="assetsc/plugins/simplebar/js/simplebar.min.js"></script>
        <script src="assetsc/plugins/metismenu/js/metisMenu.min.js"></script>
        <script src="assetsc/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
        <script src="assetsc/plugins/datatable/js/jquery.dataTables.min.js"></script>
        <script src="assetsc/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>


        <!-- <script>
            $(document).ready(function() {
                $('#example').DataTable(

                );
                $("div.dataTables_filter input").focus();
            });
        </script> -->


        <script>
            $(document).ready(function() {
                $('#example').DataTable()
            });
        </script>


        <script>
            $(document).ready(function() {
                var table = $('#example2').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf', 'print']
                });

                table.buttons().container()
                    .appendTo('#example2_wrapper .col-md-6:eq(0)');
            });
        </script>

        {{--  <script>
            $('#fancy-file-upload').FancyFileUpload({
                params: {
                    action: 'fileuploader'
        },
        maxfilesize: 10485760 // 10 Mo en octets
        });
        </script>
        <script>
            $(document).ready(function() {
                $('#image-uploadify').imageuploadify();
            })
        </script> --}}
        <!--app JS-->
        <script src="assetsc/js/app.js"></script>
</body>


<!-- Mirrored from codervent.com/dashtreme/demo/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Sep 2023 18:58:11 GMT -->

</html>
