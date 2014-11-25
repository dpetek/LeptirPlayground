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
        $r = rand(500000, 900000);
        $this->logInfo('Sleeping for: '. (string)$r);
        usleep($r);
        $this->addResponseLine('Great success');
        return self::EXIT_SUCCESS;
    }

    public function getName()
    {
        return 'SimpleTask';
    }
}