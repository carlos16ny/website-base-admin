# CKEditor

## Inicialização
> O CKEditor utiliza de uma biblioteca JavaScript, não sendo necessário incluir arquivos css

### Passos

1. Incluir Header e Footer no arquivo .php
   1. **Atenção para o caminho correto para o footer e header**
   2. Incluir a classe de _Links_ também é necessário
```php
<?php
include_once '../assets/php/classes/linksClass.php';
include_once 'header.php';
?>

<?php 
include_once 'footer.php';
?>
```
2. Inicie corretamento o documento com a ```<section class="content">``` entre o header e footer
   
```html
{{ Header }}

<section class="content">
    <div class="row">
    </div>
</section>

{{Footer}}
```

3. Importe o script do CKEditor para a página logo após a inclusão do footer
   1. Atente-se para o caminho do link. A classe Links referencia o caminho baseado na pasta admin como raíz

```html
<script src="../<?=(Links::js_CKEditor)?>"></script>
```

4. Dentro de sua ```<div class="row">``` ou onde desejar incluir o Editor, inclua uma ```<textarea></textarea>```. A configuração da sua textarea fica a seu critério com relação a tamanho e se existe algum placeholder para ser incluido dentro da _tag_.
   1. A substituicao do ```<textarea></textarea>``` se dá por id, dessa forma é de extrema importancia sua inclusão.

Exemplo:

 ```html
<form>
    <textarea id="editor1" name="editor1" rows="10" cols="80" style="visibility: hidden; display: none;">                                

    </textarea>
 </form>
```

5. Agora vamos iniciar o script em _js_ para de fato substituir o ```<textarea></textarea>``` 

* a _tag_ de  ```<script></script>```deve ser incluida após a importação do arquivo _java script_, demonstrado na instrução **3**

```js
$(function (){
    CKEDITOR.replace('editor1');
});
```

6. No final teremos um arquivo semelhante a este:

```html

<?php
include_once '../assets/php/classes/linksClass.php';
$map = array('titulo' => 'CKEditor', 'secao' => 'CK');
include_once 'header.php';
?>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">CK Editor</h3>
                </div>
                <div class="box-body pad">
                    <form>
                        <textarea id="editor1" name="editor1" rows="10" cols="80" style="visibility: hidden; display: none;">
                        This is my textarea to be replaced with CKEditor.
                        </textarea>
                    </form>
                </div>
            </div>
   
        </div>
    </div>
</section>

<?php
include_once 'footer.php';
?>
<script src="../<?=(Links::js_CKEditor)?>"></script>
<script>
    $(function (){
        CKEDITOR.replace('editor1');
    });
</script>
```
### Unindo o formulário do php com o CKEditor

 A integração do ```<textarea></textarea>``` com o _php_ é natural, utilizando a tag _name_ dentro do ```<textarea></textarea>``` conseguimos recuperar todo conteúdo escrito em forma de HTML. O código-fonte é enviado pelo formulário como qualquer outro input
    