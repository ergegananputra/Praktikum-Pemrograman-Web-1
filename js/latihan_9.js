document.write("Mula-mula nilai score ...");
var score = 100;
document.write("score = " + score + "<br>");
score += 5;
document.write("score = " + score + "<br>");
score -= 2;
document.write("score = " + score + "<br>");
score /= 4;
document.write("score = " + score + "<br>");
score **= 2;
document.write("score = " + score + "<br>");
score %= 3;
document.write("score = " + score + "<br>");



var aku = 20
var kamu = 19;
var hasil = aku == kamu;
document.write(`${aku} == ${kamu} = ${hasil}<br>`);
var hasil = aku > kamu;
document.write(`${aku} > ${kamu} = ${hasil}<br>`);
var hasil = aku >= kamu;
document.write(`${aku} >= ${kamu} = ${hasil}<br>`);
var hasil = aku < kamu;
document.write(`${aku} < ${kamu} = ${hasil}<br>`);
var hasil = aku <= kamu;
document.write(`${aku} <= ${kamu} = ${hasil}<br>`);
var hasil = aku != kamu;
document.write(`${aku} != ${kamu} = ${hasil}<br>`);

var a = "4" == 4;
var b = "4" === 4;


var benar = aku > kamu;
var salah = aku < kamu;
var hasil = benar && salah;
document.write(`${benar} && ${salah} = ${hasil}<br>`);
var hasil = benar || salah;
document.write(`${benar} || ${salah} = ${hasil}<br>`);
var hasil = !benar;
document.write(`!${benar}= ${hasil}<br>`);


var x = 4;
var y = 3;

var hasil = x & y;
document.write(`${x} & ${y} = ${hasil}<br>`);
var hasil = x | y;
document.write(`${x} | ${y} = ${hasil}<br>`);
var hasil = x ^ y;
document.write(`${x} ^ ${y} = ${hasil}<br>`);
var hasil = ~z;
document.write(`~${x} = ${hasil}<br>`);
var hasil = x >> y;
document.write(`${x} >> ${y} = ${hasil}<br>`);
var hasil = x << y;
document.write(`${x} << ${y} = ${hasil}<br>`);
var hasil = x >>> y;
document.write(`${x} >>> ${y} = ${hasil}<br>`);



var pertanyaan = confirm("Apakah kamu berumur diatas 18 tahun?");
var hasil = pertanyaan ? "Selamat datang" : "Kamu tidak boleh disini";
document.write(hasil);

