{{-- create_storage_folders_and_env_file Task --}}
@task('create_storage_folders_and_env_file')
    echo 'Checking storage folder and .env file exists or not...'

    [ -d {{ $app_dir }}/storage ] || (cp -r {{ $new_release_dir }}/storage {{ $app_dir }}/storage && chmod -Rf 777 {{ $app_dir }}/storage && echo 'storage folder copied...')
    [ -f {{ $app_dir }}/.env ] || (cp -r {{ $new_release_dir }}/.env.example {{ $app_dir }}/.env && echo '.env file copied...')
@endtask
