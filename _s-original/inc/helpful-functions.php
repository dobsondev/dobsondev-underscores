<?php
/**
 * A collection of helpful functions for use throughout the site.
 *
 * @package _sSs
 */

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function is_categorized_blog() {
  if ( false === ( $all_the_cool_cats = get_transient( '_sSs_categories' ) ) ) {
    // Create an array of all the categories that are attached to posts.
    $all_the_cool_cats = get_categories( array(
      'fields'     => 'ids',
      'hide_empty' => 1,

      // We only need to know if there is more than one category.
      'number'     => 2,
    ) );

    // Count the number of categories that are attached to the posts.
    $all_the_cool_cats = count( $all_the_cool_cats );

    set_transient( '_sSs_categories', $all_the_cool_cats );
  }

  if ( $all_the_cool_cats > 1 ) {
    // This blog has more than 1 category so is_categorized_blog should return true.
    return true;
  } else {
    // This blog has only 1 category so is_categorized_blog should return false.
    return false;
  }
}

/**
 * Outputs a 2D array as a CSV file.
 *
 * Remeber to include the following before you make the call to this function:
 * header("Content-Type: text/csv");
 * header("Content-Disposition: attachment; filename=file.csv");
 *
 * https://stackoverflow.com/questions/217424/create-a-csv-file-for-a-user-in-php#answer-6493794
 */
function outputCSV($data) {
  $output = fopen("php://output", "w");
  foreach ($data as $row)
    fputcsv($output, $row); // here you can change delimiter/enclosure
  fclose($output);
}

/**
 * Converts a HEX color to an RGB color.
 *
 * https://wp-a2z.org/oik_api/twentyfifteen_hex2rgb/
 */
function hexToRGB( $color ) {
  $color = trim( $color, '#' );

  if ( strlen( $color ) == 3 ) {
    $r = hexdec( substr( $color, 0, 1 ) . substr( $color, 0, 1 ) );
    $g = hexdec( substr( $color, 1, 1 ) . substr( $color, 1, 1 ) );
    $b = hexdec( substr( $color, 2, 1 ) . substr( $color, 2, 1 ) );
  } elseif ( strlen( $color ) == 6 ) {
    $r = hexdec( substr( $color, 0, 2 ) );
    $g = hexdec( substr( $color, 2, 2 ) );
    $b = hexdec( substr( $color, 4, 2 ) );
  } else {
    return array();
  }

  return array(
    'r'   => $r,
    'g' => $g,
    'b'  => $b,
  );
}

/**
 * Convers a RGB color to a HEX color.
 *
 * https://stackoverflow.com/questions/32962624/convert-rgb-to-hex-color-values-in-php
 */
function RGBToHex( $r, $g, $b ) {
  return sprintf( "#%02x%02x%02x", $r, $g, $b );
}