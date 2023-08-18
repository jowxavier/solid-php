<?php

class Person 
{
    private string $name;
    private int $age;    

    /**
     * Get the value of name
     */ 
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Get the value of age
     */ 
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function welcome(): string
    {
        if ($this->getAge() > 18) {
            return "Hi there {$this->getName()}, <b>you can consume alcoholic beverages</b>";
        }

        return "Hi there {$this->getName()}, <b>you cannot consume alcoholic beverages</b>";
    }
}

$person = new Person;
$person->setName('Jonathan Xavier Ribeiro');
$person->setAge(36);
echo $person->welcome();