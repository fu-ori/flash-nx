<section id="bio">
    <figure>
        <img 
             src="<?php echo $gen_photo; ?>" 
             alt="<?php echo $gen_url; ?> | <?php echo $gen_title; ?>">
    </figure>

    <div class="bio-content">
        <h3>Sobre</h3>
        <p><?php echo $gen_bio; ?></p>

        <article>
            <h4>Conheça</h4>
            <p><?php echo $gen_publi; ?></p>
        </article>
        <p>
            <a 
               class="btn"
               href="<?php echo $gen_contact; ?>" 
               target="_blank" 
               rel="noopener noreferrer">Entrar em Contato
            </a>
        </p>
    </div>
</section>