<?php

namespace Calculator;

use Calculator\Operators\OperatorInterface;
use Illuminate\Contracts\Support\Arrayable;
use Psr\Log\LoggerInterface;

class Calculator implements Arrayable
{

    /**
     * @var OperatorInterface[]
     */
    protected $operators = [];
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * Calculator constructor.
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @param string $name
     * @param OperatorInterface $operator
     * @return $this
     */
    public function register(string $name, OperatorInterface $operator): Calculator
    {
        $this->operators[$name] = $operator;

        return $this;
    }

    /**
     * @param string $name
     * @param $number1
     * @param $number2
     * @return float
     * @throws OperatorDoesNotSupport
     */
    public function calculate(string $name, $number1, $number2): float
    {
        if (!$this->isSupported($name)) {
            throw new OperatorDoesNotSupport("Operator with name [$name] does not supported");
        } else {
            $operator = $this->operators[$name];
            $this->logger->info("Running operation $name with", [$number1, $number2]);

            return $operator->run($number1, $number2);
        }
    }

    public function isSupported($operation)
    {
        return array_key_exists($operation, $this->operators);
    }

    public function toArray()
    {
        return [
            'name' => 'Awesome Calculator',
            'supports' => array_keys($this->operators)
        ];
    }
}
