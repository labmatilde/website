<?php
/**
* Template Name: Evento
*
* @package Labmatilde
* @subpackage lam
* @since Lar Assistencial Matilde 1.0
*/
?>
<?php get_header(); ?>

<!-- SOBRE -->
<?php if(get_field('mostrar_sobre')): ?>
    
<section id="sobre">
    <div class="container">
        <div class="row">
            <div class="col s12 m12">
                <?php if( get_field('titulo') ): ?>
                    <h1 class="title"><?php the_field('titulo'); ?></h1>
                <?php endif; ?>
                <?php if( get_field('descricao') ): ?>
                    <?php the_field('descricao'); ?>
                <?php endif; ?>
            </div>
            <div class="col s12 m4">
                <?php if( get_field('foto_apresentacao') ): ?>
                    <img class="responsive-img" src="<?php the_field('foto_apresentacao'); ?>" alt="" />
                <?php endif; ?>
            </div>
            <div class="col s12 m8">

                <?php if( get_field('titulo_desc') ): ?>
                    <h4 class="title"><?php the_field('titulo_desc'); ?></h4>
                <?php endif; ?>
                <?php if( get_field('descricao_da_foto') ): ?>
                    <?php the_field('descricao_da_foto'); ?>
                <?php endif; ?>

            </div>
        </div>
        <div class="row">
            <div class="col s12 m4">
                <div class="card lam-color-dark">
                    <div class="card-content white-text">
                        <span class="card-title"><?php _e('Missão'); ?></span>
                        <p><?php the_field('card_missao'); ?></p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card lam-color-dark">
                    <div class="card-content white-text">
                        <span class="card-title"><?php _e('Visão'); ?></span>
                        <p><?php the_field('card_visao'); ?></p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card lam-color-dark">
                    <div class="card-content white-text">
                        <span class="card-title"><?php _e('Valores'); ?></span>
                        <p><?php the_field('card_valores'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!-- #sobre -->

<?php endif; ?>


<!-- PROJETOS -->
<?php if(get_field('mostar_projetos')): ?>

<section id="projetos" class="dark">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h2 class="title"><?php _e('Projetos'); ?></h2>
            </div>

            <?php $values = get_field('selecionar_projetos_apresentados'); 
            if($values) : foreach($values as $value): ?>

            <div class="col s12 m4">
                <div class="card sticky-action hoverable">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="<?= get_template_directory_uri(); ?>/assets/images/cartaz-familia-lam.png">
                    </div> <!-- card-image -->
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4"><?= $value->post_title; ?><i
                                class="material-icons right">more_vert</i></span>
                        <p><a href="<?= $value->guid; ?>">Acessar projeto</a></p>
                    </div> <!-- card-content -->
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Projeto Familias<i
                                class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.
                        </p>
                        <p class="card-pix"><i class="material-icons">account_balance</i><span
                                class="content-card-pix">CHAVE
                                PIX: 40.416.297/0001-95</span></p>
                    </div> <!-- card-reveal -->
                </div> <!-- card -->
            </div> <!-- col -->

            <?php endforeach; endif; ?>
        
        </div> <!-- .row -->
    </div> <!-- .container -->
</section> <!-- #projetos -->

<?php endif; ?>


<!-- VOLUNTARIOS -->
<?php if(get_field('motrar_voluntarios')): ?>

<section id="voluntario" class="no-title">
    <div class="container">
        <div class="row">
            <div class="col s12 m6">
                <?php if( get_field('foto_destaque') ): ?>
                    <img class="responsive-img banner-no-title" src="<?php the_field('foto_destaque'); ?>" alt="">
                <?php endif; ?>
            </div>
            <div class="col s12 m6">
                <h3 class="title"><?php _e('Seja um Voluntario'); ?></h3>
                <?php if( get_field('pagina_do_formulario') ): ?>
                    <a class="waves-effect waves-light btn-large" href="<?php the_field('pagina_do_formulario'); ?>" target="_blank" rel="noopener noreferrer"><i class="material-icons left">card_membership</i><?php _e('Acessar
                    Formulário'); ?></a>
                <?php endif; ?>
                <?php if( get_field('descricao_secao_de_voluntarios') ): ?>
                    <?php the_field('descricao_secao_de_voluntarios'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>

<!-- BAZAR -->
<section id="bazar" class="dark no-title">
    <div class="container">
        <div class="row">
            <div class="col s12 m6">
                <h3 class="title">Bazar Beneficiente</h3>
                <p class="white-text">Roupas a partir de R$ 2,00 <br>
                    Acessórios a partir de R$ 1,00
                </p>
                <p class="white-text"><b>Aceitamos Doações</b> <br>
                    Telefone: <a class="white-text" href="tel:+5511947353886">(11) 94735 3886</a><br>
                    Endereço: Rua Rainha-da-Noite, 168 - Vila Verde, São Paulo - SP, 08235-000</p>
                <p class="white-text"><b>Horario de funcionamento:</b> <br>
                    Segunda a Sabado das 10 as 18 horas</p>
            </div>
            <div class="col s12 m6">
                <img class="responsive-img banner-no-title" src="<?= get_template_directory_uri(); ?>/assets/images/cartaz-chamada-bazar-simples.png"
                    alt="">
            </div>
        </div>
    </div>
</section>

<!-- EVENTOS -->
<section id="empregando">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h3 class="title">Empregrando</h3>
                <p>Olá Empresas divulgue aqui suas vagas de emprego</p>
                <a class="waves-effect waves-light btn-large"><i class="material-icons left">cloud</i>Acessar
                    Formulário</a>
            </div>
        </div>
    </div>
</section>

<!-- EVENTOS -->
<section id="eventos">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h3 class="title">Eventos LAM</h3>
                <p>Fique por dentro dos eventos que acontecem aqui no Lar Assistencial Matilde</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer();