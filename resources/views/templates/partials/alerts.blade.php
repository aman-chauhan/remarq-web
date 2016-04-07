@if (Session::has('info'))
	<div class="alert alert-success fade in" role="alert" style="opacity:0.8;">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <p>{{ Session::get('info') }}</p>
        </div>
@endif
