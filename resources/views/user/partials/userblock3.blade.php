<div class="media">
        <div class="media-left media-middle">
                <a href="{{ route('profile.index', ['fullname' => $user->getName()]) }}">
                        <img class="media-object" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABsAAAAbCAQAAAAn3TzeAAABSklEQVR4AcXRz0pCQRTH8a8bF13d+OctSnqMwMhSdB8IQU8QFoW0aHXxio9Qq9qIu0LXYfUEtS9Q2+hNDTSDQeZwrzO49DOr+ztzODN32Lg4JTxadGhRo0iMtdI0+GERWD51UmCX45uFcQ3IYnHCH7Kxyy0vyPecsnmSNE3YB+WAqTSuTkwHjneBuELyPkkCGoGbbCMygYqHIB76ezvWNh8HrRT6b5eIaqhWQPNCpSk5FI74DdVctJbhpV65482QN9E6Eq9dbfu0IY94VPF4YmSfVkPiZw6JIqLk6ZrvVtThNRFWRbjRO/JoMXwVvWMT4UPtGLEFoq7CMRnMdhnLEUWKgYo/yRibvlS1R4KQLPPlxDMcRIwKE1WZsYdBmbl+gHsqnHLOA8NlNuMYiyx9yyP3ZJJJEg8/1DLCJcFaDgVcmrRp4pLHYcP+AVq7IkoIvAywAAAAAElFTkSuQmCC" alt="{{ $user->getName() }}" />
                </a>
        </div>
        <div class="media-body media-middle">
                <h6 class="media-heading"><a href="{{ route('profile.index', ['fullname' => $user->getName()]) }}">{{ $user->getName() }}</a></h6>
        </div>
</div>
