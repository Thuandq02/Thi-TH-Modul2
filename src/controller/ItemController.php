<?php

namespace App\controller;

use App\model\Item;
use App\model\ItemModel;

class ItemController
{
    protected $itemController;

    public function __construct()
    {
        $this->itemController = new ItemModel();
    }

    public function show()
    {
        $items = $this->itemController->getAll();
        include_once "src/view/list.php";
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            include "src/view/add.php";
        } else {
            $ten = $_REQUEST['ten'];
            $loai = $_REQUEST['loai'];
            $gia = $_REQUEST['gia'];
            $soluong = $_REQUEST['soluong'];
            $ngaytao = $_REQUEST['ngaytao'];
            $mota = $_REQUEST['mota'];
            $item = new Item($ten, $loai, $gia, $soluong, $ngaytao, $mota);
            $this->itemController->add($item);
            header('location:index.php');
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $id = $_REQUEST['id'];
            $item = $this->itemController->getItemById($id);
            include "src/view/edit.php";
        } else {
            $id = $_REQUEST['id'];
            $ten = $_REQUEST['ten'];
            $loai = $_REQUEST['loai'];
            $gia = $_REQUEST['gia'];
            $soluong = $_REQUEST['soluong'];
            $ngaytao = $_REQUEST['ngaytao'];
            $mota = $_REQUEST['mota'];
            $newItem = new Item($ten, $loai, $gia, $soluong, $ngaytao, $mota);
            $newItem->setId($id);
            $this->itemController->edit($newItem);
            header('location:index.php');
        }
    }

    public function delete()
    {
        $id = $_REQUEST['id'];
        $this->itemController->delete($id);
        header('location:index.php');
    }

    public function search()
    {
        $search = '%'. $_REQUEST['search'] . '%';
        $items = $this->itemController->search($search);
        include "src/view/search.php";
    }

}