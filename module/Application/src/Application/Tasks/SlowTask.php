<?php

namespace Application\Tasks;

use Leptir\Task\AbstractLeptirTask;

class SlowTask extends AbstractLeptirTask
{
    /**
     * Main logic of the task. This method has to be implemented for every task.
     *
     * @return mixed
     */
    protected function doJob()
    {
        sleep(20);

        return self::EXIT_SUCCESS;
    }

    public function getName()
    {
        return 'SlowTask';
    }
}