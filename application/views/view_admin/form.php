<script>
    tinyMCE.init({
      selector: ".richtext",
      height: 750,
      setup: function (editor) {
         editor.on('change', function () {
            tinymce.triggerSave();
         });
      },
      plugins: [
         "advlist autolink lists link image charmap print preview anchor",
         "searchreplace visualblocks code fullscreen",
         "insertdatetime media table contextmenu paste imagetools responsivefilemanager tiny_mce_wiris"
      ],
      toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | responsivefilemanager tiny_mce_wiris_formulaEditor",
	      
      external_filemanager_path:"<?php echo base_url()?>flat-admin/filemanager/",
      filemanager_title:"File Manager" ,
      external_plugins: { "filemanager" : "<?php echo base_url()?>/flat-admin/filemanager/plugin.min.js"}
   });
</script>


<?php if($content=="add-kategori-artikel"){?>
<div class="row">
<div class="col-md-12">
      <div class="card">
        <div class="card-header">
          Form Kategori Artikel
        </div>
        <div class="card-body">
          <form class="form form-horizontal" method="POST" 
                action="<?= site_url('adminoc/create_kategori')?>">
  <div class="section">
    <div class="section-body">
      <div class="form-group">
        <label class="col-md-2 control-label">ID. Kat</label>
        <div class="col-md-2">
          <input type="text" class="form-control" name="id_kat" placeholder="[ AUTO ]" disabled="">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 control-label">Kategori Artikel</label>
        <div class="col-md-9">
          <div class="input-group">
            <input type="text" class="form-control" name="kategori_post">
          </div>
        </div>
      </div>
    </div>
  </div>
 
  <div class="form-footer">
    <div class="form-group">
      <div class="col-md-9 col-md-offset-2">
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-default">Cancel</button>
      </div>
    </div>
  </div>
</form>
        </div>
      </div>
    </div>
</div>
<?php }?>


<?php if($content=="edit-kategori-artikel"){?>
<div class="row">
<div class="col-md-12">
      <div class="card">
        <div class="card-header">
          Form Ubah Kategori Artikel
        </div>
        <div class="card-body">
          <form class="form form-horizontal" method="POST" 
                action="<?= site_url('adminoc/update_kategori')?>">
              <?php foreach($getkategori as $row){?>
  <div class="section">
    <div class="section-body">
      <div class="form-group">
        <label class="col-md-2 control-label">ID. Kat</label>
        <div class="col-md-2">
            <input type="text" class="form-control" name="id_katpost" value="<?= $row->id_katpost?>" readonly>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 control-label">Kategori Artikel</label>
        <div class="col-md-9">
          <div class="input-group">
            <input type="text" class="form-control" name="kategori_post" value="<?= $row->kategori_post?>">
          </div>
        </div>
      </div>
    </div>
  </div>
            
  <div class="form-footer">
    <div class="form-group">
      <div class="col-md-9 col-md-offset-2">
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-default">Cancel</button>
      </div>
    </div>
  </div>
    <?php }?>
</form>
        </div>
      </div>
    </div>
</div>
<?php }?>

<?php if($content=="add-artikel"){?>
<div class="row">
<div class="col-md-12">
      <div class="card">
        <div class="card-header">
          Form Artikel
        </div>
        <div class="card-body">
          <!--<form class="form form-horizontal" method="POST"
                action="<?php// site_url('adminoc/create_artikel2')?>" enctype="multipart/form-data">!-->
            <?php $attributes = array('class' => 'form form-horizontal');
                     echo form_open_multipart('adminoc/create_artikel2', $attributes);?>
  <div class="section">
    <div class="section-body">
       <div class="form-group">
        <label class="col-md-2 control-label">Kategori Post</label>
        <div class="col-md-4">
            <div class="input-group">
                <select class="select2" name="id_katpost">
                    <option value="">-- Kategori --</option>
                        <?php foreach($listkategori as $cmb){
                            echo "<option value='$cmb[id_katpost]'>$cmb[kategori_post]</option>";
                        }?>
                </select>
            </div>
      </div>   
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label">Judul Post</label>
        <div class="col-md-9">
            <input type="text"  name="judul" class="form-control">
          </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label">Headline</label>
        <div class="col-md-9">
            <input type="text"  name="headline" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label">Upload Foto</label>
        <div class="col-md-9">
            <input type="file"  name="foto_header" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label">Tgl. Post</label>
        <div class="col-md-1">
            <input type="text"  name="tgl" class="form-control" placeholder="Tgl">
        </div>
        <div class="col-md-1">
            <input type="text"  name="bln" class="form-control" placeholder="Bln">
        </div>
        <div class="col-md-1">
            <input type="text"  name="tahun" class="form-control" placeholder="Thn">
        </div>
    </div>
     <div class="form-group">
        <label class="col-md-2 control-label">Isi Post</label>
        <div class="col-md-9">
            <textarea name="isi_post" class="richtext"></textarea>
        </div>
    </div>
    </div>
  </div>
  <div class="form-footer">
    <div class="form-group">
      <div class="col-md-9 col-md-offset-2">
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-default">Cancel</button>
      </div>
    </div>
  </div>
          <?php echo form_close();?>
<!--/form -->

        </div>
      </div>
    </div>
</div>
<?php }?>