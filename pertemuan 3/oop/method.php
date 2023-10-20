<?php

# membuat class
class Person
{
    # membuat property
    public $nama;
    public $jurusan;
    public $alamat;

    # membuat method
    public function setNama($data)
    {
        $this->nama = $data;
    }
    public function getNama()
    {
        return $this->nama;
    }
}

# membuat object
$rama = new Person();
$ismail = new Person();

# mengakses method
$rama->setNama('Rama Mahesa');
echo $rama->getNama();

echo "<br>";
$ismail->setNama('Ismail Yusuf');
echo $ismail->getNama();
