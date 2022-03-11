<?php

class Order {

    private $nama, $harga, $diskon;

    public function setOrder($nama, $harga, $diskon){
        $this->nama = $nama;
        $this->harga = $harga;
        $this->diskon = $diskon;
    }

    public function getOrder($nama, $harga, $diskon){
        return $this->nama;
        return $this->harga;
        return $this->diskon;
    }

    public function updateOrder($nama, $harga, $diskon){
        $this->nama = $nama;
        $this->harga = $harga;
        $this->diskon = $diskon;
    }

    public function deleteOrder(){
        $this->nama = null;
        $this->harga = null;
        $this->diskon = null;
    }
}
?>
