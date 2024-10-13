<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Process\Pipe;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Process;

class DeployJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(protected $server, protected $SHHPrivateKey) {}

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $result = Process::pipe(function (Pipe $pipe) {
            $pipe->command(['touch', '../keys/envoy']);
            $pipe->command('echo "'.$this->SHHPrivateKey.'" >> ../keys/envoy');
            $pipe->command(['chmod', '600', '../keys/envoy']);
            $pipe->command(['ssh-add', '../keys/envoy']);
            // if key is password protected, use the next command instead
            //SSH_ASKPASS="../code/ssh_give_pass.sh" ssh-add  ../keys/envoys <<< "*****"
            // the content of ssh_give_pass.sh is:
            // #!/bin/bash
            // read SECRET
            // echo $SECRET
            $pipe->command(['php', 'vendor/bin/envoy', 'run', 'deploy', '--servers=' . $this->server]);
            $pipe->command(['rm', '../keys/envoy']);
        });

        if ($result->successful()) {
            // Successfully executed
            logger('Deployment completed successfully.');
        } else {
            // Failed execution
            logger('Deployment failed: ' . $result->errorOutput());
        }
    }
}
