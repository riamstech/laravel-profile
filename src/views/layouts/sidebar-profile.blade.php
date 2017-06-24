<ul class="list-group">
    <a href="{{ route('profile.index') }}" class="list-group-item ">{{ trans('profileLang::profile.sidebar.account') }}</a>
    <a href="{{ route('profile.information') }}" class="list-group-item">{{ trans('profileLang::profile.sidebar.information') }}</a>
    @if(config()->get('profile.activity'))
    <a href="{{ route('profile.activity') }}" class="list-group-item">{{ trans('profileLang::profile.sidebar.activity') }}</a>
    @endif
    <a href="{{ route('logout') }}"
       class="list-group-item"
       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
        {{ trans('profileLang::profile.sidebar.logout') }}
    </a>
</ul>