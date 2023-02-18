<?php
include "../template-spp/navbar_petugas.php";
include "../template-spp/sidebar_petugas.php";
include "../template-spp/header.php";
?>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
        <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Data terakhir pembayaran spp</h4>
          </div>
          <div class="card-body p-0">
            <div class="table-responsive table-invoice">
              <table class="table table-striped">
                <tr>
                  <th>#</th>
                  <th>NISN</th>
                  <th>Nama Siswa</th>
                  <th>Tanggal bayar</th>
                  <th>Jumlah bayar</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td class="font-weight-600">2122.10.337</td>
                  <td>
                    <div>Albretus</div>
                  </td>
                  <td>2023-02-12</td>
                  <td>
                    20000
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td class="font-weight-600">2122.10.343</td>
                  <td>
                    <div>Dika</div>
                  </td>
                  <td>2023-02-12</td>
                  <td>
                    100000
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td class="font-weight-600">2122.10.360</td>
                  <td>
                    <div>Mahen</div>
                  </td>
                  <td>2023-02-12</td>
                  <td>
                    50000
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td class="font-weight-600">2122.10.336</td>
                  <td>
                    <div>Adnan</div>
                  </td>
                  <td>2023-02-12</td>
                  <td>
                    90000
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
        </section>
      </div>

    </div>
  </div>

<?php
include "../template-spp/footer.php";
?>