const postuler = document.getElementById('postuler');
postuler.addEventListener('click', function() {
    id = postuler.style.getPropertyValue('--id');
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'postuler.php');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send('id=' + id);
});