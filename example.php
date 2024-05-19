<?php

class Customer {
    public $name;
    public $email;
    public $address;

    public function __construct($name, $email, $address) {
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
    }
}

class Product {
    public $name;
    public $price;
    public $quantity;

    public function __construct($name, $price, $quantity) {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }
}

class Order {
    public $customer;
    public $products;
    public $total_price;

    public function __construct($customer, $products) {
        $this->customer = $customer;
        $this->products = $products;
        $this->total_price = $this->calculateTotalPrice();
    }

    private function calculateTotalPrice() {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->price * $product->quantity;
        }
        return $total;
    }
}

class OrderAPI {
    public function createOrder($customer, $products) {
        $order = new Order($customer, $products);
        // Здесь можно добавить логику для создания заказа в базе данных или другие действия
        return $order;
    }

    public function cancelOrder($order) {
        // Логика для отмены заказа
    }

    public function getOrderDetails($order) {
        // Логика для получения деталей заказа
    }
}

// Пример использования:

// Создание объектов клиента и продуктов
$customer = new Customer("Mari", "mari@example.com", "Moscow");
$product1 = new Product("jumper", 5000, 1);
$product2 = new Product("Book", 1000, 1);

// Создание API объекта
$orderAPI = new OrderAPI();

// Создание заказа
$order = $orderAPI->createOrder($customer, [$product1, $product2]);

// Получение деталей заказа
$orderDetails = $orderAPI->getOrderDetails($order);

// Отмена заказа
$orderAPI->cancelOrder($order);

?>