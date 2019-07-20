# FullCalendar

## Inicialização
> O FullCalendar utiliza de uma biblioteca JavaScript e um arquivo css para sua estilização padrão.

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
<section class="content">
    <div class="row">
    </div>
</section>
```

3. Importe o script do FullCalendar para a página logo após a inclusão do footer
   1. Atente-se para o caminho do link. A classe Links referencia o caminho baseado na pasta admin como raíz
   2. A importação da bibliotéca Moment.js também precisa ser feita, **antes do próprio calendário !**

```html
{{ Header }}

<link rel="stylesheet" href="../<?= (Links::css_Calendar) ?>">

{{ Corpo do Arquivo }}

{{ Footer }}

<script src="../<?= (Links::js_Moment) ?>"></script>
<script src="../<?=(Links::js_Calendar)?>"></script>
// Arquivo para traduzir o calendário para PT-BR
<script src="../<?= (Links::js_CalendarPt) ?>"></script> 

```

4. Dentro de sua ```<div class="row">``` ou onde desejar incluir o Editor, inclua uma ```<div id='calendario'></div>```. A estilização da ```<div></div>``` pai do calendário é de livre escolha, tenha apenas em mente que o calendário ocupa 100% da largura da ```<div></div>``` acima.
   1. A substituicao do _calendário_ se dá por id, dessa forma é de extrema importancia sua inclusão.

Exemplo:

 ```html
<div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-body no-padding">
          <div id="calendar"></div>
        </div>
      </div>
    </div>
</div>
```

5. Agora vamos iniciar o script em _js_ para de fato substituir o ```calendário``` 

* a _tag_ de  ```<script></script>```deve ser incluida após a importação do arquivo _java script_, demonstrado na instrução **3**

```js
$(function (){
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      buttonText: {
        today: 'today',
        month: 'month',
        week: 'week',
        day: 'day'
      },
      events: []
    });
});
```

1. No final teremos um arquivo semelhante a este:

```html

<?php
include_once '../assets/php/classes/linksClass.php';
$map = array('titulo' => 'Calendar', 'secao' => 'FullCalendar.js');
include_once 'header.php';
?>
<link rel="stylesheet" href="../<?= (Links::css_Calendar) ?>">

<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-body no-padding">
          <div id="calendar"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
include_once 'footer.php';
?>
<script src="../<?= (Links::js_Moment) ?>"></script>
<script src="../<?= (Links::js_Calendar) ?>"></script>
<script src="../<?= (Links::js_CalendarPt) ?>"></script>
<script>
  $(function() {
    var date = new Date()
    var d = date.getDate(),
      m = date.getMonth(),
      y = date.getFullYear()

    $('#calendar').fullCalendar({
      locale: 'pt-br',
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      buttonText: {
        today: 'today',
        month: 'month',
        week: 'week',
        day: 'day'
      },
      events: [{
        {
          title: 'Lunch',
          start: new Date(y, m, d, 12, 0),
          end: new Date(y, m, d, 14, 0),
          allDay: false,
          backgroundColor: '#00c0ef',
          borderColor: '#00c0ef'
        },
        {
          title: 'Birthday Party',
          start: new Date(y, m, d + 1, 19, 0),
          end: new Date(y, m, d + 1, 22, 30),
          allDay: false,
          backgroundColor: '#00a65a',
          borderColor: '#00a65a'
        },
        {
          title: 'Click for Google',
          start: new Date(y, m, 28),
          end: new Date(y, m, 29),
          url: 'http://google.com/',
          backgroundColor: '#3c8dbc',
          borderColor: '#3c8dbc' 
        }
      ]
    });
  });
</script>
```
### Eventos

Os eventos são objetos _java script_, podendo aceitar inumeros parâmetros de configuração.
[Documentação](https://fullcalendar.io/docs)
    