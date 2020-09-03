<?php

namespace App\Http\Controllers;

use Calculator\Calculator;
use App\Http\Requests\CalculateRequest;

class CalculatorController extends Controller
{
    /**
     * @var Calculator
     */
    private $calculator;

    public function __construct(Calculator $calculator)
    {
        $this->calculator = $calculator;
    }

    public function calculate(CalculateRequest $request)
    {
        return [
            'result' => $this->calculator->calculate(
                $request->input('ops'),
                $request->input('n1'),
                $request->input('n2')
            )
        ];


    }

    public function detail()
    {
        return $this->calculator;
    }
}
