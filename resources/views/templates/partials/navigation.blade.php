<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
        <div class="container">
                <div class="navbar-header">
                        <a class="navbar-brand" href="{{ route('home') }}">RemarQ</a>
                </div>
                <div class="collapse navbar-collapse">
                        @if (Auth::check())
                        <ul class="nav navbar-nav">
                                <li><a href="{{ route('home') }}" class="nav-item nav-link">Timeline</a></li>
                                <li><a href="{{ route('studentfollows.index') }}" class="nav-item nav-link">Students</a></li>
                                <li><a href="{{ route('coursefollows.index') }}" class="nav-item nav-link">Courses</a></li>
                        </ul>
                        <form class="navbar-form navbar-left" action="{{ route('search.results') }}" role="search">
                                <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Search people" name="query">
                                </div>
                                <button class="btn btn-default" type="submit">Search</button>
                        </form>
                        @endif
                        <ul class="nav navbar-nav navbar-right">
                                @if (Auth::check())
                                        <li><a href="{{ route('profile.index', ['fullname' => Auth::user()->getName()]) }}"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABICAQAAAD/5HvMAAADUUlEQVR4Ae3XT2gcVRzA8e+iu2u7u8FD1q0VJH8KUrwoNZSasBW1rQeh4Ao9tLQnKbQ20F4ScvTiyVRaQU9JgxYqXhKSkJDW7japIUi1CBItyBKweglL8GKzu2V/7lH0zbzfzLxt9rCf73kfj5mdN7+ho211dKQ4xhhTrLFBhVqzChusMcUYR9nNE5TjEivUEJ+qLHOR52i5N5jjMaKszix5WuZNvkNCtMJhnNvL10iErrMHh07wFxKxLQo4keQLxFFXSRBRF0XEYTdJE0GWHxHH3SNLSF2K7TSY5yS9xEnQxykWVFvKEEJScbN+ZoD/Osg6YukWCQL7XLFsCpM0txFLVwjohOLqpPCSVlyl90Bvr/XcaTCAn0OKcymH2g3E0jw2i4ilL/XvLLF2EpvTiLU8GqpXaC82/Yi1O7oBQxTFsUkiioawmkMUJRxtaAaLnHL86sNmn3KEy+LrEqLqFDZnEFXD+FpBVC1gs4SoKuEjRQ1RdhA/g4iybXbh6Riibp00XjI8QNQdwdMYoo/bHlvKUEL0MYqnKSRQ6xwy3KwHSKAm8bSGBG6R0/STbLaPMywhgVvF0wayA5XxVEF2oE081ZAdqNr+G2qnWxb9T/2IXygy26zErzxy+6fWP/YN7vMJBfqI8W8x+nmfcX6K/tjrD8bvOc/z2LzAMPcQRRPhXx0NbnCAIAb4hgbi2wiejlquzKuE8Ro/ID69jafdPg/+OE8R1tNcCTd+wDJi7COi+hgxVsTXRY/PlRhRxbiLGLqArxx1w4/ewYV3DSvX6MZi1vCzLlx41rDyNFZ5w88+wIWzhpVfx8D+5fE3rxDVAcNrpYjKYeR/PeRFoujhD8MxO4jSdcOWfouwpR7KhhWvobaHLdNVCn1S/2lYrUIWPQoeo8ZZgolxjm3E0HEC+gwxtsRLaO3nW8TYZQJLcBMxVmeC/di8zCSPPT+d4oSQ8Z1nljlHDya9nOeu79SQIqSsdcT6nTkuM8KHzUb5lHkeWse7biLIcAtx2CIpIkpwFXHUOHGcKLCFRKzCcRzK8RUSugbXyOJcnjtIiIoM0TJDzFBHlNWYZpCWyzJMiSri0zZFLtDNE7SLI4wyySplNqk226TMKhOM8BbP0KY6Ojr+AQMlEFCQ4KNFAAAAAElFTkSuQmCC" alt="" height="20px"/> {{ Auth::user()->getName() }}</a></li>
                                        <li><a href="{{ route('profile.edit') }}">Update Profile</a></li>
                                        <li><a href="{{ route('auth.signout') }}">Sign Out</a></li>
                                @else
                                        <li><a href="{{ route('auth.signup') }}">Sign Up</a></li>
                                        <li><a href="{{ route('auth.signin') }}">Sign In</a></li>
                                @endif
                        </ul>
                </div>
        </div>
</nav>
