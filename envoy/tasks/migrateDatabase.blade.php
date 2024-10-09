{{-- migrate_database Task --}}
@task('migrate_database')
    echo 'Migrating database ...'
    cd {{ $new_release_dir }}
    php artisan migrate --force
@endtask
