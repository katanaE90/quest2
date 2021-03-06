<?php


class TaskController
{
    public function actionIndex()
    {
        $taskList = array();
        ###########################################
        # 1) Второе задание
        ###########################################

        $s = 'This server has 5000 GB RAM and 386 GB storage';

        // Чтобы дважды не писать код можно записаный код в строку сразу выполнить.

        $code = "preg_replace('/([0-9]+) (.*) ([0-9]+)/', '$3 $2 $1', '$s');";

        // Запишем код в массив для вывода

        $taskList[] = $code;


        $code = '$taskList[] = ' . $code;
        eval($code);
        unset($code);


        ###########################################
        # 2) Третье задание
        ###########################################


        $a = [2, 3, 56, 65, 56, 44, 34, 45, 3, 5, 35, 345, 3, 5];

        $sum = 0;
        $code = '     
        foreach ($a as $key => $value) {
            if ($key == 0) {
                array_shift($a);
                continue;
            }
            $sum = $sum + $value;
            if (!next($a)) {
                $sum = $sum / (count($a));
            }
        }';

        eval($code);


        // Запишем значения массива в строку вида $а = [0,1...] для удобства вывода

        $s = '$a';
        $s = $s . '= [';
        foreach ($a as $value) {
            $s = $s . $value . ',';
        }
        $s = trim($s, ',') . ']';

        // Запишем все в массив для вывода

        $taskList[] = $code;
        $taskList[] = $s;
        $taskList[] = $sum;
        unset($code);
        ###########################################
        # 3) Четвертое задание
        ###########################################

        $a = -25;
        $b = 8;


        $q = 0;
        $r = 0;

        $code = '        // Определяем изначально положительный знак
        $sign = 1;


        /*
         * С помощью операции исключающее или проверяем числа
        если хоть одно число отрицательное меняем знак на отрицательный
        если оба положительные или отрицательные - оставляем знак положительным*/

        if ($a < 0 xor $b < 0) {
            $sign = -1;
        }
        $b = $b * $sign;  // Меняем знак числа делителя


        /*
         * Дальше находим неполное частное и остаток
         *
         * Метод заключается в том, что с помощью цикла производится вычитание числа делителя от делимого
         * до тех пор пока делимое не станет положительным либо меньшим чем делимое.
         * Результат вычитания пишем в переменную а. Переменная q используется как счетчик.
         * Число итераций равно неполному частному.*/
        while ($a < 0 || abs($a) >= abs($b)) {
            $a = $a - $b;
            $q++;
        }
        /*Если если хоть одно число (делимое или делитель) отрицательное - знак
        отрицательный и неполное частное тоже делаем отрицательным*/
        if ($sign < 0) {
            $q = $q * $sign;
        }
        $r = $a;


        $taskList[] = $q;
        $taskList[] = $r;
';
        $taskList[] = $code;

        eval($code);
        unset($code);


        ###########################################
        # 4) Пятое задание
        ###########################################

        $a = [4, 9, 2, 7, 3];
        $b = 'Hello world';

        $code = '
        $a = array($a, $b);
        list($b, $a) = $a;
        ';

        eval($code);

        $s = '$b';
        $s = $s . '= [';
        foreach ($b as $value) {
            $s = $s . $value . ',';
        }
        $s = trim($s, ',') . ']';

        $taskList[] = $code;
        $taskList[] = $a;
        $taskList[] = $s;
        unset($code);

        ###########################################
        # 5) Шестое задание
        ###########################################
        


        //$newsList = Task::getNewsList();

        require_once ROOT . '/views/tasks/index.php';

        return true;
    }

    public function actionView($id)
    {
        if ($id) {
            $newsItem = Task::getNewsItemById($id);

            print_r($newsItem);
            echo 'actionView';
        }
        return true;
    }
}