<!-- Modal -->
<div class="modal fade addBooking" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Boiler</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="" method="post" id="update-booking-form">
            @csrf

            <div class="modal-body">
                <input type="hidden" name="cid">
               
            </div>

            <div class="modal-footer">
                <button type="reset" id="kt_modal_add_customer_cancel" class="btn btn-white me-3">Reset</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
      </div>
    </div>
</div>
