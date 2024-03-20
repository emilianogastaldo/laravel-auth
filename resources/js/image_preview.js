const placeholder = 'https://marcolanci.it/boolean/assets/placeholder.png';
const input = document.getElementById('image');
const preview = document.getElementById('preview');

input.addEventListener('input', () =>{
    preview.src = input.value || placeholder;
})
    // MAGIA NERA
    // cancello le due costanti input  e preview e scrivo direttamente:
    // 
    // image.addEventListener('input', () =>{
    //     preview.src = input.value || placeholder;
    // })