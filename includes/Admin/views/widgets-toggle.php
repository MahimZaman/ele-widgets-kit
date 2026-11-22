<?php
use Ele\WidgetsKit\Admin\Settings;

if ( isset( $_POST['ewk_save_widgets'] ) && check_admin_referer( 'ewk_save_widgets' ) ) {
    Settings::save( $_POST['widgets'] ?? [] );
    echo '<div class="updated"><p>Settings saved.</p></div>';
}

$enabled = Settings::get_enabled_widgets();
$widgets = [
    'example' => 'Example Widget',
];
?>

<form method="post">
    <?php wp_nonce_field( 'ewk_save_widgets' ); ?>
    <table class="form-table">
        <?php foreach ( $widgets as $key => $label ) : ?>
            <tr>
                <th><?php echo esc_html( $label ); ?></th>
                <td>
                    <input type="checkbox" name="widgets[]" value="<?php echo esc_attr( $key ); ?>"
                        <?php checked( in_array( $key, $enabled, true ) ); ?>>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <p>
        <input type="submit" name="ewk_save_widgets" class="button-primary" value="Save Changes">
    </p>
</form>
