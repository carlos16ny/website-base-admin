# Sistema Base Para Sites Visão

## __Instalação__
### __Requisitos__
> 1. Possuir o Node.js instalado. [Link](https://nodejs.org/pt-br/) para instalação
> 
> 2. Instalação do Yarn - Outro gerenciador de pacote do Node (recomendado) | [Link](https://yarnpkg.com/lang/pt-br/docs/install/#windows-stable)
>
> 4. Estar com o SGBD ligado [MySql versão >= 5.6]


Na pasta raiz do projeto, execute: 

1. Instalar os pacotes do node 
```js 
    npm install
```
ou
```js 
    yarn i
```

### __Configuração__
1. #### Renomeie o arquivo .config.ini.example para .config.ini
    * Arquivo localizado na pasta _admin/_
> Até aqui temos seu banco de dados configurado e os pacotes node instalados
2. #### Em seu navegador, execute o _admin/config/setup.php_, exemplo:
    * _localhost:3000/admin/config/setup.php_

### __Banco de dados__

> O script de criação do banco de dados deve ser incluido na pasta [___docs/scripts/___](docs/scripts/)
> 
> Renomeie o arquivo para ___estrutura.sql___
> 
> Não se preoculpe se o script não é o modelo final, podemos alterar depois
>
> * #### _Existe um modelo de script genérico para sites já na pasta_
> 
> ![Modelo Banco de Dados](assets/uploads/modelo-bd.png)
>   
> * ##### O modelo é suficiente para a maioria dos sites que são feitos pela Visão

Para a inicializacao do banco de dados vamos utilizar o npm.

No seu prompt de comando, na pasta raiz :
```js
npm run create-schema
```
> Pronto, após a mensagem de sucesso no seu console, o banco de dados está configurado no ambiente
___
## O que eu possuo ?

Agora que a instalação está pronta, vamos ver um pouco do que eu possuo:
* Sou uma área adminsitrativa baseada em um template. Meu pai : [Admin **LTE**](https://adminlte.io)
* Graças a algumas modificações, aceito todas as classes do **Bootstrap 4**
* Algumas coisas em mim já estão prontas para você não ter que se preoculpar:
  * Página de Login
  * Página de Edição de Usuário
  * Menu Principal
  * Página de Cadastro (As vezes você vai tirar essa parte de mim)
  * Reset de Senhas
  * Troca de Favicon
  * Não Precisa se preoculpar com a segurança, se seguir tudo direitinho, vai dar bom!
> Tenho alguns modelos também que você vai amar :smirk:
>
>[___admin/pages/___](admin/pages/)
>
> Se achou que acabou, temos mais :scream: :
  * Algumas "baterias" estão incluidas, tudo para que a codificação seja a mais simpels possível:
    * Módulo de Upload de Imagem
    * Módudo de Upload de Arquivos
    * Módulo de Cortar Imagem
    * Módulo Envio de Emails

### **Bibliotecas JavaScript já carregadas :**
1. [Chart.js](https://www.chartjs.org) | [Exemplo](admin/pages/chart.md)
2. [FullCalendar](http://fullcalendar.io/) | [Exemplo](admin/pages/calendar.md)
3. [Select2.js](https://select2.org) | [Exemplo](admin/pages/inputs.md)
4. [TimePicker](https://jdewit.github.io/bootstrap-timepicker/) | [Exemplo](admin/pages/inputs.md)
5. [DatePicker](https://bootstrap-datepicker.readthedocs.io/en/latest/) | [Exemplo](admin/pages/inputs.md)
6. [DateRangePicker](http://www.daterangepicker.com) | [Exemplo](admin/pages/inputs.md)
7. [ColorPicker](https://github.com/farbelous/bootstrap-colorpicker) | [Exemplo](admin/pages/inputs.md)
8. [iCheck](http://icheck.fronteed.com) | [Exemplo](admin/pages/forms.md)
9. [CKEditor](https://ckeditor.com) | [Exemplo](admin/pages/ckeditor.md)
10. [CKFinder](https://ckeditor.com/ckfinder/) | [Exemplo](admin/pages/ckfinder.md)