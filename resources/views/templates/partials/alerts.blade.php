@if (Session::has('info'))
        <div class="alert alert-success fade in" role="alert">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <p>{{ Session::get('info') }}</p>
        </div>
@endif
