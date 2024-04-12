 <!-- Modal -->
 <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog        ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="deleteModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form  wire:submit.prevent='destroy'>

                <div class="modal-body">
                    <h6 class="text-dark">Are you sure you want to delete this data?</h6>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Yes. Delete</button>
            </div>
        </form>
        </div>
    </div>
</div>
