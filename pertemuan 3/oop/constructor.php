<?php

# membuat class
class Person
{
    # membuat property
    public $nama;
    public $jurusan;
    public $alamat;

    # membuat constructor
    public function _construct($nama, $alamat, $jurusan)
    {
        $this->nama = $nama;
        $this->jurusan = $jurusan;
        $this->alamat = $alamat;
    }

    # membuat method
    public function setNama($data)
    {
        $this->nama = $data;
    }
    public function getNama()
    {
        return $this->nama;
    }
    public function getJurusan()
    {
        return $this->jurusan;
    }
}

# membuat object
$rama = new Person("Rama Mahesa", "Depok", "Informatika");
$ismail = new Person("Ismail Yusuf", "Bekasi", "Sistem Informasi");

# mengakses method
echo $rama->getNama();
echo $rama->getJurusan();

echo "<br>";
echo $ismail->getNama();
echo $ismail->getJurusan();
