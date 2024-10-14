{{-- migrate_database Task --}}
@task('migrate_database')
    echo 'Migrating database ...'
    cd {{ $new_release_dir }}
    php artisan migrate --force
    echo 'set database.sqlite perimession to 777 ...'
    chmod 777 database/database.sqlite
@endtask
