
<div class="container">
    <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash() ?>
      </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <h3>Daftar Mahasiswa</h3>
        </div>
        <div class="col-md-3">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addMahasiswa">
                Add Mahasiswa
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <form action="<?= BASEURL ?>/mahasiswa/search" method="POST">
                <input type="text" name="keyword" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
        </div>
        <div class="col-md-3">
            <button class="btn btn-info" type="submit">Cari</button>
            <a href="<?= BASEURL ?>/mahasiswa" class="btn btn-warning">RESET</a>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NRP</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach($data["mahasiswa"] as $mahasiswa) : ?>
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td><?= $mahasiswa["nama"] ?></td>
                        <td><?= $mahasiswa["nrp"] ?></td>
                        <td><?= $mahasiswa["email"] ?></td>
                        <td><?= $mahasiswa["jurusan"] ?></td>
                        <td>
                            <a href="<?= BASEURL ?>/mahasiswa/detail/<?= $mahasiswa["id"] ?>"
                                class="btn btn-info">Detail</a>
                            <a href="<?= BASEURL ?>/mahasiswa/delete/<?= $mahasiswa["id"] ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php $i++ ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addMahasiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="<?= BASEURL ?>/mahasiswa/tambah" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NRP</label>
                    <input type="text" name="nrp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  >
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="add-mhs" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>