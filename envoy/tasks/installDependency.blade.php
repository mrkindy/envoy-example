{{-- install_dependency Task --}}
@task('install_dependency')
    echo 'Installing dependencies ...'
    cd {{ $app_dir }}
    echo 'Check if .env not exists then delete laravel ...'
    [ -f .env ] || (rm -rf laravel && echo 'laravel folder deleted...')
@endtask
