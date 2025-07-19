<?php

//use CodeIgniter\Router\RouteCollection;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
use App\Controllers\News; // Add this line
use App\Controllers\Pages;
use App\Controllers\Admission;
use App\Controllers\ChapterController;

$routes->get('admission', [Admission::class, 'index']);  
$routes->get('admission/create', [Admission::class, 'create']);

//$routes->get('admission/store', [Admission::class, 'store']); 
$routes->match(['get', 'post'], 'admission/store', 'Admission::store');


//$routes->get('admission/update', [Admission::class, 'update$1']);  
$routes->match(['get','post'], 'admission/update/(:num)', 'Admission::update/$1'); 


$routes->get('admission/edit/(:num)', 'Admission::edit/$1');

$routes->match(['get','post'], 'admission/delete/(:num)', 'Admission::delete/$1'); 
//$routes->get('admission/delete/(:num)', 'Admission::delete/$1');

$routes->get('receipt', 'Receipt::index');
 //admin dashbord
$routes->get('/admin/dashboard', 'AdminDashboard::index');
$routes->get('/logout', 'Auth::logout');



$routes->get('/login', 'Auth::login');
$routes->post('/check', 'Auth::check');
$routes->get('/logout', 'Auth::logout');

/* $routes->get('/admin/dashboard', function () {
    echo "Welcome to Dashboard!";
});
*/

// routes for contact form
$routes->get('contact', 'Contact::index');
$routes->post('contact/submit', 'Contact::submit');

// routes for chapter 


$routes->get('gallery', 'Gallery::index');



// chapters route

$routes->group('admin', function($routes){
    $routes->get('chapters', 'Admin\ChapterController::index');
    $routes->get('chapters/create', 'Admin\ChapterController::create');
    $routes->post('chapters/store', 'Admin\ChapterController::store');
    $routes->get('chapters/edit/(:num)', 'Admin\ChapterController::edit/$1');
    $routes->post('chapters/update/(:num)', 'Admin\ChapterController::update/$1');
    $routes->get('chapters/delete/(:num)', 'Admin\ChapterController::delete/$1');
});



// subject routs
    $routes->group('admin/subjects', function($routes) {
    $routes->get('/', 'SubjectController::index');
    $routes->get('create', 'SubjectController::create');
    $routes->post('store', 'SubjectController::store');

    $routes->get('edit/(:num)', 'SubjectController::edit/$1');
    $routes->post('update/(:num)', 'SubjectController::update/$1');
    $routes->get('delete/(:num)', 'SubjectController::delete/$1');
});


$routes->group('admin', function($routes) {
    $routes->get('courses', 'CourseController::index');
    $routes->get('courses/create', 'CourseController::create');
    $routes->post('courses/store', 'CourseController::store');
  
   // $routes->get('edit/(:num)', 'CourseController::edit/$1');
   // $routes->post('update/(:num)', 'CourseController::update/$1');
    //$routes->get('delete/(:num)', 'CourseController::delete/$1');

    // ✅ Fix these 3:
    $routes->get('courses/edit/(:num)', 'CourseController::edit/$1');
    $routes->post('courses/update/(:num)', 'CourseController::update/$1');
    $routes->get('courses/delete/(:num)', 'CourseController::delete/$1');
});






$routes->group('admin/papers', function($routes) {
    $routes->get('/', 'PaperController::index');
    $routes->get('create', 'PaperController::create');
    $routes->post('store', 'PaperController::store');
    $routes->get('edit/(:num)', 'PaperController::edit/$1');
    $routes->post('update/(:num)', 'PaperController::update/$1');
    $routes->get('delete/(:num)', 'PaperController::delete/$1');

    
});

$routes->group('admin/units', function($routes) {
    $routes->get('/', 'UnitController::index');
    $routes->get('create', 'UnitController::create');
    $routes->post('store', 'UnitController::store');
    $routes->get('edit/(:num)', 'UnitController::edit/$1');
    $routes->post('update/(:num)', 'UnitController::update/$1');
    $routes->get('delete/(:num)', 'UnitController::delete/$1');
});

// student ke liye content view karna
    $routes->get('student-content', 'StudentContentController::index');
    $routes->get('student-content/(:segment)', 'StudentContentController::viewChapter/$1');


$routes->get('admin/chapters/getUnitsByPaper', 'Admin\ChapterController::getUnitsByPaper');



$routes->get('news', [News::class, 'index']);           // Add this line
$routes->get('news/(:segment)', [News::class, 'show']); // Add this line

$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);



$routes->setAutoRoute(true);



