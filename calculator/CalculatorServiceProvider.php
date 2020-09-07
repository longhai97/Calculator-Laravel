<?php

namespace Calculator;

use Calculator\Operators\Subtraction;
use Calculator\Operators\Sum;
use Carbon\Laravel\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use Psr\Log\LoggerInterface;

class CalculatorServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(Calculator::class, function () {
            $logger = $this->app->make(LoggerInterface::class);
            $calculator = new Calculator($logger);
            $calculator
                ->register('+', new Sum())
                ->register('-', new Subtraction())
            ;

            return $calculator;
        });
    }

    public function boot()
    {
        Validator::extend('calculator.supported', function ($attribute, $value) {
            return app(Calculator::class)->isSupported($value);
        }, 'Operation is not supported');
    }
}
