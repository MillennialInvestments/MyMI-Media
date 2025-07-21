<?php
$routes->group('admin', function($routes) {
    $routes->get('campaigns', 'CampaignReviewController::index');
    $routes->get('campaigns/approve/(:num)', 'CampaignReviewController::approve/$1');
    $routes->get('campaigns/reject/(:num)', 'CampaignReviewController::reject/$1');
});
