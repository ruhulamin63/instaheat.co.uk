
<!-- Modal -->
<div class="modal fade orderStatusChange" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Change Order Status</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="<?= route('update.order.status.change') ?>" method="post" id="order-status-change-form">
            @csrf

            <div class="modal-body">
            
                <input type="hidden" name="cid">
                
                <div class="row col-md-12">
                    <label class="fs-6 fw-bold mb-2">Status</label>
                    <select style="width: 300px;" name="status" id="status" aria-label="Select a Status" data-control="select2" data-placeholder="Select a Type..." class="form-select form-select-solid fw-bolder">
                        <option value="">--Select--</option>
                        <option value="0">Incomplete</option>
                        <option value="1">Complete</option>
                        <option value="2">Cancel</option>
                    </select>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Change Status</button>
            </div>
        </form>
      </div>
    </div>
  </div>