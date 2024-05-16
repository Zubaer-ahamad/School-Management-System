function toggleMenu() {
    document.getElementById('header-icon').classList.toggle('active');
};


document.getElementById('btn-align-left').addEventListener('click', (e) => {
    e.preventDefault();
    const decryption = document.getElementById('decryption-field');
    decryption.style.textAlign = 'left';
    localStorage.setItem("text-left", 1);
});

document.getElementById('btn-align-right').addEventListener('click', (e) => {
    e.preventDefault();
    const decryption = document.getElementById('decryption-field');
    decryption.style.textAlign = 'right';
    localStorage.setItem("text-right", 1);
});

document.getElementById('btn-align-justify').addEventListener('click', (e) => {
    e.preventDefault();
    const decryption = document.getElementById('decryption-field');
    decryption.style.textAlign = 'justify';
    localStorage.setItem("text-justify", 1);
});

document.getElementById('btn-align-center').addEventListener('click', (e) => {
    e.preventDefault();
    const decryption = document.getElementById('decryption-field');
    decryption.style.textAlign = 'center';
    localStorage.setItem("text-center", 1);
});

document.getElementById('btn-bold').addEventListener('click', (e) => {
    e.preventDefault();
    const decryption = document.getElementById('decryption-field');
    decryption.setAttribute("style", "fontStyle: bold");
    // decryption.style.fontWeight = 'bold';
    // localStorage.setItem("text-bold", 1);
});

document.getElementById('btn-italic').addEventListener('click', (e) => {
    e.preventDefault();
    const decryption = document.getElementById('decryption-field');
    decryption.style.cssTex = "fontStyle: italic";
    // decryption.setAttribute("style", "fontStyle: italic");
    // decryption.style.fontStyle = 'italic';
    // localStorage.setItem("text-italic", 1);
});

document.getElementById('colorPicker').addEventListener('input', (e) => {
    e.preventDefault();
    const colorInput = document.getElementById("colorPicker");
    const selectedColor = colorInput.value;
    const decryption = document.getElementById('decryption-field');
    const decryptionValue = decryption.value;
    console.log(selectedColor);
    // decryption.style.color = selectedColor;
    // decryption.setAttribute("style", "color:" selectedColor);
    // localStorage.setItem("text-color", 1);
});