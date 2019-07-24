<?php
$map = array('titulo' => 'CKEditor', 'secao' => 'CK');
include_once 'header.php';
if(isset($_POST['editor1'])){
    $inputCK = $_POST['editor1'];
}
?>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">CK Editor
                        <small>Advanced and full of features</small>
                    </h3>
                    <div class="pull-right box-tools">
                        <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body pad">
                    <form action="ckeditor.php" method="post">
                        <textarea id="editor1" name="editor1" rows="10" cols="80" style="visibility: hidden; display: none;">                                            
                            Insira um texto aqui e teste minhas funcionalidades =)
                        </textarea>
                        <br>
                        <br>
                        <button class="btn btn-default" type="submit">Enviar</button>
                    </form>
                </div>
                <div class="box-footer">
                    <?=$inputCK?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include_once 'footer.php';
?>
<script src="../<?= (Classes\Links::js_CKEditor) ?>"></script>
<script>
    $(function (){
        CKEDITOR.replace('editor1');
    });
</script>