<?php

class Person 
{
    public function getName(): string
    {
        return 'Person Jonathan Xavier';
    }
}

class Father extends Person 
{ 
    public function getName(): string
    {
        return 'Father Jonathan Xavier';
    }
}

$person = new Person;
$father = new Father;

function imprimeNome(Person $object): string
{
    return $object->getName();
}

echo imprimeNome($person)."<br>";
echo imprimeNome($father);