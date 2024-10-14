{{-- update_symlinks Task --}}
@task('update_symlinks')
    echo "Linking storage directory"
    rm -rf {{ $new_release_dir }}/storage
    ln -nfs {{ $app_dir }}/storage {{ $new_release_dir }}/storage

    echo 'Linking .env file'
    ln -nfs {{ $app_dir }}/.env {{ $new_release_dir }}/.env

    echo 'Linking current release'
    ln -nfs {{ $new_release_dir }} {{ $app_dir }}/laravel

    echo 'Linking storage/app/public to public/storage'
    ln -nfs {{ $app_dir }}/storage/app/public {{ $new_release_dir }}/public/storage
@endtask
