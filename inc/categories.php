<?php
if (!defined('ABSPATH')) exit;

/**
 * Get category color
*/

function mn_get_category_color($cat_id = null){

    if($cat_id) $cat_id = get_queried_object_id(  );

    if ( ! $cat_id ) {
        return '#d62828';
    }

    $color = get_term_meta($cat_id, 'mn_category_color', true);

    return $color ? $color : '#d62828';
}

/**
 * Add category color field
 */
function mn_category_color_add_field() {
    ?>
    <div class="form-field">
        <label for="mn_category_color">
            <?php esc_html_e( 'Category Color', 'most-news' ); ?>
        </label>
        <input
            type="color"
            name="mn_category_color"
            id="mn_category_color"
            value="#d62828"
        />
    </div>
    <?php
}
add_action( 'category_add_form_fields', 'mn_category_color_add_field' );

/**
 * Register category color field
*/

function mn_category_color_edit_field($term){
    $color = get_term_meta( $term->term_id, 'mn_category_color', true );
    ?>
        <tr class="form-field">
            <th scope="row" valign="top">
                <label for="mn_category_color">
                    <?php esc_html_e( 'Category Color', 'most-news' ); ?>
                </label>
            </th>
            <td>
                <input 
                    type="color" 
                    name="mn_category_color" 
                    id="mn_category_color" 
                    value="<?php esc_attr( $color ? $color : '#d62828' ); ?>"
                />
            </td>
        </tr>
    <?php
}

add_action( 'category_edit_form_fields', 'mn_category_color_edit_field');

function mn_save_category_color($term_id){

    if(isset($_POST['mn_category_color'])) {
        update_term_meta( $term_id, 'mn_category_color', sanitize_hex_color( $_POST['mn_category_color'] ) );
    }
}

add_action( 'created_category', 'mn_save_category_color', 10, 2 );
add_action( 'edited_category', 'mn_save_category_color', 10, 2 );
