<section class="panel panel-default">
    <header class="panel-heading">
        <div class="row">
            <div class="col-md-8">                
                <?php
                                  echo anchor(
                                           site_url('kapal/add'),
                                            '<i class="glyphicon glyphicon-plus"></i>',
                                            'class="btn btn-success btn-sm"'
                                          );
                 ?>
                
            </div>
            <div class="col-md-4">
                                           
                 <?php echo form_open(site_url('kapal/search'), 'role="search" class="form"') ;?>       
                           <div class="input-group pull-right">                      
                                 <input type="text" class="form-control input-sm" placeholder="Cari data" name="q" autocomplete="off"> 
                                 <span class="input-group-btn">
                                      <button class="btn btn-primary btn-sm" type="submit"><i class="glyphicon glyphicon-search"></i> Cari</button>
                                 </span>
                           </div>
                           
               </form> 
                <?php echo form_close(); ?>
            </div>
        </div>
    </header>
    
    
    <div class="panel-body">
         <?php if ($kapals) : ?>
          <table class="table table-hover table-condensed">
              
            <thead>
              <tr>
                <th class="header">#</th>
                
                    <th>Nama Kapal</th>   
                
                    <th>Kategori</th>   
                
                    <th>Mmsi</th>   
                
                    <th>Panjang</th>   
                
                    <th>Lebar</th>   
                
                    <th>Draught</th>   
                
                    <th>Bobot</th>   
                
                    <th>Tujuan</th>   
                
                    <th>Waktu Masuk Lintasan</th>   
                
                    <th>Waktu Keluar Lintasan</th>   
                
                    <th>Waktu Sandar</th>   
                
                    <th>Lokasi Sandar Zona</th>   
                
                    <th>Lokasi Sandar Shipyard</th>   
                
                    <th>Keterangan</th>   
                
                    <th>Sosialisasi</th>   
                
                    <th>Lintang Utara</th>   
                
                    <th>Bujur Timur</th>   
                
                <th class="red header" align="right" width="160">Aksi</th>
              </tr>
            </thead>
            
            
            <tbody>
                <?php $counter =1; ?> 
               <?php foreach ($kapals as $kapal) : ?>
              <tr>
              	<td><?php echo $counter++; ?> </td>
               
               <td><?php echo $kapal['nama_kapal']; ?></td>
               
               <td><?php echo $kapal['kategori_id']; ?></td>
               
               <td><?php echo $kapal['mmsi']; ?></td>
               
               <td><?php echo $kapal['panjang']; ?></td>
               
               <td><?php echo $kapal['lebar']; ?></td>
               
               <td><?php echo $kapal['draught']; ?></td>
               
               <td><?php echo $kapal['bobot']; ?></td>
               
               <td><?php echo $kapal['tujuan']; ?></td>
               
               <td><?php echo $kapal['waktu_masuk_lintasan']; ?></td>
               
               <td><?php echo $kapal['waktu_keluar_lintasan']; ?></td>
               
               <td><?php echo $kapal['waktu_sandar']; ?></td>
               
               <td><?php echo $kapal['lokasi_sandar_zona']; ?></td>
               
               <td><?php echo $kapal['lokasi_sandar_shipyard']; ?></td>
               
               <td><?php echo $kapal['keterangan']; ?></td>
               
               <td><?php echo $kapal['sosialisasi']; ?></td>
               
               <td><?php echo $kapal['lintang_utara']; ?></td>
               
               <td><?php echo $kapal['bujur_timur']; ?></td>
               
                <td>                   
                    <?php
                                  echo anchor(
                                          site_url('kapal/edit/' . $kapal['kapal_id']),
                                            '<i class="glyphicon glyphicon-edit"></i>',
                                            'class="btn btn-sm btn-success"'
                                          );
                   ?>
                   
                   <?php
                                  echo anchor(
                                          site_url('kapal/delete/' . $kapal['kapal_id']),
                                            '<i class="glyphicon glyphicon-trash"></i>',
                                            'onclick="return confirm(\'Anda yakin..???\');" class="btn btn-sm btn-danger"'
                                          );
                   ?>   
                                 
                </td>
              </tr>     
               <?php endforeach; ?>
            </tbody>
          </table>
          <?php else: ?>
                <?php  echo notify('Data kapal belum tersedia','info');?>
          <?php endif; ?>
    </div>
    
    
    <div class="panel-footer">
        <div class="row">
           <div class="col-md-3">
               kapal
               <span class="label label-info">
                    <?php echo $total; ?>
               </span>
           </div>  
           <div class="col-md-9">
                 <?php echo $pagination; ?>
           </div>
        </div>
    </div>
</section>