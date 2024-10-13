{{-- Story Example --}}
@story('deploy')
    install_dependency
    clone_repository
    create_storage_folders_and_env_file
    run_composer
    migrate_database
    update_symlinks
    app_optimize
@endstory
