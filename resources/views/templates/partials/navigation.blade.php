<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
        <div class="container">
                <div class="navbar-header">
                        <a class="navbar-brand" href="{{ route('home') }}">RemarQ</a>
                </div>
                <div class="collapse navbar-collapse">
                        @if (Auth::check())
                        <ul class="nav navbar-nav">
                                <li><a href="#" class="nav-item nav-link">Timeline</a></li>
                                <li><a href="#" class="nav-item nav-link">Friends</a></li>
                        </ul>
                        <form class="navbar-form navbar-left" action="#" method="post" role="search">
                                <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Search" name="query">
                                </div>
                                <button class="btn btn-default" type="submit">Search</button>
                        </form>
                        @endif
                        <ul class="nav navbar-nav navbar-right">
                                @if (Auth::check())
                                        <li><a href="#">Aman</a></li>
                                        <li><a href="#">Update Profile</a></li>
                                        <li><a href="#">Sign Out</a></li>
                                @else
                                        <li><a href="{{ route('auth.signup') }}">Sign Up</a></li>
                                        <li><a href="{{ route('auth.signin') }}">Sign In</a></li>
                                @endif
                        </ul>
                </div>
        </div>
</nav>
