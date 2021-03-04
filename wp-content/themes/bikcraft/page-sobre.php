<?php
    // Template Name: Sobre
    get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php include(TEMPLATEPATH . "/public/inc/introducao.php"); ?>

<section class="missao_sobre container animar-interno">
    <div class="grid-10">
        <h2 class="subtitulo-interno">História, Missão e Visão</h2>
        <p>Quando iniciamos a Bikcraft queriamos apenas um produto que adoraríamos utilizar.
            Eramos apaixonados por pedalar e também por fazer as coisas com as nossas próprias mãos.
            Assim surgiu um sonho na garagem da nossa casa. </p>
        <p>Conheça os nossos produtos,
            pergunte para os nossos clientes e descubra a maravilha de ter uma Bikcraft na sua casa. </p>
    </div>

    <div class="grid-6">
        <h2 class="subtitulo-interno">Valores</h2>
        <ul>
            <li>- Qualidade no processo com</li>
            <li>- Foco no cliente sem perder a</li>
            <li>- Diversão, preservando a </li>
            <li>- Natureza com sustentabilidade</li>
        </ul>
    </div>

    <div class="grid-16 foto-equipe">
        <img src="public/img/equipe-bikcraft.jpg" alt="">
    </div>

</section>

<section class="qualidade container">
    <h2 class="subtitulo">Qualidade</h2>
    <img src="public/img/bikcraft-qualidade.png" alt="Bikcraft">
    <ul class="qualidade_lista">
        <li class="grid-1-3">
            <h3>Durabilidade</h3>
            <p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação</p>
        </li>

        <li class="grid-1-3">
            <h3>Design</h3>
            <p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação</p>
        </li>

        <li class="grid-1-3">
            <h3>Sustentabilidade</h3>
            <p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação</p>
        </li>
    </ul>

</section>

<?php endwhile; else: endif; ?>
<?php get_footer(); ?>