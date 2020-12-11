<?php

namespace App\model;

class ItemModel
{
    protected $datebase;

    public function __construct()
    {
        $db = new DBconnect();
        $this->datebase = $db->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM item";
        $stmt = $this->datebase->query($sql);
        $data = $stmt->fetchAll();
        return $data;
    }

    public function add($item)
    {
        $sql = 'INSERT INTO `item` (`ten`,`loai`,`gia`,`soluong`,`ngaytao`,`mota`) values (:ten,:loai,:gia,:soluong,:ngaytao,:mota)';
        $stmt = $this->datebase->prepare($sql);
        $stmt->bindParam(':ten', $item->getTen());
        $stmt->bindParam(':loai', $item->getLoai());
        $stmt->bindParam(':gia', $item->getGia());
        $stmt->bindParam(':soluong', $item->getSoluong());
        $stmt->bindParam(':ngaytao', $item->getNgaytao());
        $stmt->bindParam(':mota', $item->getMota());
        $stmt->execute();
    }

    public function getItemById($id)
    {
        $sql = "SELECT * FROM item where `id`=:id";
        $stmt = $this->datebase->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $resurl = $stmt->fetch();
        return $resurl;
    }

    public function edit($newItem)
    {
        $sql = 'update item set `ten`=:ten,`loai`=:loai,`gia`=:gia,`soluong`=:soluong, `ngaytao`=:ngaytao,`mota`=:mota where id=:id';
        $stmt = $this->datebase->prepare($sql);
        $stmt->bindParam(':ten', $newItem->getTen());
        $stmt->bindParam(':loai', $newItem->getLoai());
        $stmt->bindParam(':gia', $newItem->getGia());
        $stmt->bindParam(':soluong', $newItem->getSoluong());
        $stmt->bindParam(':ngaytao', $newItem->getNgaytao());
        $stmt->bindParam(':mota', $newItem->getMota());
        $stmt->bindParam(':id', $newItem->getId());
        $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "delete from item where id=:id";
        $stmt = $this->datebase->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

    }

    public function search($search)
    {
        $sql = "SELECT * FROM student  WHERE `ten` LIKE '$search'";
        $stmt = $this->datebase->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}