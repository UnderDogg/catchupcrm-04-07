<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ URL::route('pxcms.admin.index') }}">
            {{ Config::get('core::app.site-name') }}
        </a>
    </div>

    @if (!Auth::guest())
    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> {{ Auth::user()->username }} <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="{{ URL::Route('pxcms.user.logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
            </ul>
        </li>
    </ul>
    @endif
</nav>

@if( !Auth::guest() && Auth::user()->isAdmin() )
<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
    {{ Menu::handler('acp')->render() }}
    </div>
</nav>
@endif