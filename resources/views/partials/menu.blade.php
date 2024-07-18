<!-- resources/views/partials/menu.blade.php -->

<aside id="sidebar">
    <ul class="sidebar-list">
        <li class="sidebar-list-item">
            <a href="{{ route('utilisateurs.index') }}">
                <span class="material-icons-outlined">inventory_2</span> Utilisateur
            </a>
        </li>
        <li class="sidebar-list-item">
            <a href="{{ route('vehicules.index') }}">
                <span class="material-icons-outlined">category</span> Vehicule
            </a>
        </li>
        <li class="sidebar-list-item">
            <a href="{{ route('chauffeurs.index') }}">
                <span class="material-icons-outlined">groups</span> Chauffeurs
            </a>
        </li>
        <li class="sidebar-list-item">
            <a href="{{ route('carburants.index') }}">
                <span class="material-icons-outlined">fact_check</span> Carburants
            </a>
        </li>
        <li class="sidebar-list-item">
            <a href="{{ route('stations.index') }}">
                <span class="material-icons-outlined">poll</span> Stations
            </a>
        </li>
        <li class="sidebar-list-item">
            <a href="{{ route('services.index') }}">
                <span class="material-icons-outlined">build</span> Services
            </a>
        </li>
        <li class="sidebar-list-item">
            <a href="{{ route('typesVehicules.index') }}">
                <span class="material-icons-outlined">directions_car</span> TypeVehicule
            </a>
        </li>
        <li class="sidebar-list-item">
            <a href="{{ route('archives.index') }}">
                <span class="material-icons-outlined">archive</span> Archive
            </a>
        </li>
        <li class="sidebar-list-item">
            <a href="{{ route('maintenances.index') }}">
                <span class="material-icons-outlined">build_circle</span> Maintenances
            </a>
        </li>
        <li class="sidebar-list-item">
            <a href="{{ route('vidanges.index') }}">
                <span class="material-icons-outlined">oil_barrel</span> Vidanges
            </a>
        </li>
    </ul>
</aside>
