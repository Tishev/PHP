<?php

include_once "models/Model.php";

class User extends Model
{

    private ?string $username;
    private ?string $name; // Добавляем свойство для имени

    public function __construct(int $id = null, string $username = null)
    {
        parent::__construct($id);
        $this->username = $username;
    }


// Сделаем методы получения и установки свойств
    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

}