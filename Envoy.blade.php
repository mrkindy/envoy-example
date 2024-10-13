{{-- define servers --}}
@servers(['web' => explode(";", $servers)])

{{-- define all global variables --}}
@setup
    $repository = 'https://github.com/mrkindy/envoy-example.git';
    $branch = 'main';
    $releases_dir = '/var/www/releases';
    $app_dir = '/var/www';
    $release = date('YmdHis');
    $new_release_dir = $releases_dir .'/'. $release;
@endsetup

{{-- Import Envoy files --}}
@foreach (glob("envoy/**/*\.blade\.php") as $envoyFile)
    @import($envoyFile)
@endforeach
