<!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade" id="addData" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Data</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/bukutamu/store" method="post">
            @csrf
        <div class="modal-body">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="nama...">
              </div>
            <div class="mb-3">
                <label for="NoTelepon" class="form-label">No Telepon</label>
                <input type="number" class="form-control" id="NoTelepon" name="no_telp" placeholder="No Telepon...">
              </div>
            <div class="mb-3">
                <label for="pesanan" class="form-label">Pesanan</label>
                <input type="text" class="form-control" id="pesanan" name="pesanan" placeholder="Pesanan...">
              </div>
          
              
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>

        </div>
    </form>
      </div>
    </div>
  </div>