<?php

namespace App\Console\Commands;

use Calculator\Calculator;
use Illuminate\Console\Command;

class Calculate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'calculate <operator> <number1> <number2>';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run a calculation';
    /**
     * @var Calculator
     */
    private $calculator;

    /**
     * Create a new command instance.
     *
     * @param Calculator $calculator
     */
    public function __construct(Calculator $calculator)
    {
        parent::__construct();
        $this->calculator = $calculator;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info($this->calculator->calculate('xxx', 1, 2));
        return 0;
    }
}
