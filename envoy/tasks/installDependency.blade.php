{{-- app_optimize Task --}}
@task('install_dependency')
    echo 'Installing git ...'
    apt install git
    echo 'Installing composer ...'
    apt install composer -y
@endtask
