<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <style>
            .task-list {
                margin-top: 20px;
            }
            .task-item {
                display: flex;
                align-items: center;
                margin-bottom: 10px;
            }
            .task-item input[type="checkbox"] {
                margin-right: 10px;
            }
            .footer {
                position: fixed;
                bottom: 0;
                width: 100%;
                background-color: #f8f9fa;
                padding: 10px 0;
                text-align: center;
            }
        </style>
    </head>

    <body>
    @yield('content')
    @livewireScripts

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <span class="text-muted">Todo List App &copy; 2024</span>
        </div>

        <div class="row justify-content-center mt-4">
            <div class="col-md-6 text-center">
                @guest
                    <a href="{{ route('login') }}" class="btn btn-dark">
                        <span>Login</span>
                        <i class="fa fa-sign-in ml-2" aria-hidden="true"></i>
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-dark">
                            <span>Register</span>
                            <i class="fa fa-user-plus ml-2" aria-hidden="true"></i>
                        </a>
                    @endif
                @endguest

                @auth
                    <div class="btn-group">
                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span>Welcome, {{ Auth::user()->name }}</span>
                            <i class="fa fa-user ml-2" aria-hidden="true"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endauth
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>
