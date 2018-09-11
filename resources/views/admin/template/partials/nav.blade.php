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
                        <li class="second_list second_list_border"><a href="#" class="main_menu_second">Usuarios</a></li>
                        <li class="second_list second_list_border"><a href="#" class="main_menu_second">Roles</a></li>
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
                
                <h4>about us</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi euismod placerat dui et tincidunt. Sed sollicitudin posuere auctor. Phasellus at
                ultricies nisl. Integer at leo eros. Ut nec lorem id orci convallis porta. Donec pharetra neque eu velit dictum molestie. </p>
                
            </div> <!-- END #footer_about -->
            
            <div id="footer_explore" class="footer_info">
                
                <h4>explore</h4>
                <ul>
                    <li><a href="index.html">home</a></li>
                    <li><a href="#">about us</a></li>
                    <li><a href="#">services</a></li>
                    <li><a href="portfolio.html">portfolio</a></li>
                    <li><a href="#">blog</a></li>
                </ul>
                
            </div> <!-- END #footer_about -->
            
            <div id="footer_browse" class="footer_info">
                
                <h4>browse</h4>
                <ul>
                    <li><a href="#">careers</a></li>
                    <li><a href="#">press &amp; media</a></li>
                    <li><a href="contact.html">contact us</a></li>
                    <li><a href="#">terms of service</a></li>
                    <li><a href="#">privacy policy</a></li>
                </ul>
                
            </div> <!-- END #footer_about -->
            
            <div id="footer_contact" class="footer_info">
                
                <h4>contact us</h4>
                <p><span class="bold_text">BisLite Inc.</span>
                <br />
                Always Street 265
                <br />
                0X - 125 - Canada
                <br />
                <br />
                Phone: 987-6543-210
                <br />
                Fax: 987-6543-210</p>
                
            </div> <!-- END #footer_about -->
            
            <div id="footer_connect" class="footer_info">
                
                <h4>connect with us</h4>
                
                <ul>
                    <li><a href="#" id="facebook" title="Facebook">Facebook</a></li>
                    <li><a href="#" id="dribbble" title="Dribbble">Dribbble</a></li>
                    <li><a href="#" id="pinterest" title="Pinterest">Pinterest</a></li>
                    <li><a href="#" id="linkedin" title="LinkedIn">LinkedIn</a></li>
                    <li><a href="#" id="skype" title="Skype">Skype</a></li>
                    <li><a href="#" id="sharethis" title="Share This">ShareThis</a></li>
                </ul>
                
            </div> <!-- END #footer_about -->
            
            <p id="copyright">&copy; Copyright 2012 - BisLite Inc. All rights reserved. Some free icons used here are created by Brankic1979.com.
            <br />
            Client Logos are copyright and trademark of the respective owners / companies.</p>
            
            <a href="index.html" id="footer_logo">BisLite</a>
        
        </div> <!-- END .container -->
        
    </div> <!-- END #footer -->