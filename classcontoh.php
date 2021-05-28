<?php
class manusia{
    var $nama;
    var $warna_kulit;

    function tampilkan_nama(){
        return $this->nama;
    }
    
    function warna_kulit(){
        return $this->warna_kulit;
    }
    
    function set_nama($nama){
        $this->nama=$nama;
    }
    function set_warna_kulit($tmp){
        $this->warna_kulit=$tmp;
    }
}
$manusia = new manusia();
$manusia->set_nama("Dini Dwi Rahayu");
$manusia->set_warna_kulit("Putih kali <br>");
echo $manusia->tampilkan_nama();
echo "<br>";
echo $manusia->warna_kulit();
echo "<br>";
$manusia2 = new manusia();
$manusia2->set_nama("Dinzy Rahayu");
$manusia2->set_warna_kulit("Sawo Matang");
echo $manusia2->tampilkan_nama();
echo "<br>";
echo $manusia2->warna_kulit();
?>
