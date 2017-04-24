<?php 
error_reporting( ~E_NOTICE ); // avoid notice
require_once 'koneksi.php';
            if(isset($_POST['btnsave']))
            {
              //  $jumlah = count($_POST["id_travel"]);
              /*  $mobil = $_POST['mobil'];
                $quer5 = mysqli_query($koneksi, "SELECT * FROM mobil where id_mobil='$mobil'");
                $jum_mobil=mysqli_fetch_array($quer5); 
                $jumlah=$jum_mobil['jum_duduk'];*/
             
                $namasupir = $_POST['namasupir'];
                $nopol = $_POST['nopol'];
                $jenisbak = $_POST['jenisbak'];
                $volume = $_POST['volume'];
                $idsup = $_POST['idsup'];
                $iduser = $_POST['iduser'];
                $tanggal = $_POST['tanggal'];
                // if no error occured, continue ....
                 if(!isset($errMSG))
                {
                $stmt = "INSERT INTO monitor(id_monitor,nama_supir,nopol_armada,jenis_bak,volume,id_supplier,id_user,waktu_input)VALUES(null,'$namasupir','$nopol','$jenisbak','$volume','$idsup','$iduser','$tanggal')";
             
                    if($koneksi->query($stmt)===true)
                    {
                        $successMSG = "Trip berhasil ditambahkan ...";
                       // header("berangkat.php"); // redirects image view page after 5 seconds.
                        ?>
                            <script language="javascript">
                            alert("Trip berhasil di tambahkan");
                            close();
                            </script>
                        <?php
                    }
                    else
                    {
                        $errMSG = "error while inserting....";
                    }
                }
            }
          ?>


          <?php
          if(isset($errMSG)){
              ?>
                    <div class="alert alert-danger">
                      <span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
                    </div>
                    <?php
          }
          else if(isset($successMSG)){
            ?>
                <div class="alert alert-success">
                      <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong>
                </div>
                <?php
          }

  //  $jam=$_GET['jam'];
    $coba = mysqli_query($koneksi, "SELECT * FROM supplier");

     
?>
<div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" action="?p=input-data" method="post">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Input</strong> Data Trip</h3>
                                   <!--  <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul> -->
                                </div>
                                
                                <div class="panel-body">                                                                        
                                    
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            <input type="hidden" class="form-control" name="iduser" value="<?php echo $iduse?>" />
                                               

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Nama Supir</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                                        <input type="text" class="form-control" name="namasupir" />
                                                    </div>                                            
                                                    <span class="help-block">Ex. John Doe</span>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">No Pol</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-truck"></span></span>
                                                        <input type="text" class="form-control" name="nopol" />
                                                    </div>            
                                                    <span class="help-block">Ex. N 1234 L</span>
                                                </div>
                                            </div>
                                            
                                             <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Jenis Bak</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-archive"></span></span>
                                                        <input type="text" class="form-control" name="jenisbak" />
                                                    </div>            
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Volume</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-archive"></span></span>
                                                        <input type="text" class="form-control" name="volume" />
                                                    </div>       
                                                    <span class="help-block">Ex. 22</span>     
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-6">

                                         <div class="form-group">
                                                <label class="col-md-3 control-label">Suplier</label>
                                                <div class="col-md-9">                                                                                            
                                                    <select class="form-control select" name="idsup">
                                                    <?php 
                                                        while ($row = mysqli_fetch_array($coba)) {

                                                       ?>
                                                        <option value="<?php echo $row['id_supplier']; ?>"><?php echo $row['nama_pemilik']; ?></option>
                                                        <?php     
                                                        }
                                                    ?>
                                                    </select>
                                                    <span class="help-block">Pilh Nama Suplier</span>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Datepicker</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input type="text" name="tanggal" class="form-control datepicker" value="<?php echo date("Y-m-d"); ?>">                                            
                                                    </div>
                                                    <span class="help-block">Pilih tanggal</span>
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                        
                                    </div>

                                </div>
                                <div class="panel-footer">
                                    <button type="reset" class="btn btn-default">Clear Form</button>                   
                                    <button type="submit" class="btn btn-primary pull-right" name="btnsave">Submit</button>
                                </div>
                            </div>
                            </form>
                            
                        </div>
                    </div>  