<?php $this->load->view('common/header'); ?>
<textarea name="editor1" id="editor1" rows="10" cols="80">
</textarea>
<script src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>
<script>
   var editor = CKEDITOR.replace( 'editor1' );
   CKFinder.setupCKEditor( editor );
</script>
<?php $this->load->view('common/footer'); ?>
