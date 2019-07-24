<?php
$map = array('titulo' => 'CKFinder', 'secao' => 'CK');
include_once 'header.php';
?>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <div id="ckfinder-widget"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include_once 'footer.php';
?>
<script src="../<?= (Classes\Links::js_CKFinder) ?>"></script>
<script>
    ClassicEditor.create(document.querySelector('#ckfinder-widget'), {
            ckfinder: {
                uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
            },
            toolbar: ['ckfinder', 'imageUpload', '|', 'heading', '|', 'bold', 'italic', '|', 'undo', 'redo']
        })
        .catch(function(error) {
            console.error(error);
        });
</script>