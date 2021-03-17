// merubah OBJECT ke JSON
// let mahasiswa = {
//   nama: "Muhammad Aulia Hanifi",
//   no_hp: "085237585803",
//   email: "hanifinida@gmail.com",
// };

// console.log(mahasiswa);
// console.log(JSON.stringify(mahasiswa));

// merubah JSON ke OBJECT
// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function () {
//   if (xhr.readyState == 4 && xhr.status == 200) {
//     // let mahasiswa = this.responseText;
//     let mahasiswa = JSON.parse(this.responseText);
//     console.log(mahasiswa);
//   }
// };
// // true jika asyncronus, jika tidak syncronus
// xhr.open("GET", "coba.json", true);
// xhr.send();

// MENGGUNAKAN JQUERY
$.getJSON("coba.json", function (data) {
  console.log(data);
});
