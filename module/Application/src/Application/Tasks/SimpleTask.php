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
        $name = $this->getString('name');

        $r = rand(100000, 900000);
        $this->logInfo('Sleeping for: '. (string)$r);
        usleep($r);
        $this->addResponseLine('Great success');
        $this->logInfo('Task name: ' . $name);
        return self::EXIT_SUCCESS;
    }

    public function getName()
    {
        return 'SimpleTask';
    }
}