<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="assetsc/images/logo-icon.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Dashtreme</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        {{--  <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title"> Accueil </div>
            </a>
            <ul>
                @can('demacheur')
                    <li> <a href="{{ route('liste_client') }}"><i class="bx bx-radio-circle"></i> Liste des Clients </a>
                    </li>
                    <li> <a href="{{ route('liste_typeclient') }}"><i class="bx bx-radio-circle"></i> Liste Des Types des
                            Clients </a>
                    </li>
                    <li> <a href="{{ route('liste_logement') }}"><i class="bx bx-radio-circle"></i> Liste des Logements </a>
                    </li>
                    <li> <a href="{{ route('liste_type_logement') }}"><i class="bx bx-radio-circle"></i>Liste des Types de
                            Logements</a>
                    </li>
                    <li> <a href="{{ route('liste_Quartier') }}"><i class="bx bx-radio-circle"></i>Liste des Quartiers</a>
                    </li>
                    <li> <a href="{{ route('sadmin') }}"><i class="bx bx-radio-circle"></i>Liste des villes</a>
                    </li>
                @endcan
            </ul>


        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title"> Enregistrement </div>
            </a>
            <ul>
                @can('manager')
                    <li> <a href="{{ route('liste_utilisateur') }}"><i class='bx bx-radio-circle'></i> Creation des
                            Utilisateurs </a>
                    </li>
                    <li> <a href="app-emailbox.html"><i class='bx bx-radio-circle'></i> Liste des utilisateurs </a>
                    </li>
                    <li> <a href="app-chat-box.html"><i class='bx bx-radio-circle'></i> Type Utilisateur </a>
                    </li>
                    <li> <a href="{{ route('liste_location') }}"><i class='bx bx-radio-circle'></i> Liste des location </a>
                    </li>
                    <li> <a href="{{ route('liste_location') }}"><i class='bx bx-radio-circle'></i> Liste des location </a>

                    <li> <a href="{{ route('liste_mode_payement') }}"><i class='bx bx-radio-circle'></i> Mode de Payement
                        </a>
                    </li>
                    <li> <a href="{{ route('detail') }}"><i class='bx bx-radio-circle'></i> Deail
                        </a>
                    </li>
                    <li> <a href="{{ route('listeFacture') }}"><i class='bx bx-radio-circle'></i> La Facture </a>
                    </li>
                    <li> <a href="{{ route('ajouterfacture') }}"><i class='bx bx-radio-circle'></i> Ajouter facture </a>
                    </li>
                @endcan
            </ul>
        </li>  --}}
        <li>
            <a href="{{ route('liste_client') }}">
                <div class="parent-icon"><i class='bx bx-cookie'></i>
                </div>
                <div class="menu-title">LISTES DES CLIENT </div>
            </a>
        </li>

        <li>
            <a href="{{ route('liste_typeclient') }}">
                <div class="parent-icon"><i class='bx bx-cookie'></i>
                </div>
                <div class="menu-title">LISTES DES TYPES CLIENTS </div>
            </a>
        </li>

        <li>
            <a href="{{ route('liste_logement') }}">
                <div class="parent-icon"><i class='bx bx-cookie'></i>
                </div>
                <div class="menu-title"> LISTES DES LOGEMENTS </div>
            </a>
        </li>

        <li>
            <a href="{{ route('liste_type_logement') }}">
                <div class="parent-icon"><i class='bx bx-cookie'></i>
                </div>
                <div class="menu-title">LISTE DES TYPE LOGEMENTS </div>
            </a>
        </li>

        <li>
            <a href="{{ route('liste_Quartier') }}">
                <div class="parent-icon"><i class='bx bx-cookie'></i>
                </div>
                <div class="menu-title">LISTES DES QUARTIER </div>
            </a>
        </li>

        <li>
            <a href="{{ route('sadmin') }}">
                <div class="parent-icon"><i class='bx bx-cookie'></i>
                </div>
                <div class="menu-title">LISTES DES VILLES</div>
            </a>
        </li>

        <li>
            <a href="{{ route('liste_location') }}">
                <div class="parent-icon"><i class='bx bx-cookie'></i>
                </div>
                <div class="menu-title">LISTES DES LOCATION</div>
            </a>
        </li>

        <li>
            <a href="{{ route('liste_mode_payement') }}">
                <div class="parent-icon"><i class='bx bx-cookie'></i>
                </div>
                <div class="menu-title">LISTES DE MODALITE DE PAYEMENT </div>
            </a>
        </li>

        <li>
            <a href="{{ route('listeFacture') }}">
                <div class="parent-icon"><i class='bx bx-cookie'></i>
                </div>
                <div class="menu-title">LITES DES FACTURE </div>
            </a>
        </li>
        <li>
            <a href="{{ route('ajouterfacture') }}">
                <div class="parent-icon"><i class='bx bx-cookie'></i>
                </div>
                <div class="menu-title"> AJOUTER UNE FACTURE </div>
            </a>
        </li>

    </ul>
    <!--end navigation-->
</div>
