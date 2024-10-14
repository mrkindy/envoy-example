{{-- clone_repository Task --}}
@task('clone_repository')
    echo 'Cloning repository {{$repository}} ...'
    [ -d {{ $releases_dir }} ] || mkdir {{ $releases_dir }}
    git clone --depth 1 {{ $repository }} {{ $new_release_dir }}
    cd {{ $new_release_dir }}
    git reset --hard {{ $commit }}
    echo 'set bootstrap/cache perimession to 777 ...'
    chmod -Rf 777 bootstrap/cache
@endtask
