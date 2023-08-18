<?php

interface Birds
{
    public function fly();
    public function swim();
    public function walk();
}

class Duck implements Birds
{
    public function fly(): string
    {
        return 'Duck flying';
    }

    public function swim()
    {
        return 'Duck swimming';
    }

    public function walk()
    {
        return 'Duck walking';
    }
}

class Penguin implements Birds
{
    public function fly(): string
    {
        return 'Penguin flying';
    }

    public function swim()
    {
        return 'Penguin swimming';
    }

    public function walk()
    {
        return 'Penguin walking';
    }
}

class Swallow implements Birds
{
    public function fly(): string
    {
        return 'Swallow flying';
    }

    public function swim()
    {
        return 'Swallow swimming';
    }

    public function walk()
    {
        return 'Swallow walking';
    }
}

$duck = new Duck;
echo "{$duck->fly()}<br>{$duck->swim()}<br>{$duck->walk()}<br><hr>";

$penguin = new Penguin;
echo "{$penguin->fly()}<br>{$penguin->swim()}<br>{$penguin->walk()}<br><hr>";

$swallow = new Swallow;
echo "{$swallow->fly()}<br>{$swallow->swim()}<br>{$swallow->walk()}";
