<?php 
  session_start();
  error_reporting(0);
  
  if (empty($_SESSION['username']) AND empty($_SESSION['password'])){
    echo"<center>Untuk mengakses halaman ini anda harus login</center><br>";
    echo"<center><a href=../../index.php>Silahkan Login";
  }else{
    $aksi="modul/produk/aksi_produk.php";
    switch($_GET[aksi]){
      default:
    }
  ?>

<h3><i class="fa fa-angle-right"></i> Responsive Table Examples</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> Responsive Table</h4>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                    <tr>
                      <th>Code</th>
                      <th>Company</th>
                      <th class="numeric">Price</th>
                      <th class="numeric">Change</th>
                      <th class="numeric">Change %</th>
                      <th class="numeric">Open</th>
                      <th class="numeric">High</th>
                      <th class="numeric">Low</th>
                      <th class="numeric">Volume</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>AAC</td>
                      <td>AUSTRALIAN AGRICULTURAL COMPANY LIMITED.</td>
                      <td class="numeric">$1.38</td>
                      <td class="numeric">-0.01</td>
                      <td class="numeric">-0.36%</td>
                      <td class="numeric">$1.39</td>
                      <td class="numeric">$1.39</td>
                      <td class="numeric">$1.38</td>
                      <td class="numeric">9,395</td>
                    </tr>
                    <tr>
                      <td>AAD</td>
                      <td>ARDENT LEISURE GROUP</td>
                      <td class="numeric">$1.15</td>
                      <td class="numeric"> +0.02</td>
                      <td class="numeric">1.32%</td>
                      <td class="numeric">$1.14</td>
                      <td class="numeric">$1.15</td>
                      <td class="numeric">$1.13</td>
                      <td class="numeric">56,431</td>
                    </tr>
                    <tr>
                      <td>AAX</td>
                      <td>AUSENCO LIMITED</td>
                      <td class="numeric">$4.00</td>
                      <td class="numeric">-0.04</td>
                      <td class="numeric">-0.99%</td>
                      <td class="numeric">$4.01</td>
                      <td class="numeric">$4.05</td>
                      <td class="numeric">$4.00</td>
                      <td class="numeric">90,641</td>
                    </tr>
                    <tr>
                      <td>ABC</td>
                      <td>ADELAIDE BRIGHTON LIMITED</td>
                      <td class="numeric">$3.00</td>
                      <td class="numeric"> +0.06</td>
                      <td class="numeric">2.04%</td>
                      <td class="numeric">$2.98</td>
                      <td class="numeric">$3.00</td>
                      <td class="numeric">$2.96</td>
                      <td class="numeric">862,518</td>
                    </tr>
                    <tr>
                      <td>ABP</td>
                      <td>ABACUS PROPERTY GROUP</td>
                      <td class="numeric">$1.91</td>
                      <td class="numeric">0.00</td>
                      <td class="numeric">0.00%</td>
                      <td class="numeric">$1.92</td>
                      <td class="numeric">$1.93</td>
                      <td class="numeric">$1.90</td>
                      <td class="numeric">595,701</td>
                    </tr>
                    <tr>
                      <td>ABY</td>
                      <td>ADITYA BIRLA MINERALS LIMITED</td>
                      <td class="numeric">$0.77</td>
                      <td class="numeric"> +0.02</td>
                      <td class="numeric">2.00%</td>
                      <td class="numeric">$0.76</td>
                      <td class="numeric">$0.77</td>
                      <td class="numeric">$0.76</td>
                      <td class="numeric">54,567</td>
                    </tr>
                    <tr>
                      <td>ACR</td>
                      <td>ACRUX LIMITED</td>
                      <td class="numeric">$3.71</td>
                      <td class="numeric"> +0.01</td>
                      <td class="numeric">0.14%</td>
                      <td class="numeric">$3.70</td>
                      <td class="numeric">$3.72</td>
                      <td class="numeric">$3.68</td>
                      <td class="numeric">191,373</td>
                    </tr>
                    <tr>
                      <td>ADU</td>
                      <td>ADAMUS RESOURCES LIMITED</td>
                      <td class="numeric">$0.72</td>
                      <td class="numeric">0.00</td>
                      <td class="numeric">0.00%</td>
                      <td class="numeric">$0.73</td>
                      <td class="numeric">$0.74</td>
                      <td class="numeric">$0.72</td>
                      <td class="numeric">8,602,291</td>
                    </tr>
                    <tr>
                      <td>AGG</td>
                      <td>ANGLOGOLD ASHANTI LIMITED</td>
                      <td class="numeric">$7.81</td>
                      <td class="numeric">-0.22</td>
                      <td class="numeric">-2.74%</td>
                      <td class="numeric">$7.82</td>
                      <td class="numeric">$7.82</td>
                      <td class="numeric">$7.81</td>
                      <td class="numeric">148</td>
                    </tr>
                    <tr>
                      <td>AGK</td>
                      <td>AGL ENERGY LIMITED</td>
                      <td class="numeric">$13.82</td>
                      <td class="numeric"> +0.02</td>
                      <td class="numeric">0.14%</td>
                      <td class="numeric">$13.83</td>
                      <td class="numeric">$13.83</td>
                      <td class="numeric">$13.67</td>
                      <td class="numeric">846,403</td>
                    </tr>
                    <tr>
                      <td>AGO</td>
                      <td>ATLAS IRON LIMITED</td>
                      <td class="numeric">$3.17</td>
                      <td class="numeric">-0.02</td>
                      <td class="numeric">-0.47%</td>
                      <td class="numeric">$3.11</td>
                      <td class="numeric">$3.22</td>
                      <td class="numeric">$3.10</td>
                      <td class="numeric">5,416,303</td>
                    </tr>
                  </tbody>
                </table>
              </section>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-lg-4 -->
        </div>


        <?php
        break;
        case 'tambah';
        ?>
        <h3><i class="fa fa-angle-right"></i> Master Produk</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> Form Produk</h4>
              <form class="form-horizontal style-form" method="get">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nama Produk</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Kategori</label>
                  <div class="col-sm-10">
                    <select name="Kategori" class="form-control"> 
                    <?php
                        $sql=mysqli_query($con, "Select * from kategori order by nama_kategori");
                        while($r=mysqli_fetch_array($sql)){
                            echo "<option value=$r[id_kategori]>$r[nama_kategori]</option>";
                        }
                    ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Deskripsi</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="deskripsi">
                    </textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Jumlah</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" name="jumlah">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Tanggal Masuk</label>
                  <div class="col-md-3 col-xs-11">
                    <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="01-01-2021" class="input-append date dpYears">
                      <input type="text" name="tanggal_masuk" readonly="" value="01-01-2021" size="16" class="form-control">
                      <span class="input-group-btn add-on">
                        <button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
                        </span>
                    </div>
                    <span class="help-block">Select date</span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Harga Jual</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" name="harga">
                  </div>
                </div>
                <div class="form-group last">
                  <label class="col-sm-2 col-sm-2 control-label">Upload Gambar</label>
                  <div class="col-md-10">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
                      </div>
                      <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                      <div>
                        <span class="btn btn-theme02 btn-file">
                          <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                        <input type="file" class="default" />
                        </span>
                        <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                      </div>
                    </div>
                    <span class="label label-info">NOTE!</span>
                    <span>
                      Attached image thumbnail is
                      supported in Latest Firefox, Chrome, Opera,
                      Safari and Internet Explorer 10 only
                      </span>
                  </div>
                  </div>
                  <div class="form-group">
                  <div class="col-sm-10">
                  <button type="button" class="btn btn-primary">Simpan</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
        
        <?php
        break;
        case 'edit';
        ?>

        <?php
        break;
        } //tutup dari switch
          } //tutup if
        ?>