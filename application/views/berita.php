<?php
// Cek role user
if($this->session->userdata('role') == 'admin'){ // Jika role-nya admin
    ?>
    <div class="pull-right">
        <a href="" class="btn btn-success">TAMBAH DATA</a>
    </div>
    <?php
}
?>

<h2 style="margin-top: 0;margin-bottom: 0;">Berita</h2>
<div class="clearfix"></div>
<hr />

<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Tanggal</th>
                <th style="width: 80px;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Quarantine Hari ke 48</td>
                <td>Warga Semarang resah, perekonomian kian memburuk warga di Semarang muulai resah karena mereka tidak dapat mencari nafkah karena quarantine...</td>
                <td>12 Januari 2019</td>
                <td>
                    <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-pencil"></i></a>
                    <a href="" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Akankah corona selesai tahun ini?</td>
                <td>Virus corona yang semakin mewabah, membuat para peneliti tidak yakin jika tahun ini corona akan selesai. Ditambah lagi kebiasaan masyarakat yang...</td>
                <td>12 Januari 2019</td>
                <td>
                    <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-pencil"></i></a>
                    <a href="" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Mahasiswa merasa keberatan WFH</td>
                <td>Mahasiswa di Indonesia merasa keberatan karena sistem WFH dirasa tidak efektif. Mereka hanya merasa bahwa mahasiswa hanya diberatkan oleh tugas...</td>
                <td>12 Januari 2019</td>
                <td>
                    <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-pencil"></i></a>
                    <a href="" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
