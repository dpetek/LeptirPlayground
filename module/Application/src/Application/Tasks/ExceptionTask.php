<?php

namespace Application\Tasks;

use Leptir\Task\AbstractLeptirTask;

class ExceptionTask extends AbstractLeptirTask
{
    /**
     * Main logic of the task. This method has to be implemented for every task.
     *
     * @return mixed
     * @throws \Exception
     */
    protected function doJob()
    {
        throw new \Exception('Cool story bro');

        return self::EXIT_SUCCESS;
    }
}

 