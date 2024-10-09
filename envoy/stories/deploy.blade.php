{{-- Story Example --}}
@story('deploy')
    clone_repository
    create_storage_folders_and_env_file
    run_composer
    migrate_database
    update_symlinks
@endstory
