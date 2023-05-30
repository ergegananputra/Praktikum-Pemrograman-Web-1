<?php 
    /**
     * Adiel Boanerge Gananputra
     */
    echo "Latihan 1 <br>";
    /*Tuliskan nama panggilan anda, 
    apabila jumlah huruf nama anda sama dengan tanggal 
    hari ini dikurangi 2, maka tampilkan pesan "berhasil", 
    jika jumlah huruf nama anda lebih kecil dengan tanggal 
    hari ini, maka, tampilkan pesan "sedikit lagi", 
    jika tidak keduanya, tampilkan pesan "coba lagi". 
    (Gunakan fungsi date()).
    */
    $nama = "erge";
    $jumlah = strlen($nama);
    $today = date('N');
    if ($jumlah == $today - 2) {
        echo "berhasil <br>";
    }
    elseif ($jumlah < $today){
        echo "sedikit lagi <br>";
    }
    else {
        echo "coba lagi <br>";
    }


    echo "<br> latihan 2 <br>";
    /**Pembagian tugas kerja kelompok: 
     * Anda diminta untuk membuat sebuah grup 
     * yang beranggotakan 5 orang, termasuk anda. 
     * Masing - masing anggota, diidentifikasi 
     * dengan Nama dan NIM. Ketika pembagian tugas 
     * kerja, anda berperan sebagai project manager. 
     * Sebagai seorang project manager, anda membagi 
     * peran anggota kelompok dengan aturan bahwa 
     * anggota dengan NIM ganjil mendapat peran sebagai 
     * front-end developer, sedangkan, anggota dengan 
     * NIM genap, mendapat peran sebagai back-end developer. 
     * Tampilkan nama anggota kelompok anda dengan peran 
     * yang sesuai. */

    $kelas = array(
        'Joko' => 1, 
        'Renaldi' => 2, 
        'Munir' => 3, 
        'Adit' => 4, 
    );

    foreach ($kelas as $key => $value) {
        if ($value % 2 == 0) {
            echo $key . " back-end developer <br>";
        } else {
            echo $key . " front-end developer <br>";
        }
        
    }


    echo "<br> Latihan 3 <br>";
    /**
     * Masukkan setiap huruf dalam nama depan anda ke 
     * sebuah array. Anda akan ditugaskan untuk KKN ke 
     * kota - kota yang tersebar di Indonesia. Secara 
     * berurutan, setiap huruf yang terdapat dalam nama 
     * depan anda akan menentukan kota mana anda akan 
     * ditugaskan. Aturan penempatan mahasiswa KKN:
     */

     $nama_list = array('A', 'D', 'I', 'E', 'L');
     $list_kota = array(
        'Lampung',
        'Riau',
        'Jambi',
        'Bengkulu',
        'Makassar',
        'Kendari',
        'Gorontalo',
        'Samarinda',
        'Papua',
        'Nusa Tenggara Barat'
     );

     $ketemu = false;
     foreach ($nama_list as $char) {
        foreach ($list_kota as $kota) {
            $char = strtoupper($char);
            if ($char == strtoupper($kota[0])) {
                echo $kota;
                $ketemu = true;
                break;
            }
        }

        if ($ketemu) {
            break;
        }
     }
     if ($ketemu == false) {
        echo "Jawa Timur";
     }


?>