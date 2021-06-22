<?php
/**
 * Footer Template
 * 
 * @package Eatat.work
 */

?>

    </main><!-- #main -->
  </div><!-- #primary -->
</div><!-- #content -->

<footer class="footer mt-4 p-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12">
        <h3 class="mt-3">Kontakt</h3>
        <p>In den sozialen Netzwerken erfahren Sie regelmäßig mehr über unser Unternehmen.</p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <h3 class="mt-3">Links</h3>

        <?php get_template_part( 'partials/footer/navbar' ); ?>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12"></div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>