const submit = document.getElementById('submit');
submit.addEventListener('submit', (event) => {
    event.preventDefault();
    alert('Hello world')
    submit.textContent = 'Done';
})