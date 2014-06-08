<?php

namespace Application\Tasks;

use Leptir\Task\AbstractLeptirTask;

class SimpleTask extends AbstractLeptirTask
{
    /**
     * Main logic of the task. This method has to be implemented for every task.
     *
     * @return mixed
     */
    protected function doJob()
    {
        usleep(rand(1200, 234234));

        return self::EXIT_SUCCESS;
    }
}