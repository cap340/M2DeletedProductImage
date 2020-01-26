<?php

namespace Cap\CleanMedia\Console\Command;

use Symfony\Component\Console\Command\Command;
use Cap\CleanMedia\Model\ResourceModel\Db;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CleanDbCommand extends Command
{
    /**
     * @var Db
     */
    protected $resourceDb;

    /**
     * @inheritDoc
     */
    protected function configure()
    {
        $this->setName('cap:clean:db');
    }

    /**
     * CleanDatabaseCommand constructor.
     *
     * @param Db $resourceDb
     * @param null $name
     */
    public function __construct(
        Db $resourceDb,
        $name = null
    ) {
        parent::__construct($name);
        $this->resourceDb = $resourceDb;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $inDbName = $this->resourceDb->getMediaInDbName();
        print_r($inDbName);
    }
}
