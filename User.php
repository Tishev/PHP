<?php

class User {
    private string $userName;
    private string $email;
    private string $sex;
    private int $age;
    public bool $isActive = false;
    public function __construct(string $userName, string $email) 
    {
        $this->userName = $userName;
        $this->email = $email;
        
    }
}