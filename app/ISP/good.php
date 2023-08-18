<?php

interface Birds
{
    public function walk();
}

interface BirdsFly extends Birds
{
    public function fly();
}

interface BirdsSwim extends Birds
{
    public function swim();
}

class Duck implements BirdsFly, BirdsSwim
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

class Penguin implements BirdsSwim
{
    public function swim()
    {
        return 'Penguin swimming';
    }

    public function walk()
    {
        return 'Penguin walking';
    }
}

class Swallow implements BirdsFly
{
    public function fly(): string
    {
        return 'Swallow flying';
    }

    public function walk()
    {
        return 'Swallow walking';
    }    
}

$duck = new Duck;
echo "{$duck->fly()}<br>{$duck->swim()}<br>{$duck->walk()}<br><hr>";

$penguin = new Penguin;
echo "{$penguin->swim()}<br>{$penguin->walk()}<br><hr>";

$swallow = new Swallow;
echo "{$swallow->fly()}<br>{$swallow->walk()}";