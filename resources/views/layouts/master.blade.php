<html>
    <head>
        <title>Zoom Mag</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/desktop.css') }}">
        <link rel="stylesheet" href="{{ asset('css/mobile.css') }}">
        <link rel="stylesheet" href="{{ asset('css/tablet.css') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="https://fonts.googleapis.com/css?family=Baloo+2&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('fonts/_flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('fonts/flaticonV2/flaticon.css') }}">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
              integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
        integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <style>
            h1{
                font-family: 'Baloo 2', cursive;
            }
            p{
                font-family: 'Raleway', sans-serif;
            }
        </style>
    </head>
<body class="bg-white-smoke text-grey-darker">
    <div class="w-100">
        <div class="w-100 flex">
            <div class="w-20 bg-white shadow-sm" >
                <div class="fixed w-20 bg-white" style="height: 100vh">
                    <div class="w-80 mx-auto py-5 text-center">
                        <p class="text-3xl line-height-small">Blog Dash</p>
                        <span>
                           Role :  {{ Auth::user()->user_type }}
                        </span>
                    </div>
                    <div class="w-70 mt-5 mx-auto pl-3">
                        <ul class="list">
                            @can('admin')
                            <li class="text-lg py-2"><a class="text-grey-darker" href="#"><i class="fas fa-chart-bar mx-2 text-orange"></i>Web Analytics<a></li>
                            @endcan

                            <li class="text-lg py-2"><a class="text-grey-darker" href="/all/articles"><i class="fas fa-eye mx-2 text-orange"></i>View Articles<a></li>
                            <li class="text-lg py-2"><a class="text-grey-darker" href="/article/create"><i class="fas fa-plus-square mx-2 text-orange"></i>Post Article<a></li>
                            <li class="text-lg py-2"><a class="text-grey-darker" href="/category/view"><i class="fas fa-align-center mx-2 text-orange"></i>Categories<a></li>   
                            @can('admin')     
                            <li class="text-lg py-2"><a class="text-grey-darker" href="{{ Route('admin.users.index') }}"><i class="fas fa-users-cog text-orange mx-2"></i>Manage User<a></li>
                            @endcan
                                <li class="text-lg py-2">
                                <a class="text-grey-darker" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                         <i class="fas fa-sign-out-alt text-orange mx-2"></i>
                                            {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li> 
                                     
                        </ul>
                    </div>
                </div>
            </div>
            <div class="w-80">
                <div class="bg-white py-2 pb-3 w-100 text-right pr-3">
                    <ul class="list inline-block">
                        <li class="text-sm mx-3 text-grey-darker">Hi, {{ Auth::user()->name }}</li>
                        
                    </ul>    
                </div>
                @yield('content')   
            </div>
        </div>
    </div>

        



</body>
</html>
