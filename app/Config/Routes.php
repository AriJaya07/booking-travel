<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('home', 'Home::index');
$routes->group('home', function ($routes) {
    $routes->get('generateFormSearch', 'Home::generateFormSearch');
    $routes->get('generateBoat', 'Home::generateBoat');
    $routes->get('generateActivity', 'Home::generateActivity');
    $routes->get('generateRecommended', 'Home::generateRecommended');
    $routes->get('generateReview', 'Home::generateReview');
    $routes->get('generateSelling', 'Home::generateSelling');
});
$routes->get('about', 'About::index');
$routes->group('about', function ($routes) {
    $routes->get('generateMeet', 'About::generateMeet');
    $routes->get('generateTeam', 'About::generateTeam');
    $routes->get('generateCustomer', 'About::generateCustomer');
});
$routes->get('agents', 'Agents::index');
$routes->group('agents', function ($routes) {
});
$routes->get('blog', 'Blog::index');
$routes->group('blog', function ($routes) {
});
$routes->get('affiliate', 'Affiliate::index');
$routes->group('affiliate', function ($routes) {
});
$routes->get('cart', 'Cart::index');
$routes->group('cart', function ($routes) {
    $routes->get('generateCart', 'Cart::generateCart');
		$routes->post('sendConfirmMail', 'Cart::sendConfirmMail');
});
$routes->get('company', 'Company::index');
$routes->group('company', function ($routes) {
    $routes->get('generateChoose', 'Company::generateChoose');
    $routes->get('generateVacation', 'Company::generateVacation');
    $routes->get('generateEnvironment', 'Company::generateEnvironment');
    $routes->get('generateFamily', 'Company::generateFamily');
});
// $routes->get('detail-activity', 'Detail_activity::index');
// $routes->group('detail-activity', function ($routes) {
//     $routes->get('generateHighlight/(:segment)', 'Detail_activity::generateHighlight/$1');
//     $routes->get('generateExperience/(:segment)', 'Detail_activity::generateExperience/$1');
//     $routes->get('generateReview/(:segment)', 'Detail_activity::generateReview/$1');
// });
$routes->get('detail-boat', 'Detail_boat::index');
$routes->group('detail-boat', function ($routes) {
    $routes->get('generateBoatActivity/(:segment)', 'Detail_boat::generateBoatActivity/$1');
    $routes->get('generateExperience/(:segment)', 'Detail_boat::generateExperience/$1');
    $routes->get('generateReviewBoat/(:segment)', 'Detail_boat::generateReviewBoat/$1');
});
$routes->get('detail-article', 'Detail_article::index');
$routes->group('detail-article', function ($routes) {
    $routes->get('generateIsland/(:segment)', 'Detail_article::generateIsland/$1');
    $routes->get('generateTrending/(:segment)', 'Detail_article::generateTrending/$1');
    $routes->get('generateTour/(:segment)', 'Detail_article::generateTour/$1');
});
$routes->get('mail-template', 'Mail::index');
$routes->group('mail-template', function ($routes) {
    $routes->get('generateMail', 'Mail::generateMail');
    $routes->get('mailPayment', 'Mail::mailPayment');
});
$routes->get('payment', 'Payment::index');
$routes->group('payment', function ($routes) {
    $routes->get('generateSearchResult/(:any)/(:any)/(:any)/(:any)/(:any)/(:any)', 'Payment::generateSearchResult/$1/$2/$3/$4/$5/$6');
    $routes->get('generateOrder', 'Payment::generateOrder');
		$routes->post('sendConfirmMailPayment', 'Payment::sendConfirmMailPayment');
});

$routes->get('detail-activity', 'activity\Activity::index');
$routes->group('activity', function ($routes) {
    $routes->get('all-list', 'activity\Activity::getActivityList');
    $routes->get('getDetail/(:segment)', 'activity\Activity::getActivityDetail/$1');
    $routes->get('getOptions/(:num)/(:num)/(:any)', 'activity\Activity::getOptions/$1/$2/$3');
});
$routes->group('masterdata', function ($routes) {
    $routes->get('getCurrency/(:segment)', 'masterdata\Currency::getCurrency/$1');
});

$routes->group('paypal', function ($routes) {
    $routes->post('create-order', 'paypal\PaypalOrder::createOrder');
    $routes->get('success', 'paypal\PaypalOrder::captureOrder');
    $routes->get('cancel', 'paypal\PaypalOrder::paymentFailed');
});


$routes->group('admin', function ($routes) {
    $routes->get('/', 'admin\Page::index');
    $routes->get('product/new', 'admin\Product::index');
    $routes->post('product/save', 'admin\Product::save');
    $routes->post('product/saveOptionsSetup', 'admin\Product::saveOptionsSetup');
    $routes->post('deleteOption/(:segment)', 'admin\Product::deleteOption/$1');
    $routes->post('product/saveOptionsMeetingPoint', 'admin\Product::saveOptionsMeetingPoint');
    $routes->post('product/saveOptionsAvaibility', 'admin\Product::saveOptionsAvaibility');
    $routes->post('product/saveOptionsTimeslot', 'admin\Product::saveOptionsTimeslot');
    $routes->post('product/saveOptionsPrice', 'admin\Product::saveOptionsPrice');
    $routes->post('product/saveItinerary', 'admin\Product::saveItinerary');
    $routes->get('getItinerary', 'admin\Product::getItinerary');
    $routes->get('showFormItinerary', 'admin\Product::showFormItinerary');
    $routes->post('deleteItinerary/(:segment)', 'admin\Product::deleteItinerary/$1');
    $routes->get('getOptPrice', 'admin\Product::getOptPrice');
    $routes->get('product/showFormOptions', 'admin\Product::showFormOptions');
    $routes->get('product/productPage', 'admin\Product::productPage');
    $routes->get('product/optionsList', 'admin\Product::optionsList');
    $routes->get('product/edit/(:segment)', 'admin\Product::showForm/$1');

    
    $routes->post('product/upload', 'admin\Product::upload');
    $routes->get('product/getUpload', 'admin\Product::getUpload');
    $routes->post('deletePhoto/(:segment)', 'admin\Product::deletePhoto/$1');

    $routes->get('transactions', 'admin\Transactions::index');
    $routes->get('transactions/list', 'admin\Transactions::table');
    $routes->get('transactions/detail', 'admin\Transactions::getDetail');

    $routes->get('refreshCsrf', 'admin\Product::refreshCsrf');
});

$routes->post('upload', 'file\Upload_file::upload');
$routes->get('getUpload', 'file\Upload_file::getUpload');
