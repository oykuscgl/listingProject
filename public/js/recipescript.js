function filterContent(category) {

    const contents = document.querySelectorAll('.content');
    contents.forEach(content => {
        content.style.display = 'none';
    });


    const filteredContents = document.querySelectorAll(`.${category}`);
    filteredContents.forEach(content => {
        content.style.display = 'block';
    });
}

window.onload = () => {
    const contents = document.querySelectorAll('.content');
    contents.forEach(content => {
        content.style.display = 'block';
    });
};

function changeBackgroundColor(button) {
    button.classList.toggle('bg-red-500');
    button.classList.toggle('text-white');
    button.classList.remove('hover:bg-red-500', 'hover:text-white', 'focus:bg-red-500', 'focus:text-white', 'hover:text-red-500');
}


function showMessage() {
    alert('Butona tıklandı!');
}

document.getElementById("loginButton").onclick = function() {
    window.location.href = "{{ asset('login') }}";
};

document.getElementById("registerButton").onclick = function() {
    window.location.href = "{{ asset('register') }}";
};
