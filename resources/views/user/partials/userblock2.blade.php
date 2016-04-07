<div class="panel panel-primary">
        <div class="panel-heading text-center">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAADACAQAAAD41aSMAAAErElEQVR4Ae3cTWtUVwCH8ZMETDSZWNSFS3Wiy6q1aV0E3AjBLqyKr7RrXYna4jIuBW2wBZs0IVaXtiIIghtx4S6QjU3pQsS6UIyZ+NIWktZMME+F0jeSyUwyc25yZ57n/w38QZx755wJs2VmZmZmZmZmZmZmZmZmZmZmZkaGIwwwxAvyVHt5njPEAIfJEMpfoNxt4jK/U4tNcIm2xQVYTjdT1HJ5ztO0WAAb+QmDYbKLAbCVMf7KcmxOGmAjY/w3CbJJAqyY8cfHhmlKDqCbmdm5pAA2McXMLE82GYDLzJ4NJAHQWvCxy8ZpiQ9whMLZwfgAAxTO+uIDDFE4G4wP8ILCWS4+QJ7C2WR8AJszAQSo0QQQwAQQwAQQIHajXOUEnWRZxbK3W0WWTk7wHTkB4vaSi7QT5tgHfM1LAWL0lJOsIJSwZj5jRIBKlucczYR5rKVyR8YEeMAWwgL2Hg8FKL8bZRyCbeWmAOXVTz2hjDVwSYCF108ofwslEOAGDRUBaOCmAPPvARlChdbKQwHmV54thApuG1MCRD5nWWQXBCi9pzRXHCDDqACldooQYacFKK2XrIgC0MIrAUrpIiHSvhGglNqjAWwXoHijhGirY0yAYl0lRNw1AYp1IirAKQGK1RkV4CMBipWNCrBRgGKtigqwRoBiLYsK0CiAAP4JEsD/hP0YKoAPYr6KEMCXcb6OFiDJL2R6BSilF34l6ZfyNQ4w4rEUD2ZVD4BHEz2cu5KfWUAeT6+v+ePpXtDwilKDV5S8pFfz11S3LvCTj9dUK9QUX9Ayz8euC17UrmwjfF7i83ELpxklSv5YRw8fUjfH+/7t9PIKQIB45fiek+yijTU0vt0a2tjFSa4x5s/VmACRE0AAE0AAE0AAE0AAE0AAE0AAEyB+ArzmPrfooYtj7GUnHbz/dh3sZC/H6KKHW9xnUoDK9ojrdLGbdSUe1KpnHbvp4jqPBFh4bxiim32sJZSxteyjmyHeCFB6I3zLIVYTKrjVHOIyIwLM3WO+pIM6QqTV08FXPBZgZuNcmfFPH2t1dHCFCQH+bpijZAgJL8NRhgW4QydhEdfJndoFuM02whLYNm7XHsAPdBKW0DoZrh2AcY5TT1hiq+c4E7UAcJcNhCW6LHerG2CaM9QRlvDqOMN0tQJMsJ+Qgu1nohoBfqWdkJK181u1AfzBDkKKtoPX1QQwzR5CyraX6eoB6CGkcL3VAvCETCoBWnlSHQCfEFK6T6sB4BWNqQVo4pf0A/QQUrze9AN8nGqAPekH2JxqgC3pB1iZaoB30g8QUj4QQAABBBBAAAEEEEAAAUwAAUwAAUwAAWovAQTIUzibjA/wnMJZLj7AEIWzwfgAAxTO+uIDHKZwdiA+QIYJZs/GaY4PELjE7Fk/IQmANvLMzCbZkAxA4Dwzs7OEpACW8yP/z+7RmBxAIEuOf7NnrCckCRDYLME/PeNdQtIAgSzDgN1jPWExAAJNnCNPLTfJWRoJ8QEKL8sA49Ri4/SX/7sXgUqshYP0MUiOSaq9SXIM0seB4k+9kQHcEgVwAgjgBBDACSCAE0AAJ4AATgABnAACOAEEcAII4AQQwAkggPsT0PwuGvZZGWAAAAAASUVORK5CYII=" alt="{{ $mainuser->getName() }}" width="100%"/>
        </div>
        <ul class="list-group text-center">
                <li class="list-group-item">
                        <h4><a href="{{ route('profile.index', ['fullname' => $mainuser->getName()]) }}">{{ $mainuser->getName() }}</a></h4>
			<p class="text-muted">
                                {{ $mainuser->getEmail() }}
                        </p>
                </li>
		@if (!(Auth::user()->id == $mainuser->id))
			@if (Auth::user()->isFollowing($mainuser))
				<li class="list-group-item">
					<a href="{{ route('studentfollows.remove', ['username' => $mainuser->getName()]) }}" class="btn btn-default"><span class="glyphicon glyphicon-ok"></span> Following</a>
				</li>
			@else
				<li class="list-group-item">
					<a href="{{ route('studentfollows.add', ['username' => $mainuser->getName()]) }}" class="btn btn-primary">Follow</a>
				</li>
			@endif
		@endif
        </ul>
</div>
