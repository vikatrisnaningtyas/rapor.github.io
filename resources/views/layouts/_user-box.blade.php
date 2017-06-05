<!-- User -->
<div class="user-box">
    <div class="user-img">
        <img src="{{ asset('images/users/avatar-1.jpg') }}" alt="user-img" title="Mat Helme"
             class="img-circle img-thumbnail img-responsive">
    </div>
    @if(auth()->user()->role('admin'))
        <h5><a href="#">Admin : {{ Auth::user()->username }}</a></h5>
    @else
        <h5><a href="#">{{ Auth::user()->guru->nama_guru }}</a></h5>
    @endif
    <ul class="list-inline">
        <li>
            <a href="#">
                <i class="zmdi zmdi-settings"></i>
            </a>
        </li>

        <li>
            <a href="{{ url('/logout') }}" class="text-custom"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="zmdi zmdi-power"></i>
            </a>

            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
    </ul>
</div>
<!-- End User -->