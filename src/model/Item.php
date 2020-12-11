<?php

namespace App\model;
class Item
{
    protected $id;
    protected $ten;
    protected $loai;
    protected $gia;
    protected $soluong;
    protected $ngaytao;
    protected $mota;

    public function __construct($ten, $loai, $gia, $soluong, $ngaytao, $mota)
    {
        $this->ten = $ten;
        $this->loai = $loai;
        $this->gia = $gia;
        $this->soluong = $soluong;
        $this->ngaytao = $ngaytao;
        $this->describe = $mota;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTen()
    {
        return $this->ten;
    }

    /**
     * @param mixed $ten
     */
    public function setTen($ten)
    {
        $this->ten = $ten;
    }

    /**
     * @return mixed
     */
    public function getLoai()
    {
        return $this->loai;
    }

    /**
     * @param mixed $loai
     */
    public function setLoai($loai)
    {
        $this->loai = $loai;
    }

    /**
     * @return mixed
     */
    public function getGia()
    {
        return $this->gia;
    }

    /**
     * @param mixed $gia
     */
    public function setGia($gia)
    {
        $this->gia = $gia;
    }

    /**
     * @return mixed
     */
    public function getSoluong()
    {
        return $this->soluong;
    }

    /**
     * @param mixed $soluong
     */
    public function setSoluong($soluong)
    {
        $this->soluong = $soluong;
    }

    /**
     * @return mixed
     */
    public function getNgaytao()
    {
        return $this->ngaytao;
    }

    /**
     * @param mixed $ngaytao
     */
    public function setNgaytao($ngaytao)
    {
        $this->ngaytao = $ngaytao;
    }

    /**
     * @return mixed
     */
    public function getMota()
    {
        return $this->mota;
    }

    /**
     * @param mixed $mota
     */
    public function setMota($mota)
    {
        $this->mota = $mota;
    }


}