<!-- Modal containing the image -->
<div class="modal" id="image-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-media w-auto">
            <a href="#" class="close" role="button" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </a>
            <img id="enhanced-image" src="..." class="img-fluid rounded" alt="Image modal">
        </div>
    </div>
</div>

<script defer>
    const enhanceImage = (id, image) => {
        const imageModal = document.querySelector('#image-modal');
        const enhancedImage = document.querySelector('#enhanced-image');

        imageModal.id = `modal-${id}`
        enhancedImage.src = image;

        halfmoon.toggleModal(`modal-${id}`);

        imageModal.id = 'image-modal';
    };
</script>
