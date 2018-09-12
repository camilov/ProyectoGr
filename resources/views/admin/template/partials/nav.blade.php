<div id="header">
        
        <div class="container">
        
        <h1><!--<a href="index.html">BisLite</a>--></h1>
        
        <div id="main_menu">
        
            <ul>
             <!--   <li class="first_list"><a href="index.html" class="main_menu_first main_current">home</a></li>
                <li class="first_list"><a href="#" class="main_menu_first">about us</a></li>-->
                <li class="first_list with_dropdown">
                    <a href="#"  class="main_menu_first">Administrador</a>
                    <ul>
                        <li class="second_list second_list_border"><a href="{{route('user.index')}}" class="main_menu_second">Usuarios</a></li>
                        <li class="second_list second_list_border"><a href="{{route('rol.index')}}" class="main_menu_second">Roles</a></li>
                        <li class="second_list second_list_border"><a href="{{route('actividad.index')}}" class="main_menu_second">Actividades</a></li>
                        <li class="second_list second_list_border"><a href="#" class="main_menu_second">Responsabilidades</a></li>
                    </ul>
                </li>
                <li class="first_list with_dropdown">
                    <a href="portfolio.html" class="main_menu_first">Inventario</a>
                    <ul>
                        <li class="second_list second_list_border"><a href="#" class="main_menu_second">Activos</a></li>
                    </ul>
                </li>
                <!--<li class="first_list"><a href="#" class="main_menu_first">blog</a></li>
                <li class="first_list"><a href="contact.html" class="main_menu_first">contact us</a></li>-->
            </ul>
        
    </div> <!-- END #main_menu -->
    
</div> <!-- END .container -->
</div>

<div id="main_content">
            
        <div id="portfolio_area">
            
            <div class="container">
            
                    @yield('content')
            </div> <!-- END .container -->
            
        </div> <!-- END #portfolio_area -->
</div>
<div id="footer">
        
        <div class="container">
            
            <div id="footer_about" class="footer_info">
                
                <h4></h4>
                
            </div> <!-- END #footer_about -->
            
            
        </div> <!-- END .container -->
        
    </div> <!-- END #footer -->