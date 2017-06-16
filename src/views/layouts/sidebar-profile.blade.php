<ul class="list-group">
    <a href="/profile" class="list-group-item ">Account</a>
    <a href="/profile/information" class="list-group-item">İnformation</a>
    @if(config()->get('profile.activity'))
    <a href="/profile/activity" class="list-group-item">Activity</a>
    @endif
    <a href="{{ route('logout') }}"
       class="list-group-item"
       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
        Logout
    </a>
</ul>