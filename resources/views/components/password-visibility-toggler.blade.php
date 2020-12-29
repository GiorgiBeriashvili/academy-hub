<script type="text/javascript" defer>
    const toggleVisibility = (input, toggle) => {
        const inputField = document.querySelector(input);
        const visibilityToggle = document.querySelector(toggle);

        if (inputField.type === 'password') {
            inputField.type = 'text';

            visibilityToggle.dataset.title = 'Hide Text';
            visibilityToggle.firstChild.setAttribute('class', 'fa fa-eye-slash');

            toastAlert('Please be careful with your password!', 'Danger Alert!', 'alert-danger', 'filled');
        } else {
            inputField.type = 'password';

            visibilityToggle.dataset.title = 'Show Text';
            visibilityToggle.firstChild.setAttribute('class', 'fa fa-eye');
        }
    }
</script>
