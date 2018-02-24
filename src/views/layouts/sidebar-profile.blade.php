<div class="list-group">
    <a href="/profile" class="list-group-item list-group-item-action">{{ trans('profileLang::profile.sidebar.account') }}</a>
    <a href="/profile/information" class="list-group-item list-group-item-action">{{ trans('profileLang::profile.sidebar.information') }}</a>
    @if(config()->get('profile.activity'))
    <a href="/profile/activity" class="list-group-item list-group-item-action">{{ trans('profileLang::profile.sidebar.activity') }}</a>
    @endif
    <a href="{{ route('logout') }}"
       class="list-group-item list-group-item-action"
       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
        {{ trans('profileLang::profile.sidebar.logout') }}
    </a>
</div>
