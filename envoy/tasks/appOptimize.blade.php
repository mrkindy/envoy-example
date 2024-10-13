{{-- app_optimize Task --}}
@task('app_optimize')
    echo "Optimizing Laravel Application"
    cd {{ $new_release_dir }}
    php artisan clear-compiled
    php artisan optimize
    php artisan key:generate
    php artisan route:cache
    php artisan cache:clear
    php artisan config:cache
@endtask
