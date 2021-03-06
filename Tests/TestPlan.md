# План тестирования  
## Содержание    

1. [Введение](#par1) 
2. [Объект тестирования](#par2)
3. [Риски](#par3)
4. [Аспекты тестирования](#par4)
5. [Подходы к тестированию](#par5)
6. [Представление результатов](#par6)
7. [Выводы](#par7)

## <a name="par1">1. Введение</a>
Целью данного документа является описание плана тестирования веб-приложения "JokesViewer". [Здесь](../Docs/Requirements/README.md) представлена информации для команды, которая будет тестировать данное веб-приложение.

## <a name="par2">2. Объект тестирования</a>
Процесс тестирования предполагает проверку работоспособности веб-приложения.
В качестве объекта тестирования следует выделить функциональное тестирование. 
К атрибутам качетсва относятся следующие характеристики:
1. Функциональная корректность.
2. Удобство использования.
3. Защищенность от ошибки пользователя.

## <a name="par3">3. Риски</a>
Приложение может корректно работать, если Mysql Server запущен и приложение смогло установить с ним корректное соединение. 
Так же для запуска приложения должен быть запущен Apache2 Server, который занимается обработкой запросов пользователей.

## <a name="par4">4. Аспекты тестирования</a>
В процессе тестирования предполагается проверить соответствие системы [требованиям](../Docs/Requirements/README.md), на основе которых она была спроектирована и 
реализована. Для данного проекта проекта основными функциями являются следующие:
1. Добавить анекдот
2. Изменить анекдот
3. Удалить анекдот
4. Предложить анекдот
5. Просмотреть анекдоты по категориям
6. Добавить категорию
7. Изменить категорию
8. Зарегистрироваться
9. Войти в аккаунт
10. Выйти из аккаунта
11. Заблокировать пользователя
12. Разблокировать пользователя
13. Добавить анекдот в избранное

## <a name="par5">5. Подходы к тестированию</a>
Для тестирования приложения необходимо использовать ручное тестирование, чтобы проверить все аспекты тестирования. 

## <a name="par6">6. Представление результатов</a>
Результаты тестирования представлены в документе ["Представление результатов"](TestResults.md).

## <a name="par7">7. Выводы</a>
Основые функции реализованы, но данное приложение нуждается в дороботке: добавить асинхронные запросы вместо полной перезагрузки страницы.
Предложения по развитию: добавить возможность ставить оценки анекдоту.

