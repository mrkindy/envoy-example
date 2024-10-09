{{-- Setup File Example --}}

@setup
    $repository = 'git@gitlab.example.com:<USERNAME>/laravel-sample.git';
    $branch = 'main';
    $releases_dir = '/var/www/app/releases';
    $app_dir = '/var/www/app';
    $release = date('YmdHis');
    $new_release_dir = $releases_dir .'/'. $release;
@endsetup
