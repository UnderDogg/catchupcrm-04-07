<header>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="height:60px;">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" id="left-menu-toggle" class="menu-toggle" title="{{ trans('texts.toggle_navigation') }}">
                <div class="navbar-brand">
                    <i class="fa fa-bars hide-phone" style="width:32px;padding-top:2px;float:left"></i>
                    {{-- Per our license, please do not remove or modify this link. --}}
                    <img src="{{ asset('images/invoiceninja-logo.png') }}" width="193" height="25" style="float:left"/>
                </div>
            </a>
        </div>

        <a id="right-menu-toggle" class="menu-toggle hide-phone pull-right" title="{{ trans('texts.toggle_history') }}"
           style="cursor:pointer">
            <div class="fa fa-bars"></div>
        </a>

        <div class="collapse navbar-collapse" id="navbar-collapse-1">
            <div class="navbar-form navbar-right">

                @if (Auth::check())

                @endif

                <div class="btn-group user-dropdown">
                    <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                        <div id="myAccountButton" class="ellipsis"
                             style="max-width:130px;">
                            @if (1 == 0)
                                {{--{{ Auth::user()->account->getDisplayName() }}--}}
                            @else
                                {{--{{ Auth::user()->getDisplayName() }}--}}
                            @endif
                            <span class="caret"></span>
                        </div>
                    </button>
                    <ul class="dropdown-menu user-accounts">
                        {{--//session(SESSION_USER_ACCOUNTS)--}}
                        @if (0 == 1)
                            {{--@foreach (session(SESSION_USER_ACCOUNTS) as $item)
                                @if ($item->user_id == Auth::user()->id)
                                    @include('user_account', [
                                        'user_account_id' => $item->id,
                                        'user_id' => $item->user_id,
                                        'account_name' => $item->account_name,
                                        'user_name' => $item->user_name,
                                        'logo_url' => isset($item->logo_url) ? $item->logo_url : "",
                                        'selected' => true,
                                    ])
                                @endif
                            @endforeach
                            @foreach (session(SESSION_USER_ACCOUNTS) as $item)
                                @if ($item->user_id != Auth::user()->id)
                                    @include('user_account', [
                                        'user_account_id' => $item->id,
                                        'user_id' => $item->user_id,
                                        'account_name' => $item->account_name,
                                        'user_name' => $item->user_name,
                                        'logo_url' => isset($item->logo_url) ? $item->logo_url : "",
                                        'selected' => false,
                                    ])
                                @endif
                            @endforeach--}}
                        @else
                            {{--@include('user_account', [
                                'account_name' => Auth::user()->account->name ?: trans('texts.untitled'),
                                'user_name' => Auth::user()->getDisplayName(),
                                'logo_url' => Auth::user()->account->getLogoURL(),
                                'selected' => true,
                            ])--}}
                        @endif
                        <li class="divider"></li>
                        {{--@if (Utils::isAdmin())
                            @if (count(session(SESSION_USER_ACCOUNTS)) > 1)
                                <li>{!! link_to('/manage_companies', trans('texts.manage_companies')) !!}</li>
                            @elseif (!session(SESSION_USER_ACCOUNTS) || count(session(SESSION_USER_ACCOUNTS)) < 5)
                                <li>{!! link_to('/invoice_now?new_company=true&sign_up=true', trans('texts.add_company')) !!}</li>
                            @endif
                        @endif--}}
                        <li>{!! link_to('#', trans('texts.logout'), array('onclick'=>'logout()')) !!}</li>
                    </ul>
                </div>

            </div>

            <form id="search-form" class="navbar-form navbar-right" role="search">
                <div class="form-group">
                    <input type="text" id="search" style="width: 240px;padding-top:0px;padding-bottom:0px"
                           class="form-control"
                           placeholder="{{ trans('texts.search') . ': ' . trans('texts.search_hotkey')}}">
                </div>
            </form>

            {{--@if (false && Utils::isAdmin())
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        @section('self-updater')
                            <a href="{{ URL::to('self-update') }}" class="dropdown-toggle">
                                <span class="glyphicon glyphicon-cloud-download"
                                      title="{{ trans('texts.update_invoiceninja_title') }}"></span>
                            </a>
                        @show
                    </li>
                </ul>
            @endif--}}

            <ul class="nav navbar-nav hide-non-phone" style="font-weight: bold">
                {{--@foreach ([
                    'dashboard' => false,
                    'clients' => false,
                    'products' => false,
                    'invoices' => false,
                    'payments' => false,
                    'recurring_invoices' => 'recurring',
                    'credits' => false,
                    'quotes' => false,
                    'tasks' => false,
                    'expenses' => false,
                    'vendors' => false,
                    'reports' => false,
                    'settings' => false,
                ] as $key => $value)
                    {!! Form::nav_link($key, $value ?: $key) !!}
                @endforeach--}}
            </ul>
        </div><!-- /.navbar-collapse -->

    </nav>
</header>