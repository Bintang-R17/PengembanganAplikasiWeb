document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("registrationForm");

  form.addEventListener("submit", function (event) {
    event.preventDefault();

    const namaLengkap = document.getElementById("namaLengkap").value.trim();
    const jenisKelamin = document.getElementById("jenisKelamin").value;
    const kataSandi = document.getElementById("kataSandi").value.trim();
    const tanggalLahir = document.getElementById("tanggalLahir").value;
    const noTelepon = document.getElementById("noTelepon").value.trim();

    // Array untuk menyimpan nama field yang belum diisi
    const emptyFields = [];

    // Cek setiap field
    if (!namaLengkap) emptyFields.push("Nama Lengkap");
    if (!jenisKelamin) emptyFields.push("Jenis Kelamin");
    if (!kataSandi) emptyFields.push("Email");
    if (!tanggalLahir) emptyFields.push("Tanggal Lahir");
    if (!noTelepon) emptyFields.push("No Telepon");

    // Jika ada field yang kosong, tampilkan alert
    if (emptyFields.length > 0) {
      const message = emptyFields.join("\n") + " wajib diisi\n";
      alert(message);
      return;
    }

    // Jika semua field terisi, proses data form
    console.log("Data Registrasi:");
    console.log("Nama Lengkap:", namaLengkap);
    console.log("Jenis Kelamin:", jenisKelamin);
    console.log("Email", kataSandi);
    console.log("No Telepon:", noTelepon);
    console.log("Tanggal Lahir:", tanggalLahir);

    // Reset form setelah submit
    form.reset();

    window.alert("Registrasi berhasil!");
  });
});
