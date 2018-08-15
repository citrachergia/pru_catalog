<!-- Layanan Section -->
    <section class="row bg-pink bg-shadow text-center" id="layanan">
      <div class="row">
        <div class="col-xs-12">
          <h1 class="mb-30">Berikan Komentar Anda</h1>
        </div>
        <div class="col-xs-12">
          <button class="btn btn-default td-btn outline white" data-toggle="modal" data-target="#contactModal">Disini</button>
        </div>
      </div>
    </section>

    <!-- Contact Modal -->
  <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactTitle">
    <div class="modal-dialog" role="document">
      <div class="modal-content bg-pink">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title" id="contactTitle">Berikan Komentar</h3>
        </div><!-- /.modal-header -->
        <div class="modal-body">
          <form class="mb-15">
            <div class="form-group">
              <label class="sr-only" for="name">Nama</label>
              <input type="text" class="form-control" id="name" placeholder="Nama Anda" required>
            </div>
            <div class="form-group">
              <label class="sr-only" for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Alamat Email" required>
            </div>
            <div class="form-group">
              <label class="sr-only" for="subject">Subjek</label>
              <input type="text" class="form-control" id="subject" placeholder="Subjek" required>
            </div>
            <div class="form-group">
              <label class="sr-only" for="message">Komentar</label>
              <textarea class="form-control" id="message" rows="6" placeholder="Berikan komentar Anda..." required></textarea>
            </div>
            <small>*Harus di isi</small>
            <div class="checkbox">
              <label>
                <input type="checkbox"> I'm a robot!
              </label>
            </div>
          </form>
          <div class="modal-footer">
            <button type="button" class="btn td-btn outline small white" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn td-btn outline small white">Kirim</button>
          </div><!-- /.modal-footer -->
        </div><!-- /.modal-body -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->