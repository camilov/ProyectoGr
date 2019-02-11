<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Menu de navegacion</li>
            <li class="active treeview menu-open">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Admin</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('user.index')}}"><i class="fa fa-circle-o"></i> Usuarios</a></li>
                    <li class="active"><a href="{{route('rol.index')}}"><i class="fa fa-circle-o"></i> Roles</a></li>
                    <li class="active"><a href="{{route('actividad.index')}}"><i class="fa fa-circle-o"></i> Actividades</a></li>
                    <li class="active"><a href="{{route('responsabilidad.index')}}"><i class="fa fa-circle-o"></i> Responsabilidades</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Inventario</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('activo.index')}}"><i class="fa fa-circle-o"></i> Activos</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>Riesgo</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                   <!-- <li><a href="{{route('probabilidad.index')}}"><i class="fa fa-circle-o"></i> Probabilidad</a></li>-->
                   <!-- <li><a href="{{route('impacto.index')}}"><i class="fa fa-circle-o"></i> Impacto</a></li>-->
                    <li><a href="{{route('riesgo.index')}}"><i class="fa fa-circle-o"></i> Identificacion del riesgo</a></li>
                    <li><a href="{{route('analisisRs.index')}}"><i class="fa fa-circle-o"></i> Analisis del riesgo</a></li>
                    <li><a href="{{route('evaluacionRs.index')}}"><i class="fa fa-circle-o"></i> Evaluacion del riesgo</a></li>
                </ul>
            </li>

            <!--CONTROL-------------------------------------------------------------------------------->       
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Controles</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('control.index')}}"><i class="fa fa-circle-o"></i>Controles</a></li>
                </ul>
            </li>
            

            <!--PLAN----------------------------------------------------------------------------------->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Plan</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('plan.index')}}"><i class="fa fa-circle-o"></i>plan</a></li>
                </ul>
            </li>
            
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>