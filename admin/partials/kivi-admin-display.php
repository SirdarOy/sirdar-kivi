<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://kivi.etuovi.com/
 * @since      1.0.0
 *
 * @package    Kivi
 * @subpackage Kivi/admin/partials
 */
?>


<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div id="admin-page-kivi">
  <div class="admin-page header">
    <div class="wrapper">
      <img src="<?php echo plugin_dir_url( __FILE__ ) . '../../img/sirdar.png'; ?>" alt="sirdar logo" style="vertical-align: top;margin-top: 5px; margin-right: 10px;">
    </div>
  </div>
  <div class="admin-page page-body">
    <div class="wrapper" style="width: 40%;">
      <p>
      <?php _e('Tämä lisäosa integroi KIVI-järjestelmän WordPressiin. Koodi perustuu <a href="https://github.com/almamedia/kivi-wordpress">Alma Median julkaisemaan avoimen lähdekoodin lisäosaan</a>, mutta se on muokattu toimimaan KIVI-järjestelmän tarjoaman normaaliin XML-viennin kanssa, jolloin lisäpalveluita ei tarvitse tilata.', 'kivi'); ?>
      </p>
      <form method="post" action="options.php" id="xmlform">
        <?php settings_fields( 'kivi-settings' ); ?>
        <?php do_settings_sections( 'kivi-settings' ); ?>
        <h2><?php _e("Aseta URL ja tuo aineisto", "kivi"); ?>:</h2>
        <input type="text" name="kivi-remote-url" id="kivi-remote-url" class="text-input" value="<?php echo esc_attr( get_option('kivi-remote-url') ); ?>" placeholder="<?php _e('Tähän laitetaan XML-tiedoston URL-osoite', 'kivi'); ?>">
        <p>
        <?php _e('Lisää tähän XML viennin osoite, jonka saat KIVI-järjestelmän asiakaspalvelusta, pyydä vain normaalia XML vientiä (ei maksullista WordPress vientiä).', 'kivi'); ?>
        </p>
        <button type="button" id="xmlimport-sync" class="button button-secondary">
          <?php _e("Tuo", "kivi"); ?>
        </button>
        <h2><?php _e("Muut asetukset", "kivi"); ?>:</h2>
        <div class="other-kivi-settings">
          <label for="kivi-brand-color"><?php _e("Brändiväri", "kivi"); ?><br>
            <input type="text" name="kivi-brand-color" id="kivi-brand-color" class="text-input" value="<?php echo esc_attr( get_option('kivi-brand-color') ); ?>" placeholder="<?php _e('Brändiväri, joka esiintyy esim. napeissa jne. Kivi -kohteita näytettäessä', 'kivi'); ?>">
          </label>
          <label>
            <input type="text" name="kivi-slug" id="kivi-slug" class="text-input" value="<?php echo esc_attr( get_option('kivi-slug') ); ?>" placeholder="<?php _e('esim. kohde', 'kivi'); ?>"><?php _e("Polkutunnus", "kivi"); ?>
          </label>
          <label>
            <input type="checkbox" id="kivi-show-sidebar" <?php if(get_kivi_option('kivi-show-sidebar')){echo "checked=''";} ?> name="kivi-show-sidebar" value=""><?php _e('Näytä sivupalkki kohdesivulla', 'kivi')?>
          </label>
          <label>
            <input type="checkbox" id="kivi-use-www-size" <?php if(get_kivi_option('kivi-use-www-size')){echo "checked=''";} ?> name="kivi-use-www-size" value=""><?php _e('Käytä www-kokoisia kuvia siirrossa (oletus: original)', 'kivi')?>
          </label>
          <label><input type="text" name="kivi-gmap-id" id="kivi-gmap-id" class="text-input" value="<?php echo get_kivi_option('kivi-gmap-id')?>" placeholder="google maps key">Google maps api key</label>
          <input type="hidden" name="kivi-show-statusbar" id="kivi-show-statusbar" value="<?php echo esc_attr( get_option('kivi-show-statusbar') ); ?>">

          <button type="button button-secondary" id="xmlimport-reset" class="button button-secondary"><?php _e('Keskeytä', 'kivi'); ?></button>

          <button type="button" id="save-kivi-settings" class="button button-secondary"><?php _e('Tallenna asetukset', 'kivi'); ?></button>
        </div>
      </form>
      <h2><?php _e("Ohjeet", "kivi"); ?>:</h2>
      <?php _e('Yleiset ohjeet löydät <a href="https://github.com/SirdarOy/sirdar-kivi">GitHubista</a>.', 'kivi'); ?>
    </div>
  </div>
</div>
