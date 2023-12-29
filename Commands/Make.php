<?php

class Make
{
    private array $argument;
    function __construct($argument)
    {
        if (is_array($argument) && count($argument) >= 2) {
            $this->argument = array_slice($argument, 2);
        } else {
            $this->argument = [];
        }
    }

    public function run($subCommand)
    {
        if (method_exists($this, $subCommand)) {
            $this->$subCommand();
        } else {
            echo "Sub Command Not Found !\n";
        }
    }


    public function model()
    {
        echo "Logic to making model...\n";
    }

    public function controller()
    {
        echo "Logic to making controller...\n";
    }
}
