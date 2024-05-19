# Выбор СУБД
В выборе СУБД необходимо отталкиваться от требований проекта. 
Для Интернет-магазина / web-проекта выбрала СУБД MySQL
### Плюсы СУБД MySQL

1. Скорость обработки данных Интернет-магазина / web-проекта, быстрая загрузка web страниц
2. Кросплатформенность
3. Безопасность
4. Сообщество
Также MySQL входит в состав популярных стеков для разработки веб-приложений — LAMP (Linux, Apache, MySQL, PHP) и WAMP (Windows, Apache, MySQL, PHP).
### Минусы СУБД MySQL
 1. Ограничение производительности: работа с большим объемом информации где речь идет о базах данных с миллионами строк, но найдет способ это решить, об этом чуть позже
 2. Поддерживает не все SQL-стандарты, поэтому имеются ограничена в функциональном плане


## Описание схемы данных Интернет магазина

<table>
    <tr>
        <th>Product</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>product_id</td>
        <td>идентификатор продукта</td>
    </tr>
    <tr>
        <td>name</td>
        <td>название</td>
    </tr>
     <tr>
        <td>group</td>
        <td>группа</td>
    </tr>
    <tr>
        <td>category</td>
        <td>категория</td>
    </tr>
    <tr>
        <td>subcategory</td>
        <td>подкатегория</td>
    </tr>
    <tr>
        <td>price</td>
        <td>цена</td>
    </tr>
    <tr>
        <td>quantity</td>
        <td>количество на складах</td>
    </tr>
    <tr>
        <td>weight</td>
        <td>вес</td>
    </tr>
    <tr>
        <td>size</td>
        <td>размер</td>
    </tr>
    <tr>
        <td>cover</td>
        <td>тип обложки (для книг)</td>
    </tr>
    <tr>
        <td>pages</td>
        <td>количество страниц (для книг)</td>
    </tr>
    <tr>
        <td>calorie</td>
        <td>калорийность (для еды)</td>
    </tr>
    <tr>
        <td>BZHU</td>
        <td>содержание белков, жиров и углеводов (для еды)</td>
    </tr>
</table>

<table>
    <tr>
        <th>Warehouse</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>warehouse_id</td>
        <td>идентификатор склада</td>
    </tr>
    <tr>
        <td>city</td>
        <td>город</td>
    </tr>
     <tr>
        <td>address</td>
        <td>адрес склада</td>
    </tr>
    <tr>
        <td>contact</td>
        <td>контактные данные</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
   
</table>

<table>
    <tr>
        <th>Order</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>order_id</td>
        <td>идентификатор заказа</td>
    </tr>
    <tr>
        <td>name</td>
        <td>имя покупателя</td>
    </tr>
     <tr>
        <td>address</td>
        <td>адрес доставки</td>
    </tr>
    <tr>
        <td>date</td>
        <td>дата заказа</td>
    </tr>
    <tr>
        <td>status</td>
        <td>статус заказа (ожидает подтверждения, подтверждён, отправлен, доставлен)</td>
    </tr>
</table>

<table>
    <tr>
        <th>Order history</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>order_id</td>
        <td>идентификатор заказа</td>
    </tr>
    <tr>
        <td>product_id</td>
        <td>идентификатор товара</td>
    </tr>
     <tr>
        <td>quantity</td>
        <td>количество</td>
    </tr>
    <tr>
        <td>date</td>
        <td>дата покупки</td>
    </tr>
</table>

<table>
    <tr>
        <th>Users</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>user_id</td>
        <td>идентификатор пользователя</td>
    </tr>
    <tr>
        <td>name</td>
        <td>имя</td>
    </tr>
     <tr>
        <td>email</td>
        <td>электронный адрес</td>
    </tr>
    <tr>
        <td>password</td>
        <td>пароль</td>
    </tr>
    <tr>
        <td>date_registration</td>
        <td>дата регистрации.</td>
    </tr>
</table>

<table>
    <tr>
        <th>Basket</th>
        <th>Description</th>
    </tr>
    <tr>
        <td>product_id</td>
        <td>идентификатор заказа</td>
    </tr>
    <tr>
        <td>quantity</td>
        <td>количество</td>
    </tr>
     <tr>
        <td>total_price</td>
        <td>общая стоимость</td>
    </tr>
</table>

## Медиаконтент
Для хранения медиаконтента подойдет CDN. 
CDN – это сеть взаимосвязанных серверов, которая ускоряет процесс загрузки веб-страниц приложений с высокой нагрузкой.
Хранение медиаконтента будем использовать CDN сервис https://cloud.vk.com/docs/networks/cdn
### Плюсы CDN
1. Безопасность и надежность всей инфраструктуры Интернет-магазина / web-приложения
2. Избыточность ресурсов, предотвращает сбои в работе (при возникновении аномальных сценариев, например высокая нагрузка сайта)
3. Интеграция с веб-серверами, хостингом и фреймворками

### Минусы CDN
1. Может негативно повлиять на SEO
2. Тарифные планы могут стоить дорого