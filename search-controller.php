<?php
  return function($site, $pages, $page) {
    $query = get('q');
    $results = $site
                ->search($query, array('words' => true))
                ->visible()->sortBy('date', 'desc')
                ->paginate(10);
    $pagination = $results->pagination();
    $itemCount = $pagination->countItems();
 
    return compact('query','results', 'pagination', 'itemCount');
};
