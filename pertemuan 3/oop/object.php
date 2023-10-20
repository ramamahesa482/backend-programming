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
}

# membuat object
$rama = new Person();
$ismail = new Person();

# mengakses property
$rama->nama = "Rama Mahesa";
echo $rama->nama;

echo "<br>";
$ismail->nama = "Ismail Yusuf";
echo $ismail->nama;

# mengakses method
echo "<br>";
$rama->setNama('Rama');
echo $rama->nama;
