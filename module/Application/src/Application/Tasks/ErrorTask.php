<?php

namespace Application\Tasks;

use Leptir\Task\AbstractLeptirTask;
use Predis\Client;

class ErrorTask extends AbstractLeptirTask
{
    private $value = 0;
    /**
     * Main logic of the task. This method has to be implemented for every task.
     *
     * @return mixed
     */
    protected function doJob()
    {
        $r = rand(0, 100);

        if ($r < 20) {
            sleep(1);
        } elseif ($r < 40) {
            $fatal->error();
        } elseif ($r < 70) {
            throw new \Exception('message');
        } else {
            return self::EXIT_WARNING;
        }

        return self::EXIT_SUCCESS;
    }
}
 