<?php
function gempa_internsial_node (){
    //load data dari xml biar muncul
    $link_sumber = "https://data.bmkg.go.id/autogempa.xml";
    //load dah selesai wkwk
    //buka file xml dan parsing satu satu;v
    $buka_data = @simplexml_load_file($link_sumber)or die ("gagal! Perbaiki internet nya gan...");
    //cetak ke layar monitor
        print "\033[0;36m"; //aku buta warna, ketoke cyan nek ra salah ;v
        print "tanggal   :".$buka_data->gempa->Tanggal.PHP_EOL;
        print "jam       :".$buka_data->gempa->Jam.PHP_EOL;
        print "\033[01;31m"; //gabut warna ;v wkwk
        print "lintang   :".$buka_data->gempa->Lintang.PHP_EOL;
        print "Bujur     :".$buka_data->gempa->Bujur.PHP_EOL;
        print "Magnitude :".$buka_data->gempa->Magnitude.PHP_EOL;
        print "Kedalaman :".$buka_data->gempa->Kedalaman.PHP_EOL;
        print "\033[0;32m"; // Hijau ketoe
        print "Wilayah   :".$buka_data->gempa->Wilayah3.PHP_EOL;
        print "Potensi   :".$buka_data->gempa->Potensi.PHP_EOL;
        

}
function kopirek_ben_ra_di_colong () {
    print "===========================================".PHP_EOL;
    print "Dev by    : Internsial Node".PHP_EOL;
    print "Telegram  : https://t.me/webdevindonesia".PHP_EOL;
    print "Thanks to : Otak dan Laptop Tercinta".PHP_EOL;
    print "===========================================".PHP_EOL;
}
function takon_ngebug_opo_ora (){
    print "Bug? Jika iya ketik ya : ";
    $tanya = fopen("php://stdin","r");
    $tanya_kiper_gawang = trim (fgets($tanya));
        //kondisi jika ngebug
        if ($tanya_kiper_gawang == "ya") {
			print "\033[0;36m";
            print "=========Kontak kami di (DM saja ntar aku balas)========".PHP_EOL;
            print "telegram kami di @internsialnode yaww".PHP_EOL;
            print "Instagram Kami di @internsial_node yaw".PHP_EOL;
            print "=========MAKASIH, I love You========".PHP_EOL;
        } else {
            print "ya udah, makasih telah gunakan tool ini ;v".PHP_EOL;
        }
}
kopirek_ben_ra_di_colong();
gempa_internsial_node();
takon_ngebug_opo_ora();
print "\033[0m"; // Normal
//COPYRIGHT INTERNSIAL NODE
?>
