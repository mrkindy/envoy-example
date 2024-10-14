@error
    echo "Faild to deploy the application. Task: $task";

    @slack($slack_webhook, '#deploy', "Faild to deploy the application. Task: $task This task did not complete successfully on one of your servers.")
@enderror
