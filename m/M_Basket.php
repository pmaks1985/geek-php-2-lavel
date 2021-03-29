<?php

class M_Basket
{

    public function getTotal()
    {
        $sql = "SELECT SUM(price) as 'sum' FROM basket where id_user = :userId and id_order IS NULL";
        $arg = ['userId' => $this->userId];
        return db::getRow($sql, $arg)['sum'];
    }

    public function clear($user_id,$order_id)
    {
//        $sql = "DELETE FROM basket where order_id = :order_id and user_id = :userId";
        $sql = "DELETE FROM basket WHERE basket.order_id = :order_id and basket.user_id = :userId";
        $arg = ['userId' => $user_id, 'order_id' => $order_id];
        db::delete($sql, $arg);
    }

    public function addGood($goodId)
    {
        $sql = "INSERT INTO basket (id_user, id_good, price) VALUES (:userId, :goodId, (SELECT price FROM goods WHERE id_good = :goodId))";
        $arg = ['userId' => $this->userId, 'goodId' => $goodId];
        db::insert($sql, $arg);
    }

    public function toOrder($destination)
    {
        $total = $this->getTotal();
        $sql = "INSERT INTO orders (id_user, amount, id_order_status, destination) VALUES (:userId, :total, 1, :dest)";
        $arg = ['userId' => $this->userId, 'total' => $total, 'dest' => $destination];
        $orderId = db::insert($sql, $arg);
        $sql = "UPDATE basket SET id_order = :orderId where id_user = :userId and id_order IS NULL";
        $arg = ['userId' => $this->userId, 'orderId' => $orderId];
        db::update($sql, $arg);
    }

    public function getOrders($user_id)
    {
        $sql = "SELECT order_id, product_id, count, title, price FROM basket AS T1 INNER JOIN products AS T2 ON T1.product_id = T2.id WHERE T1.user_id = :userId";

        $arg = ['userId' => $user_id];
        return db::Select($sql, $arg);
    }

    private $userId;
}