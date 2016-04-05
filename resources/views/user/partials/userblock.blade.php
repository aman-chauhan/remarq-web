<div class="media">
        <div class="media-left media-middle">
                <a href="{{ route('profile.index', ['fullname' => $user->getName()]) }}">
                        <img class="media-object" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAQAAABIkb+zAAACHUlEQVR4Ae3asUpbURjA8b9REouxaUq7xDxAO0joIkFcg8UXsGLfRFzVSksKJiSoo1bsC+hUpINz66CooIl2FoQMyWBOd2mae25ybr7Tfr/vBe4fTm74Loe/UEoppZRSb6hyQQsT8bQ4p0KOnjxhGzPQaVNlNPzjf8cImKOwCdsYIVMJd/aNmGmTw1oVI2jKWLsQFXCGtZaogCbWjLDRAA3wK+CaFQpkiBMnQ4FVav4E1JgnxmMxFrjxIWCXMTpJsic94CPdFCUH7NLdEPtSA2qMEcQ4tzID5glqUWLANTGCGqYuL2AFG+vyAgrYeCsvIIONrLyAODYSGqBH6J/7Ea/6/hqt+f5HZnhHUO8xEgPqJAniKb9kBhi+0N0QXyUvNJ+6Pv5n6SvlHkk6GWffh6X+hgViPDbMIrf+fFap8YFZsiRIkGWWder6YUsDNEADNOA/CmhwwiE7bLHFDoec0PAh4J4Dlpljgj+ZYI5lDriXGHDJGjOMEMQIM6xxKSWgwSZThDHFJo3BBtyxRJpePGeJu8EEPFAkTT+kKfIQdcAVefopz1WUAce8oN9echxVwA9SuJDiZxQBTV7hymua7gNKuFR2H5DHpWn3ASlceuY+wDEZARqgAbqRaYAG+H/x9VxUwCnWKqICNrCWoy3o+v0k+HwBv0QooxxhBMw3EhA2oTrgg9SmRIKe5ChzRnMAL85TNpikI6WUUkop9RttA7GO7EaV8gAAAABJRU5ErkJggg==" alt="{{ $user->getName() }}" />
                </a>
        </div>
        <div class="media-body media-middle">
                <h4 class="media-heading"><a href="{{ route('profile.index', ['fullname' => $user->getName()]) }}">{{ $user->getName() }}</a></h4>
                <p class="">
                        {{ $user->getEmail() }}
                </p>
        </div>
</div>
