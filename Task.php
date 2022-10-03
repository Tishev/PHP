<?php


class Task {
    private string $description;
    private DateTime $dateCreated;
    private DateTime $dateUpdated;
    private DateTime $dateDone;
    private int $priority;
    private bool $isDone = false;
    private User $user;


    public function __construct(User $user, string $description, int $priority = 1) 
    {
        $this->user = $user;
        $this->description = $description;
        $this->priority = $priority;
        $this->setDataCreated(new DataTime());
    }

    public function markAsDone(): void
    {
        $this->setDateUpdate(new DateTime);
        $this->setDateDone(new DateTime);
        $this->setIsDone;
    }

   public function getDescription(): string
   {
       return $this->description;
   }
   public function setDescription(): string
   {
        $this->setDateUpdated(new DateTime);
        $this->description = $description;
   }
   public function getDateCreated(): DataTime
   {
       return $this->dateCreated;
   }
   public function setDateCreated(DateTime $dateCreated): void
   {
       $this->dateCreated = $dateCreated;
   }
   public function getDateUpdated(): DataTime
   {
       return $this->dateUpdated;
   }
   public function setDateUpdated(DateTime $dateUpdated): void
   {
       $this->dateUpdated = $dateUpdated;
   }
   public function getDateDone(): DataTime
   {
       return $this->dateDone;
   }
   public function setDateDone(DateTime $dateDone): void
   {
       $this->dateDone = $dateDone;
   }
   public function getPriority(): int
   {
       return $this->priority;
   }
   public function setPriority(int $priority): void
   {
       $this->priority = $priority;
   }
   public function getIsDone(): bool
   {
       return $this->isDone;
   }
   private function setIsDone(): void
   {
       $this->isDone = true;
   }
   public function getUser(): User
   {
       return $this->user;
   }
   public function setUser(User $user): void
   {
       $this->user = $user;
   }
   

}