<?php

include_once "models/Model.php";

class Task extends Model
{

    private int $user_id;
    private ?string $description;
    private bool $isDone = false;


    public function __construct(int $id = null, string $description = null)
    {
        parent::__construct($id);
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->user_id;
    }

    /**
     * @param int $user_id
     */
    public function setUserId(int $user_id): void
    {
        $this->user_id = $user_id;
    }



    public function getDescription(): ?string
    {
        return $this->description;
    }


    public function setDescription(string $description): void
    {
        $this->description = $description;
    }


    public function isDone(): bool
    {
        return $this->isDone;
    }


    public function setIsDone(bool $isDone): void
    {
        $this->isDone = $isDone;
    }




}