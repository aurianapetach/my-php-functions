
<?php 

/**
 * Echos coffee incredient.
 *
 * @param Type of coffee
 */

function makeDessert($type) {
  if ($type == 'Napoleon') {
    echo '<p> A Napoleon is a wondrous combination of puff pratry, custard and whipped cream that is the perfect mix of crunchy and creamy.</p>';
  } else if ($type == 'Tirimisu') {
    echo '<p>Tirimisu is a delight for those who love coffee and cake.</p>';
  } else {
    echo '<p>That&rsquo;s not a dessert worth mentioning.</p>';
  }
}