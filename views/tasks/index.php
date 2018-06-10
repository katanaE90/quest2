<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/template/css/bootstrap.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/template/css/style.css">
</head>
<body>

<p>
    1. Написать алгоритм решения задачи:
    В классе 28 учеников. 75% из них занимаются спортом.
    Сколько учеников в классе занимаются спортом и сколько всего учеников в классе?

    1) Находим количество учеников, которые занимаются спортом - 28 * 75% = 28 * 0.75 = 21 ученик.
    2) Из условия "В классе 28 учеников" понятно что в классе всего 28 учеников.
</p>
<p>
    2. Необходимо поменять местами числовые значения в строке $s.
    $s = ‘This server has 5000 GB RAM and 386 GB storage’
    Код:
    <?php echo array_shift($taskList); ?>


    Результат:
    <?php echo array_shift($taskList); ?>
</p>
<p>
    3. Как извлечь первый элемент массива и посчитать среднее арифметическое остатка при помощи цикла?

    $a = ​[2,3,56,65,56,44,34,45,3,5,35,345,3,5];
    Код:
    <?php echo array_shift($taskList); ?>


    Результат:

    Массив:
    <?php echo array_shift($taskList); ?>

    Среднее арифметическое:
    <?php echo array_shift($taskList); ?>

</p>

<p>
    4) Вычислить остаток от деления и найти неполное частное. Расписать решение без
    использования bcmod. ($q = неполное частное, $r = остаток от деления):

    $a = -25
    $b = 8
    $q = ?
    $r = ?


    Код:
    <?php echo array_shift($taskList); ?>


    Результат:
    Неполное частное: <?php echo array_shift($taskList); ?>

    Остаток от деления: <?php echo array_shift($taskList); ?>

</p>
<p>
    5) Как поменять 2 переменные местами без использования третьей?

    $a = [4,9,2,7,3];
    $b = ‘Hello world’;

    Код:
    <?php echo array_shift($taskList); ?>


    Результат:
    $a = <?php echo array_shift($taskList); ?>

    <?php echo array_shift($taskList); ?>
</p>
<p>
    6) Чем отличается оператор == от === ?

    Оператор == проверяет значение на равенство, не учитывая тип значения,
    тоесть (1 == '1') вернет true. 
    Оператор === проверяет так же и тип значения, тоесть (1 === '1') вернет false.
</p>
<p>
    7) Чем отличается require от include ?

    a) Выводом ошибки. В случае ненайденого файла include инструкция вернет WARNING,
    в то время как require - вернет FATAL ERROR.
    b) В случае ненайденого файла include инструкции,
    скрипт продолжит исполнение, в случае require - скрипт остановится.
</p>
<p>
    8) Какие данные пользователя сайта из перечисленных можно считать на 100% достоверными:
    cookie, данные сессии, IP-адрес пользователя , User-Agent? Почему?

    На сколько я знаю - никакие. Все данные можно подменить.

</p>

    1. Сделать миграцию для выше указанной схемы и залить в базу тестовые данные

    С миграцией не понял куда чего мигрировать...

    2. Напишите запрос, который выберет имя пользователя (bids.name) с самой высокой ценой заявки (bids.price)

    SELECT name FROM bids ORDER BY price DESC LIMIT 1

    3. Напишите запрос, который выберет название мероприятия (events.caption), по которому нет заявок

    SELECT events.caption FROM events LEFT OUTER JOIN bids ON events.id = bids.id_event WHERE id_event IS NULL

    4. Напишите запрос, который выберет название мероприятия (events.caption), по которому больше трех заявок

    SELECT events.caption FROM events LEFT OUTER JOIN bids ON events.id = bids.id_event GROUP BY events.id HAVING
    COUNT(events.caption) > 3 ORDER BY COUNT(events.caption) DESC

    5. Напишите запрос, который выберет название мероприятия (events.caption), по которому больше всего заявок

    SELECT events.caption FROM events LEFT OUTER JOIN bids ON events.id = bids.id_event GROUP BY events.id LIMIT 1


</body>
</html>