<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Detail Mahasiswa</h3>
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-12">
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $data["mahasiswa"]["nama"] ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NRP</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $data["mahasiswa"]["nrp"] ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $data["mahasiswa"]["email"] ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jurusan</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $data["mahasiswa"]["jurusan"] ?>">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="<?= BASEURL ?>/mahasiswa" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>