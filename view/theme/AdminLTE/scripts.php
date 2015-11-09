<?php
use LouisLam\CRUD\LouisCRUD;
use LouisLam\CRUD\Field;
use LouisLam\Util;

/** @var Field[] $fields */
/** @var array $list */
/** @var LouisCRUD $crud */
?>

<script src="<?=Util::res("vendor/components/jquery/jquery.min.js") ?>"></script>
<script src="<?=Util::res("vendor/components/jqueryui/jquery-ui.min.js") ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>

<!-- Bootstrap 3.3.5 -->
<script src="<?= Util::res("vendor/almasaeed2010/adminlte/") ?>bootstrap/js/bootstrap.min.js"></script>

<script src="<?=Util::res("vendor/datatables/datatables/media/js/jquery.dataTables.min.js") ?>"></script>
<script src="<?=Util::res("vendor/datatables/datatables/media/js/dataTables.bootstrap.min.js") ?>"></script>
<script src="<?=Util::res("vendor/louislam/louislam-crud/js/LouisCRUD.js") ?>"></script>
<script src="<?=Util::res("vendor/louislam/louislam-utilities/js/L.js") ?>"></script>
<script src="<?=Util::res("vendor/ckeditor/ckeditor/ckeditor.js") ?>"></script>
<script src="<?=Util::res("vendor/ckeditor/ckeditor/adapters/jquery.js") ?>"></script>
<script src="<?= Util::res("vendor/almasaeed2010/adminlte/") ?>dist/js/app.min.js"></script>

<!-- Upload Plugin -->
<script src="<?= Util::res("vendor/blueimp/jquery-file-upload/js/vendor/jquery.ui.widget.js") ?>"></script>
<script src="<?= Util::res("vendor/blueimp/jquery-file-upload/js/jquery.iframe-transport.js") ?>"></script>
<script src="<?= Util::res("vendor/blueimp/jquery-file-upload/js/jquery.fileupload.js") ?>"></script>

<script src="<?= Util::res("vendor/moment/moment/min/moment.min.js") ?>"></script>
<!--<script src="<?/*= Util::res("vendor/eonasdan/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js") */?>"></script>-->

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

<script>
    var crud = new LouisCRUD();
</script>