<?php

class TaskProvider
{
    //хранилище задач
    private array $tasks;

    public function __construct()
    {
        //при создании хранилища читаем задачи из сессии
        $this->tasks = $_SESSION['tasks'] ?? [];
    }


    /**
     * Метод возвращающий массив не выполненных задач из объекта
     * @return array
     */
    public function getUndoneList(): array
    {


        /*
         return array_map(function (Task $task) {
                    return $task->isDone() ?: $task;
                }, $this->tasks);
        */


        /**
         * @var Task $task
         */
        $tasks = [];
        foreach ($this->tasks as $key => $task) {
            if (!$task->isDone()) {
                $tasks[$key] = $task;
            }
        }


        return $tasks;
    }

    public function addTask(Task $task): void
    {
        $_SESSION['tasks'][] = $task;
        $this->tasks[] = $task;
    }

    public function deleteTask(int $key): void
    {
        unset($_SESSION['tasks'][$key]);
        unset($this->tasks[$key]);
    }


}