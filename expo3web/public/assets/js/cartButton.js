document.querySelectorAll('.increase').forEach(button => {
    button.addEventListener('click', function() {
        let input = this.closest('td').querySelector('input');
        input.value = parseInt(input.value) + 1;
    });
});

document.querySelectorAll('.decrease').forEach(button => {
    button.addEventListener('click', function() {
        let input = this.closest('td').querySelector('input');
        if (parseInt(input.value) > 1) {
            input.value = parseInt(input.value) - 1;
        }
    });
});