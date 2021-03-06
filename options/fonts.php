<?php
    _e( 'Fonts allow you to change the text type used on yoru site.', 'simple-customize-plugin' );
    echo '<bt />';
    _e( 'The fonts will be included in your sites header before the customized stylings are included, so you can use them whenever you want in your theme', 'sumple-customize-plugin' );
    echo '<br />';
    echo '<br />';
    _e( 'The following are some free resources for fonts:', 'simple-customize-plugin' );
    echo '<br />';
?>
<ul>
    <li>
        <a href="http://www.google.com/fonts" target="_blank">Google Fonts</a>
    </li>
</ul>

<form action="" method="post">
    <table class="wp-list-table widefat" cellspacing="0">
        <thead>
        <tr>
            <th scope="col"><?php _e( 'Font name', 'simple-customize-plugin' ); ?></th>
            <th scope="col"><?php _e( 'Font location', 'simple-customize-plugin' ); ?></th>
            <th scope="col"><?php _e( 'Font status', 'simple-customize-plugin' ); ?></th>
        </tr>
        </thead>

        <tfoot>
        <tr>
            <th scope="col"><?php _e( 'Font name', 'simple-customize-plugin' ); ?></th>
            <th scope="col"><?php _e( 'Font location', 'simple-customize-plugin' ); ?></th>
            <th scope="col"><?php _e( 'Font status', 'simple-customize-plugin' ); ?></th>
        </tr>
        </tfoot>

        <tbody id="the-list">
        <?php
        if ( isset( $fonts[$theme->stylesheet] ) )
        {
            foreach( $fonts[$theme->stylesheet] AS $fnum => $font )
            {
                ?>
                <tr>
                    <td>
                        <?php echo $font['font-label']; ?>
                        <div class="row-actions">
                            <span class="delete">
                                <a href="?page=simple-customize&amp;tab=fonts&amp;font-delete=<?php echo sanitize_title( $font['font-label'] ); ?>" class="delete"><?php _e( 'Delete', 'simple-customize-plugin' ); ?></a>
                            </span>
                        </div>
                    </td>
                    <td>
                        <?php echo $font['font-location']; ?>
                    </td>
                    <td>
                        <a href="?page=simple-customize&amp;tab=fonts&amp;font-<?php echo ( $font['font-status'] == 'enabled' ? 'disable' : 'enable' ); ?>=<?php echo sanitize_title( $font['font-label'] ); ?>">
                            <?php
                                if ( $font['font-status'] == 'enabled' )
                                    _e( 'Click to disable', 'simple-customize-plugin' );
                                else
                                    _e( 'Click to enable', 'simple-customize-plugin' );
                            ?>
                        </a>
                    </td>
                </tr>
            <?php
            }
        }
        ?>

        <tr>
            <td colspan="3">
                <strong><?php _e( 'Add a new font', 'simple-customize-plugin' ); ?></strong>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="font-label" style="width: 100%;">
            </td>
            <td>
                <input type="text" name="font-location" style="width: 100%;">
            </td>
            <td>
                <input type="hidden" name="font-status" value="enabled">
                <button type="submit" class="button-primary"><?php _e( 'Add this font', 'simple-customize-plugin' ); ?></button>
            </td>
        </tr>

        </tbody>
    </table>
</form>
