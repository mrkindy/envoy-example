{{-- Setup File Example --}}
@setup
    $repository = 'https://github.com/mrkindy/envoy-example.git';
    $branch = 'main';
    $releases_dir = '/var/www/app/releases';
    $app_dir = '/var/www/app';
    $release = date('YmdHis');
    $new_release_dir = $releases_dir .'/'. $release;
@endsetup
