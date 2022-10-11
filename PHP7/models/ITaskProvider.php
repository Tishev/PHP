<?php

interface ITaskProvider
{
    public function addTask(Task $task, int $userId): bool;
    public function deleteTask(int $key, int $user_id): bool;
    public function getUndoneList(int $userId): array;

}