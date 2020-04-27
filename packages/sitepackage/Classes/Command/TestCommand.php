<?php

namespace DMK\Sitepackage\Command;

use DERHANSEN\SfEventMgt\Service\CalendarService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestCommand extends Command
{
    public function __construct(CalendarService $service)
    {
        $this->service = $service;

        parent::__construct('');
    }

    public function execute(InputInterface $input, OutputInterface $output): int
    {
        var_dump($this->service->getCalendarDateRange(01, 2020, 1));
    }
}
