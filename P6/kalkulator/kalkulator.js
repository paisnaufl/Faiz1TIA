function calculate(operasi) {
    const num1 = parseFloat(document.getElementById('angka1').value);
    const num2 = parseFloat(document.getElementById('angka2').value);
    let hasil;

    if (operasi === 'tambah') {
        hasil = num1 + num2;
    } else if (operasi === 'kurang') {
        hasil = num1 - num2;
    } else if (operasi === 'kali') {
        hasil = num1 * num2;
    } else if (operasi === 'bagi') {
        hasil = num1 / num2;
    }

    document.getElementById('hasil').innerText = "Hasil " + operasi + ": " + hasil;
}