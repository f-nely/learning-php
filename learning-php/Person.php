<?php

/*
    Classes
    A way of grouping variables and functions together as
    a single unit that can be referenced.

    Objects
    Instances of a class.

    About Classes/Objects
    - You can have as many as you want, and all use the
    same variables and functions names.
    - Variables in classes are called 'properties'.
    - Functions in classes are called 'methods'. 
*/

class Person
{
    public function __construct(
        public string $name,
        public int $age,
        public bool $birthday = false,
    )
    { }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $newName): void
    {
        $this->name = $newName;
    }

    public function setBirthday($birthday): void
    {
        $this->birthday = $birthday;
        $this->updateAge();
    }

    private function updateAge(): void
    {
        $this->age = ($this->birthday) ? ++$this->age : $this->age;
    }

    public function getAge(): int
    {
        return $this->age;
    }
}