var fromDescription = document.getElementById('fromDescription');

if (fromDescription.attachEvent) {
    fromDescription.attachEvent('click'.onFromDescription);
} else {
    fromDescription.addEventListener('click', onFromDescription)
}

function onFromDescription(e) {
    alert('gk');
}