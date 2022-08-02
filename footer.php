<?php
/**
* @package Labmatilde
* @subpackage lam
* @since Lar Assistencial Matilde 1.0
*/


if (get_fields('secao_como_doar', 'option')) {
   echo print_r(get_fields('secao_como_doar', 'option'));
}
?>


<!-- DOE -->
<section id="doe" class="dark no-title">
    <div class="container">
        <div class="row">
            <div class="col s12 m6">
                <img class="responsive-img banner-no-title" src="<?= get_template_directory_uri(); ?>/assets/images/cartaz-como-doar.png" alt="">
            </div>
            <div class="col s12 m6">
                <h4 class="title">Seja você um de nossos padrinhos</h4>
                <p class="white-text">Com doações mensais no valor que desejar</p>
                <p><a class="waves-effect waves-light btn"><i class="material-icons left">attach_money</i>5,00
                        por
                        Mês</a></p>
                <p><a class="waves-effect waves-light btn"><i class="material-icons left">attach_money</i>10,00
                        por
                        Mês</a></p>
                <p> <a class="waves-effect waves-light btn"><i class="material-icons left">attach_money</i>20,00
                        por
                        Mês</a></p>
                <p> <a class="waves-effect waves-light btn"><i class="material-icons left">attach_money</i>40,00
                        por
                        Mês</a></p>
                <p> <a class="waves-effect waves-light btn"><i class="material-icons left">attach_money</i>100,00
                        por
                        Mês</a></p>
                <p> <a class="waves-effect waves-light btn"><i class="material-icons left">attach_money</i>Outros
                        Valores</a></p>
            </div>
        </div>
    </div>
</section>

<!-- CONTATO -->
<section id="contato">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h3 class="title">Entre em contato conosco</h3>
            </div>
        </div>
    </div>
</section>


<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Endereços</h5>
                <p class="grey-text text-lighten-4">SEDE:
                    Rua do Amerício, 358 - Itaquera, São Paulo - SP, 08240-300</p>
                <p class="grey-text text-lighten-4">BAZAR:
                    Rua Rainha-da-Noite, 168 - Vila Verde, São Paulo - SP, 08235-000</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links importantes</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">Brechó Matilde</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Rifas</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Agenda</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Doe</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2022 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
    </div>
</footer>


<div class="fixed-action-btn toolbar">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
      <li class="waves-effect waves-light"><a href="#!"><i class="material-icons">insert_chart</i>Nossos Eventos</a></li>
      <li class="waves-effect waves-light"><a href="#!"><i class="material-icons">format_quote</i>Faça uma Doação</a></li>
      <li class="waves-effect waves-light"><a href="#!"><i class="material-icons">publish</i>Seja Voluntario</a></li>
      <li class="waves-effect waves-light"><a href="#!"><i class="material-icons">attach_file</i>Fale conosco</a></li>
    </ul>
  </div>

<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/assets/js/jquery-3.2.1.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="<?= get_template_directory_uri(); ?>/assets/js/materialize.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/assets/js/events.js"></script>

</body>
</html>