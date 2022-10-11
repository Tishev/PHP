<?php

class AppExceptions extends Exception {}


function foo1()
{
    $res = null;

        if (is_null($res)) {
            throw new Exception("Какая то ошибка");
        }
}

try {

    foo1();

} catch (AppExceptions $exception) {
    echo $exception->getMessage();
} catch (Exception $exception) {
    var_dump($exception->getTrace());
}
