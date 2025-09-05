<section class="faq">
    <div class="faq-title">
        Perguntas Frequentes
    </div>

    <?php foreach ($faq as $print): ?>

    <div class="faq-item">
        <h2 class="faq-ask"><?php echo $print['ask'] ?></h2>
        <p class="faq-response"><?php echo $print['response'] ?></p>
    </div>

    <?php endforeach; ?>
</section>