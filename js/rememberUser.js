
        const checkbox = document.getElementById('remember_user');
        const checkboxLabel = document.getElementById('Remember_user_text');

        checkbox.addEventListener('change', function() {
            if (this.checked) {
                checkboxLabel.style.color = 'green';
            } else {
                checkboxLabel.style.color = 'red';
            }
        });
       