<?php
$pdo = new PDO('sqlite:database.db', null, null, [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

class Student
{
    private ?int $id;
    private ?string $name;

    /**
     * @param int $id
     * @param string $name
     */
    public function __construct(int $id = null, string $name = null)
    {
        $this->id = $id;
        $this->name = $name;
    }


    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }
}


$statement = $pdo->prepare('SELECT * FROM `students`');

$statement->execute();

$statement->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Student");
$student = $statement->fetchAll();


print_r($student);