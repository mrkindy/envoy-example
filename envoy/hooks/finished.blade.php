@finished
    if ($exitCode == 0) {
        @slack('SLACK_CHANEL_WEBHOOK', '#deploy', 'Deploy Finshid!.')
    }
@endfinished

