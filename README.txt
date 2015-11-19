Search Logs implementation Description
--------------------------------------

  This code is used to store as logs (with watchdog function) the search history of a login user.


Installation
--------------------------------------

 *  Create a block in drupal (admin/structure/block/add) with name like "Searched Strings"
 *  Select php format and paste the search_logs.php code
 *  Allow block to run only under solr-search pages
 *  Save the block
 *  Go to search page (ex panels) and add the block
