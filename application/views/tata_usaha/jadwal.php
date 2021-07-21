<section class="content">
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><b><font face=""> 
              Jadwal WFH dan WFO bulan 
              <?php
                switch ($jadwal[0]['bulan']) {
                  case '01':
                    echo 'Januari';
                    break;
                  case '02':
                    echo 'Februari';
                    break;
                  case '03':
                    echo 'Maret';
                    break;
                  case '04':
                    echo 'April';
                    break;
                  case '05':
                    echo 'Mei';
                    break;
                  case '06':
                    echo 'Juni';
                    break;
                  case '07':
                    echo 'Juli';
                    break;
                  case '08':
                    echo 'Agustus';
                    break;
                  case '09':
                    echo 'September';
                    break;
                  case '10':
                    echo 'Oktober';
                    break;
                  case '11':
                    echo 'November';
                    break;
                  case '12':
                    echo 'Desember';
                    break;
                  
                  default:
                    # code...
                    break;
                }
              ?> Tahun 2021
            </font></b></h3>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url()."Akademik/home_akademik"?>">Home</a></li>
              <li class="breadcrumb-item active">Daftar Jadwal</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="container-fluid">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <a href="<?= base_url(); ?>tata_usaha/jadwal/generate" class="btn btn-success">Generate Jadwal</a>
            <a href="<?= base_url(); ?>tata_usaha/jadwal/cetak" class="btn btn-success" target="_blank">Cetak</a>
          </div>
          <div class="card-body" style="font-size: 0.5rem;">
            <div class="table-responsive">
              <?= $this->session->pesan ? $this->session->pesan : ''; ?> 
              <table class="table table-bordered" id="dataTables-example">
                <thead>
                  <tr class="nowrap">
                    <th>Nama Pegawai</th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                    <th>6</th>
                    <th>7</th>
                    <th>8</th>
                    <th>9</th>
                    <th>10</th>
                    <th>11</th>
                    <th>12</th>
                    <th>13</th>
                    <th>14</th>
                    <th>15</th>
                    <th>16</th>
                    <th>17</th>
                    <th>18</th>
                    <th>19</th>
                    <th>20</th>
                    <th>21</th>
                    <th>22</th>
                    <th>23</th>
                    <th>24</th>
                    <th>25</th>
                    <th>26</th>
                    <th>27</th>
                    <th>28</th>
                    <th>29</th>
                    <th>30</th>
                    <th>31</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    foreach ($jadwal as $key) { ?>
                      <tr>
                        <td><?= $key['nama']; ?></td>
                        <?php
                          for ($i=1; $i < 32; $i++) { ?>
                            <td
                              <?php
                                switch ($key[$i]) {
                                  case 'wfh':
                                    echo 'class="bg-primary"';
                                    break;
                                  case 'wfo':
                                    echo 'class="bg-success"';
                                    break;

                                  default:
                                    echo 'class="bg-dark"';
                                    break;
                                }
                              ?>>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#ubah<?= $i; ?>"><i class="fas fa-edit"></i></button>

                                <!-- Modal -->
                                <div class="modal fade" id="ubah<?= $i; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Ubah Tanggal</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <form action="<?= base_url('tata_usaha/jadwal/ubah'); ?>" method="post">
                                        <div class="modal-body">
                                          <div class="form-group">
                                            <input type="hidden" value="<?= $key['id_pegawai']; ?>" name="id_pegawai">
                                            <input type="hidden" value="<?= $i; ?>" name="tanggal">
                                            <select class="form-control" name="jenis">
                                              <option value="wfh" <?= $key[$i] == 'wfh' ? 'selected' : '' ; ?>>WFH</option>
                                              <option value="wfo" <?= $key[$i] == 'wfo' ? 'selected' : '' ; ?>>WFO</option>
                                              <option value="libur" <?= $key[$i] == 'libur' ? 'selected' : '' ; ?>>Libur</option>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <button type="submit" class="btn btn-warning">Ubah</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </td>
                          <?php }
                        ?>
                      </tr>
                    <?php }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
