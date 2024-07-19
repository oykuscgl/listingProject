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

function toggleCheckboxes() {
    var checkboxes = document.getElementById("checkboxes");
    if (checkboxes.style.display === "none" || checkboxes.style.display === "") {
        checkboxes.style.display = "block";
    } else {
        checkboxes.style.display = "none";
    }
}


    function toggleCheckboxes() {
        const checkboxes = document.getElementById('checkboxes');
        if (checkboxes.classList.contains('hidden')) {
            checkboxes.classList.remove('hidden');
        } else {
            checkboxes.classList.add('hidden');
        }
    }

    // Change background color of the button (example functionality)
    function changeBackgroundColor(button) {
        button.classList.toggle('bg-gray-200');
    }

    // Filter cards based on category
    function filterCards(categoryId) {
        const cards = document.querySelectorAll('.card');
        cards.forEach(card => {
            // Check if the card has the class matching the category ID
            if (categoryId === 'all' || card.classList.contains('category-' + categoryId)) {
                card.classList.remove('hidden');
            } else {
                card.classList.add('hidden');
            }
        });
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

function filterCards(category) {
    const cards = document.querySelectorAll('.card');
    cards.forEach(card => {
        if (category === 'all' || card.classList.contains(category)) {
            card.classList.remove('hidden');
        } else {
            card.classList.add('hidden');
        }
    });
}

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

function toggleCheckboxes() {
    var checkboxes = document.getElementById("checkboxes");
    if (checkboxes.style.display === "none" || checkboxes.style.display === "") {
        checkboxes.style.display = "block";
    } else {
        checkboxes.style.display = "none";
    }
}


    function toggleCheckboxes() {
        const checkboxes = document.getElementById('checkboxes');
        if (checkboxes.classList.contains('hidden')) {
            checkboxes.classList.remove('hidden');
        } else {
            checkboxes.classList.add('hidden');
        }
    }

    // Change background color of the button (example functionality)
    function changeBackgroundColor(button) {
        button.classList.toggle('bg-gray-200');
    }

    // Filter cards based on category
    function filterCards(categoryId) {
        const cards = document.querySelectorAll('.card');
        cards.forEach(card => {
            // Check if the card has the class matching the category ID
            if (categoryId === 'all' || card.classList.contains('category-' + categoryId)) {
                card.classList.remove('hidden');
            } else {
                card.classList.add('hidden');
            }
        });
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

function filterCards(category) {
    const cards = document.querySelectorAll('.card');
    cards.forEach(card => {
        if (category === 'all' || card.classList.contains(category)) {
            card.classList.remove('hidden');
        } else {
            card.classList.add('hidden');
        }
    });
}
