window.alert("Hello World");
alert("Hello Kawan");


alert("Selamat datang di tutorial Javascript");
document.write("<button onClick='alert(\"tombol diklik!\")'>Klik Saya</button>");

yakin = confirm("Apakah anda yakin akan menghapus?");

if (yakin) {
    window.location = "https//www.petanikode.com";
} else {
    document.write("Baiklah, tetap disini saja ya :)")
}

var nama = prompt("Siapa nama kamu?", "");
document.write("<p>Hello "+nama+"</p>");
