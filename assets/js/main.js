jQuery(document).ready(function($) {
  $(document).foundation();

  // Apply Foundation dropdown to the menu.
  var elem = new Foundation.DropdownMenu($('.menu'), {'autoclose': true});
});
