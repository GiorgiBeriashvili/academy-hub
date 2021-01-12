<script type="text/javascript">
    const verifyAcademy = (id) => {
        let verified;

        fetch('/academies/' + id + '/verify', {
            method: 'PATCH',
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "X-Requested-With": "XMLHttpRequest",
                "X-CSRF-Token": document.querySelector('input[name=_token]').value
            },
        })
        .then((res) => res.json())
        .then((response) => {
            verified = response['verified'];

            if (verified) {
                document.querySelector(`#verification-status-${id}`).remove();
                document.querySelector(`#verification-action-${id}`).classList.remove('btn-secondary');
                document.querySelector(`#verification-action-${id}`).classList.add('btn-success');

                toastAlert('Academy has been unverified successfully!', 'Academy Verification', 'alert-secondary', 'filled');
            } else {
                const verificationBadge = document.createElement("i");
                verificationBadge.id = `verification-status-${id}`;
                verificationBadge.className = "fa fa-check-circle text-success";

                document.querySelector(`#verification-action-${id}`).classList.remove('btn-success');
                document.querySelector(`#verification-action-${id}`).classList.add('btn-secondary');

                document.querySelector(`#card-title-${id}`).prepend(verificationBadge);

                toastAlert('Academy has been verified successfully!', 'Academy Verification', 'alert-success', 'filled');
            }
        });
    }
</script>
