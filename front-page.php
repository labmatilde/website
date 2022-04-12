<?php
/**
* Template Name: Frontpage
*
* @package Labmatilde
* @subpackage lam
* @since Lar Assistencial Matilde 1.0
*/
?>
<?php get_header(); ?>

    <!-- TOP MENU -->
    <div id="topbar" class="menu-top-bar hide-on-med-and-down">
        <div class="container">
            <div class="nav-wrapper">
                <ul class="topbar">
                    <li class="list-top"><i class="material-icons">account_balance</i><span class="content-top">CHAVE
                            PIX: 40.416.297/0001-95</span></li>
                    <li class="list-top"><i class="material-icons">call</i><a class="link-top" href="#"><span
                                class="content-top">(11) 93719-0613</span></a></li>
                    <li class="list-top"><i class="material-icons">call</i><a class="link-top" href="#"><span
                                class="content-top">(11) 2053-0090</span></a></li>
                    <li class="list-top"><i class="material-icons">email</i><a class="link-top"
                            href="mailto:contato@larassistencialmatilde.com.br"><span
                                class="content-top">contato@larassistencialmatilde.com.br</span></a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- NAV MENU -->
    <nav>
        <div class="container">
            <div class="nav-wrapper">
                <a href="<?= get_home_url(); ?>" class="brand-logo"><img class="logo-img"
                        src="<?= get_template_directory_uri(); ?>/assets/images/logo_lam_claro.png" alt=""></a>
                <a href="#" data-activates="mobile-lam" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="#projetos">Projetos</a></li>
                    <li><a href="#voluntarios">Seja um Voluntario</a></li>
                    <li><a href="#eventos">Eventos</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="#contato">Contato</a></li>
                    <li><a href="#doe" class="waves-effect waves-light btn">Faça uma doação</a></li>
                </ul>

                <ul class="side-nav" id="mobile-lam">
                    <li><img class="logo-mobile" src="<?= get_template_directory_uri(); ?>/assets/images/logo_lam_claro.png" alt=""></li>
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="#projetos">Projetos</a></li>
                    <li><a href="#voluntarios">Seja um Voluntario</a></li>
                    <li><a href="#eventos">Eventos</a></li>
                    <li><a href="#contato">Contato</a></li>
                    <li><a href="#doe">Faça uma doação</a></li>
                    <li><span class="pix-mobile">CHAVEPIX: 40.416.297/0001-95</span></li>
                    <li><a href="tel:+5511937190613">(11) 93719-0613</a>
                    </li>
                    <li><a href="tel:+551120530090">(11) 2053-0090</a>
                    </li>
                    <li><a href="mailto:contato@larassistencialmatilde.com.br">contato@larassistencialmatilde.com.br</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- SOBRE -->
    <section id="sobre">
        <div class="container">
            <div class="row">
                <div class="col s12 m12">
                    <h1 class="title">Lar Assistencial Matilde</h1>
                    <p>Somos uma FAMÍLIA, que se agrega e que aumenta a cada dia, Somos sementes da seara do bem com
                        mãos
                        dispostas no
                        cultivo do amor aos nossos irmãos e semelhantes. Promover a formação e o apoio integral da
                        criança,
                        do adolescente,
                        do jovem, do adulto, do idoso e das famílias, buscando a educação à fé e à cidadania.
                    </p>
                </div>
                <div class="col s12 m4">
                    <img class="responsive-img" src="<?= get_template_directory_uri(); ?>/assets/images/foto-voluntarios-trabalhando.png" alt="">
                </div>
                <div class="col s12 m8">

                    <h4 class="title">Projetos sem fins lucrativos:</h4>
                    <p>A transformação do mundo em um lugar melhor como objetivo principal.
                        O trabalho, na maior parte do tempo, fica por conta dos times de voluntários,
                        que se doam para melhorar a vida de pessoas que muitas vezes nem conhecem.
                        Vale dizer que o maior combustível desses projetos é a vontade humana de fazer o bem.</p>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m4">
                    <div class="card lam-color-dark">
                        <div class="card-content white-text">
                            <span class="card-title">Missão</span>
                            <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card lam-color-dark">
                        <div class="card-content white-text">
                            <span class="card-title">Visão</span>
                            <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card lam-color-dark">
                        <div class="card-content white-text">
                            <span class="card-title">Valores</span>
                            <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- #sobre -->

    <!-- PROJETOS -->
    <section id="projetos" class="dark">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h2 class="title">Projetos</h2>
                </div>
                <div class="col s12 m4">
                    <div class="card sticky-action hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="<?= get_template_directory_uri(); ?>/assets/images/cartaz-familia-lam.png">
                        </div> <!-- card-image -->
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Familias<i
                                    class="material-icons right">more_vert</i></span>
                            <p><a href="projetos.html">Acessar projeto</a></p>
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

                <div class="col s12 m4">
                    <div class="card sticky-action hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="<?= get_template_directory_uri(); ?>/assets/images/cartaz-enxoval.png">
                        </div> <!-- card-image -->
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Gestantes<i
                                    class="material-icons right">more_vert</i></span>
                            <p><a href="projetos.html">Acessar projeto</a></p>
                        </div> <!-- card-content -->
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Projeto Gestantes<i
                                    class="material-icons right">close</i></span>
                            <p>Here is some more information about this product that is only revealed once clicked on.
                            </p>
                            <p class="card-pix"><i class="material-icons">account_balance</i><span
                                    class="content-card-pix">CHAVE
                                    PIX: 40.416.297/0001-95</span></p>
                        </div> <!-- card-reveal -->
                    </div> <!-- card -->
                </div> <!-- col -->

                <div class="col s12 m4">
                    <div class="card sticky-action hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="<?= get_template_directory_uri(); ?>/assets/images/cartaz-samaritanos.png">
                        </div> <!-- card-image -->
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Samaritanos<i
                                    class="material-icons right">more_vert</i></span>
                            <p><a href="projetos.html">Acessar projeto</a></p>
                        </div> <!-- card-content -->
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Projeto Samaritanos<i
                                    class="material-icons right">close</i></span>
                            <p>Here is some more information about this product that is only revealed once clicked on.
                            </p>
                            <p class="card-pix"><i class="material-icons">account_balance</i><span
                                    class="content-card-pix">CHAVE
                                    PIX: 40.416.297/0001-95</span></p>
                        </div> <!-- card-reveal -->
                    </div> <!-- card -->
                </div> <!-- col -->

                <div class="col s12 m4">
                    <div class="card sticky-action hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="<?= get_template_directory_uri(); ?>/assets/images/AME-SE.png">
                        </div> <!-- card-image -->
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Resgatando Almas<i
                                    class="material-icons right">more_vert</i></span>
                            <p><a href="projetos.html">Acessar projeto</a></p>
                        </div> <!-- card-content -->
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Projeto Resgatando Almas<i
                                    class="material-icons right">close</i></span>
                            <p>Here is some more information about this product that is only revealed once clicked on.
                            </p>
                            <p class="card-pix"><i class="material-icons">account_balance</i><span
                                    class="content-card-pix">CHAVE
                                    PIX: 40.416.297/0001-95</span></p>
                        </div> <!-- card-reveal -->
                    </div> <!-- card -->
                </div> <!-- col -->

                <div class="col s12 m4">
                    <div class="card sticky-action hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="<?= get_template_directory_uri(); ?>/assets/images/AME-SE.png">
                        </div> <!-- card-image -->
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Ame se<i
                                    class="material-icons right">more_vert</i></span>
                            <p><a href="projetos.html">Acessar projeto</a></p>
                        </div> <!-- card-content -->
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Projeto Ame se<i
                                    class="material-icons right">close</i></span>
                            <p>Here is some more information about this product that is only revealed once clicked on.
                            </p>
                            <p class="card-pix"><i class="material-icons">account_balance</i><span
                                    class="content-card-pix">CHAVE
                                    PIX: 40.416.297/0001-95</span></p>
                        </div> <!-- card-reveal -->
                    </div> <!-- card -->
                </div> <!-- col -->

                <div class="col s12 m4">
                    <div class="card sticky-action hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="<?= get_template_directory_uri(); ?>/assets/images/AME-SE.png">
                        </div> <!-- card-image -->
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Mocidade<i
                                    class="material-icons right">more_vert</i></span>
                            <p><a href="projetos.html">Acessar projeto</a></p>
                        </div> <!-- card-content -->
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Projeto Mocidade<i
                                    class="material-icons right">close</i></span>
                            <p>Here is some more information about this product that is only revealed once clicked on.
                            </p>
                            <p class="card-pix"><i class="material-icons">account_balance</i><span
                                    class="content-card-pix">CHAVE
                                    PIX: 40.416.297/0001-95</span></p>
                        </div> <!-- card-reveal -->
                    </div> <!-- card -->
                </div> <!-- col -->

                <div class="col s12 m4">
                    <div class="card sticky-action hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="<?= get_template_directory_uri(); ?>/assets/images/AME-SE.png">
                        </div> <!-- card-image -->
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Gaiolas Abertas<i
                                    class="material-icons right">more_vert</i></span>
                            <p><a href="projetos.html">Acessar projeto</a></p>
                        </div> <!-- card-content -->
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Projeto Gaiolas Abertas<i
                                    class="material-icons right">close</i></span>
                            <p>Here is some more information about this product that is only revealed once clicked on.
                            </p>
                            <p class="card-pix"><i class="material-icons">account_balance</i><span
                                    class="content-card-pix">CHAVE
                                    PIX: 40.416.297/0001-95</span></p>
                        </div> <!-- card-reveal -->
                    </div> <!-- card -->
                </div> <!-- col -->

                <div class="col s12 m4">
                    <div class="card sticky-action hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="<?= get_template_directory_uri(); ?>/assets/images/AME-SE.png">
                        </div> <!-- card-image -->
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Clinica Vet<i
                                    class="material-icons right">more_vert</i></span>
                            <p><a href="projetos.html">Acessar projeto</a></p>
                        </div> <!-- card-content -->
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Projeto Clinica Vet<i
                                    class="material-icons right">close</i></span>
                            <p>Here is some more information about this product that is only revealed once clicked on.
                            </p>
                            <p class="card-pix"><i class="material-icons">account_balance</i><span
                                    class="content-card-pix">CHAVE
                                    PIX: 40.416.297/0001-95</span></p>
                        </div> <!-- card-reveal -->
                    </div> <!-- card -->
                </div> <!-- col -->

                <div class="col s12 m4">
                    <div class="card sticky-action hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="<?= get_template_directory_uri(); ?>/assets/images/AME-SE.png">
                        </div> <!-- card-image -->
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Lam Doce Lar<i
                                    class="material-icons right">more_vert</i></span>
                            <p><a href="projetos.html">Acessar projeto</a></p>
                        </div> <!-- card-content -->
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Projeto Lam Doce Lar<i
                                    class="material-icons right">close</i></span>
                            <p>Here is some more information about this product that is only revealed once clicked on.
                            </p>
                            <p class="card-pix"><i class="material-icons">account_balance</i><span
                                    class="content-card-pix">CHAVE
                                    PIX: 40.416.297/0001-95</span></p>
                        </div> <!-- card-reveal -->
                    </div> <!-- card -->
                </div> <!-- col -->

                <div class="col s12 m4">
                    <div class="card sticky-action hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="<?= get_template_directory_uri(); ?>/assets/images/AME-SE.png">
                        </div> <!-- card-image -->
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Irmão Francisco<i
                                    class="material-icons right">more_vert</i></span>
                            <p><a href="projetos.html">Acessar projeto</a></p>
                        </div> <!-- card-content -->
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Projeto Irmão Francisco<i
                                    class="material-icons right">close</i></span>
                            <p>Here is some more information about this product that is only revealed once clicked on.
                            </p>
                            <p class="card-pix"><i class="material-icons">account_balance</i><span
                                    class="content-card-pix">CHAVE
                                    PIX: 40.416.297/0001-95</span></p>
                        </div> <!-- card-reveal -->
                    </div> <!-- card -->
                </div> <!-- col -->
            </div> <!-- .row -->
        </div> <!-- .container -->
    </section> <!-- #projetos -->

    <!-- VOLUNTARIOS -->
    <section id="voluntario" class="no-title">
        <div class="container">
            <div class="row">
                <div class="col s12 m6">
                    <img class="responsive-img banner-no-title" src="<?= get_template_directory_uri(); ?>/assets/images/cartaz-seja-voluntario.png" alt="">
                </div>
                <div class="col s12 m6">
                    <h3 class="title">Seja um Voluntario</h3>
                    <a class="waves-effect waves-light btn-large"><i class="material-icons left">cloud</i>Acessar
                        Formulário</a>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto, fugit. Quasi non est ipsa
                        quas
                        provident ratione, ea inventore pariatur autem excepturi, quisquam eum, odio sint quae sequi
                        tempora
                        iste. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto, fugit. Quasi non est
                        ipsa quas
                        provident ratione, ea inventore pariatur autem excepturi, quisquam eum, odio sint quae sequi
                        tempora
                        iste.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto, fugit. Quasi non est ipsa
                        quas
                        provident ratione, ea inventore pariatur autem excepturi, quisquam eum, odio sint quae sequi
                        tempora
                        iste.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto, fugit. Quasi non est ipsa
                        quas
                        provident ratione, ea inventore pariatur autem excepturi, quisquam eum, odio sint quae sequi
                        tempora
                        iste.
                    </p>


                </div>
            </div>
        </div>
    </section>

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

<?php get_footer();