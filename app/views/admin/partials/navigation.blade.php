<!-- nav -->
<nav class="nav-primary hidden-xs">
    <ul class="nav">
        <li  class="active">
            <a href="{{ url('user') }}"class="active">
                <i class="fa fa-dashboard icon"><b class="bg-danger"></b></i>
                <span class="pull-right"><i class="fa fa-angle-down text"></i><i class="fa fa-angle-up text-active"></i></span>
                <span>Accueil</span>
            </a>
        </li>
        <li>
            <a href="{{ url('user/edit') }}">
                <i class="fa fa-pencil icon"><b class="bg-warning"></b></i>
                <span class="pull-right"><i class="fa fa-angle-down text"></i><i class="fa fa-angle-up text-active"></i></span>
                <span>Mes données</span>
            </a>
        </li>
        <li>
            <a href="{{ url('user/see') }}">
                <i class="fa fa-columns icon"><b class="bg-info"></b></i>
                <span class="pull-right"><i class="fa fa-angle-down text"></i><i class="fa fa-angle-up text-active"></i></span>
                <span>Mes riiinglinks</span>
            </a>
        </li>
    </ul>
</nav>
<!-- / nav -->