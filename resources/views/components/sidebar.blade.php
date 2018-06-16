<ul id="slide-out" class="sidenav sidenav-fixed">
    <li>@auth
            <div class="user-view">
                <div class="background purple darken-4">

                </div>
                <a href="#name"><span class="white-text name">{{Auth::user()->name}}</span></a>
                <a href="#email"><span class="white-text email">{{Auth::user()->email}}</span></a>
            </div>
        @endauth
    </li>
    <li><a href="{{ route('home') }}"><i class="material-icons">assignment</i>Tasks</a></li>
    <li><a href="{{ route('bookmark-page') }}"><i class="material-icons">bookmarks</i>Bookmarks</a></li>
    <li><a href="{{ route('settings-page') }}"><i class="material-icons">settings</i>Settings</a></li>
    <hr>
    <li>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><i class="material-icons">exit_to_app</i>Logout</a>
    </li>
</ul>

<form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>