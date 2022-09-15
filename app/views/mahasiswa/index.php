<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Daftar Mahasiswa</h3>
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
    </tr>
    <?php $i++ ?>
    <?php endforeach; ?>
  </tbody>
</table>
        </div>
    </div>
</div>