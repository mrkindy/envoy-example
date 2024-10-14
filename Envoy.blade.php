{{-- define servers --}}
@servers(['web' => explode(";", $servers)])

{{-- define all global variables --}}
@include('./vendor/autoload.php');

@setup
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $slack_webhook = $_ENV['SLACK_WEBHOOK'];
    $repository = $_ENV['REPOSITORY'];
    $branch = 'main';
    $releases_dir = '/var/www/releases';
    $app_dir = '/var/www';
    $release = date('YmdHis');
    $new_release_dir = $releases_dir .'/'. $release;
@endsetup

{{-- Import Envoy files --}}
@foreach (glob("envoy/**/*\.blade\.php") as $envoyFile)
    @import($envoyFile)
@endforeach
