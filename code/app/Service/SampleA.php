<?php

declare(strict_types=1);

namespace App\Service;

use App\Controller\SampleInterface;

class SampleA implements SampleInterface
{
    public function index(): string
    {
        return 'This is Sample A';
    }
}
