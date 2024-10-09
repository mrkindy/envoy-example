{{-- Import Envoy files --}}
@foreach (glob("envoy/**/*\.blade\.php") as $envoyFile)
    @import($envoyFile)
@endforeach
