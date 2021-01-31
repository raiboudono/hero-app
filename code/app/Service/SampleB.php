<?php

declare(strict_types=1);

namespace App\Service;

use App\Controller\SampleInterface;

class SampleB implements SampleInterface
{
    public function index(): string
    {
        return "this is sample B";
    }
}
