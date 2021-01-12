<script type="text/javascript">
    const destroyAcademy = (id) => {
        fetch('/academies/' + id, {
            method: 'DELETE',
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "X-Requested-With": "XMLHttpRequest",
                "X-CSRF-Token": document.querySelector('input[name=_token]').value
            },
        }).then((res) => res.json())
        .then((response) => {
            console.log(response)
        });

        document.querySelector(`#academy-${id}`).remove();

        toastAlert('Academy has been deleted successfully!', 'Academy Deletion', 'alert-success', 'filled');
    }
</script>
