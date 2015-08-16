<div class="page-sidebar ">


    <!-- MAIN MENU - START -->
    <div class="page-sidebar-wrapper" id="main-menu-wrapper">

        <ul class='wraplist'>

            <li class="">
                <a href="index.html">
                    <i class="fa fa-dashboard"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li @if($menu == 'user') class="open" @endif>
                <a href="{{ url('/admin/users') }}">
                    <i class="fa fa-users"></i>
                    <span class="title">Usuarios</span>
                </a>
            </li>
            <li @if($menu == 'genre')  class="open" @endif>
                <a href="javascript:;">
                    <i class="fa fa-cogs"></i>
                    <span class="title">Mantenimientos</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu" @if($menu == 'genre')  style="display:block;" @endif>
                    <li>
                        <a href="{{ url('/admin/genres') }}" @if($menu == 'genre') class="active" @endif>Genero</a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="javascript:;">
                    <i class="fa fa-users"></i>
                    <span class="title">Staff</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu" >
                    <li>
                        <a class="" href="form-elements.html">Directores</a>
                    </li>
                    <li>
                        <a class="" href="form-components.html">Actores</a>
                    </li>
                    <li>
                        <a class="" href="form-wizard.html">Guionistas</a>
                    </li>
                </ul>
            </li>


            <li class="">
                <a href="javascript:;">
                    <i class="fa fa-map-marker"></i>
                    <span class="title">Peliculas</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu" >
                    <li>
                        <a class="" href="ui-vectormaps.html">Vector Maps</a>
                    </li>
                    <li>
                        <a class="" href="ui-googlemaps.html">Google Maps</a>
                    </li>
                    <li>
                        <a class="" href="ui-googlemapfull.html">Advanced Google Maps</a>
                    </li>
                </ul>
            </li>



        </ul>

    </div>
    <!-- MAIN MENU - END -->
</div>