<?php

namespace Application\Tasks;

use Leptir\Task\AbstractLeptirTask;

class ErrorTask extends AbstractLeptirTask
{
    /**
     * Main logic of the task. This method has to be implemented for every task.
     *
     * @return mixed
     */
    protected function doJob()
    {
        trigger_error('Fatal error triggered.', E_USER_ERROR);

        return self::EXIT_SUCCESS;
    }
}
 