<div class="media">
        <div class="media-left media-middle">
                <a href="{{ route('profile.index', ['fullname' => $user->getName()]) }}">
                        <img class="media-object" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABICAQAAAD/5HvMAAABl0lEQVR4Ae3ZwWoTURSH8W+gnRE6omttF+30FYZS+gS676qlfYIm6jvoNvocupOQECQEsjLJIIlhSJ5DSbKa0aUEJ/fG3DkT8Pz+L/At7uLAxY5SSqmAOl/5QV7CVox4RcAWTpiQl7wJz7EUmHOcbIyPlTq50OpYGYgFDbHyUyxogZVcbvJBGpTR5IZTDvE545ZWtUFTYtZdkFYV9IUj/iakW0XQlCOKhKTSQRkxm1xKBzUxacsG3WByJxt0ikkkG3SISSAb5O9b0Bkm57JBt5jcywa1MOnIBuVcsMkVuXRQSkiRx8zlg3K6hAU5varOj5RL1l0xr/ZibHNHREDAOfd09IR1HqRBGrRkRo/Pv9djxrK6oDENronw+JNHxDUNxpJBI2ocY3JMjaTsoIyPxGwj5hNZWUFJQYw5Kikj6D0H/KsDPrgOesuu3rkM6uOxK4++u6AXuPDSXdATXHjqLsgVDTLQ8+O/CVrt29dCIhY0wMobsaAHrDxiKpLzDR9LJ3wXyHnGFgJeM2RR0lMe8ICPUkopG78ANJbTVwrpr1QAAAAASUVORK5CYII=" alt="{{ $user->getName() }}" />
                </a>
        </div>
        <div class="media-body media-middle">
                <h5 class="media-heading"><a href="{{ route('profile.index', ['fullname' => $user->getName()]) }}">{{ $user->getName() }}</a></h5>
        </div>
        
</div>
