<!-- includes\sections\ask_button.php -->
<section class='ask-buttons wrapper'>
    <!-- First Button -->
    <a href="<?php echo $buttonLink1 ?? '#'; ?>" class="btn btn-primary">
        <?php echo $buttonText1 ?? 'button 1'; ?>
    </a>

    <!-- Second Button, only shown if variables are set -->
    <?php if (isset($buttonLink2) && isset($buttonText2)): ?>
        <a href="<?php echo $buttonLink2; ?>" class="btn btn-secondary">
            <?php echo $buttonText2; ?>
        </a>
    <?php endif; ?>
</section>
