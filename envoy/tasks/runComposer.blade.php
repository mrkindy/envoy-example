{{-- run_composer Task --}}
@task('run_composer')
    echo "Run Composer ({{ $release }})"
    cd {{ $new_release_dir }}
    composer update --prefer-dist --no-scripts -q -o
@endtask
