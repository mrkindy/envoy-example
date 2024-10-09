{{-- run_composer Task --}}
@task('run_composer')
    echo "Run Composer ({{ $release }})"
    cd {{ $new_release_dir }}
    composer install --prefer-dist --no-scripts -q -o
@endtask
