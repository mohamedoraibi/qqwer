<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="index.html">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Main</span>
{{--                {{request()->problem->where('key', 'left-sidebar-main-title')->value('english')}}--}}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">
{{--                    @if(Request::path() === 'your url here')--}}
{{--                        // code--}}
{{--                    @endif--}}
{{--                    {{$Translates->where('key','main_sidebar_menu_all_problems')->first()->arabic}}--}}
                    {{$Translates->where('key', '=', 'main_sidebar_menu_all_problems')->pluck(app()->getLocale())->first()}}
                </span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
{{--                    <li class="nav-item"> <a class="nav-link" href="/{{app()->getLocale()}}/problem/all">{{$Translates->pluck(app()->getLocale())->first()}}</a></li>--}}
                    <li class="nav-item"> <a class="nav-link" href="/{{app()->getLocale()}}/problem/all">{{$Translates->where('key', '=', 'all_problems')->pluck(app()->getLocale())->first()}}</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/{{app()->getLocale()}}/problem/new">{{$Translates->where('key', '=', 'add_new_problem')->pluck(app()->getLocale())->first()}}</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/{{app()->getLocale()}}/problem/tickets">{{$Translates->where('key', '=', 'my_tickets')->pluck(app()->getLocale())->first()}}</a></li>
                </ul>
            </div>
        </li>

    </ul>
</nav>
