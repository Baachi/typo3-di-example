<?php

namespace Dmk\Sitepackage\Service;

use DERHANSEN\SfEventMgt\Service\CalendarService;

class Service
{
    public function __construct(CalendarService $service)
    {
        $this->service = $service;
    }

    public function test()
    {
        var_dump($this->service->getCalendarDateRange(01, 2020, 1));
    }
}
