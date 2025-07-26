<?php

//use CodeIgniter\Router\RouteCollection;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
use App\Controllers\Pages;
use App\Controllers\Admin\Admission;
use App\Controllers\Admin\ChapterController;


// open student admission page for students without crud
$routes->get('admissionpage', 'AdmissionPage::index');
$routes->post('admissionpage/store', 'AdmissionPage::store');


//admin
$routes->get('admin/admission', 'Admin\Admission::index');
$routes->get('admin/admission/create', 'Admin\Admission::create');

$routes->get('admission/create', 'Admin\Admission::create');
$routes->match(['get', 'post'], 'admin/admission/store', 'Admin\Admission::store');
$routes->match(['get','post'], 'admin/admission/update/(:num)', 'Admin\Admission::update/$1'); 
$routes->get('admin/admission/edit/(:num)', 'Admin\Admission::edit/$1');
$routes->match(['get','post'], 'admin/admission/delete/(:num)', 'Admin\Admission::delete/$1'); 
 //admin dashbord
$routes->get('/admin/dashboard', 'Admin\AdminDashboard::index');
$routes->get('/logout', 'Admin\Auth::logout');

$routes->get('/login', 'Admin\Auth::login');
$routes->post('/check', 'Admin\Auth::check');
$routes->get('/logout', 'Admin\Auth::logout');


//$routes->match(['get', 'post'], 'admin/auth/change-password', 'Admin\Auth::changePassword');

$routes->group('admin', function($routes) {
    $routes->match(['get', 'post'], 'auth/change-password', 'Admin\Auth::changePassword', ['as' => 'admin.changePassword']);
});


$routes->setTranslateUriDashes(true);


// routes for contact form
$routes->get('contact', 'Contact::index');
$routes->post('contact/submit', 'Contact::submit');

// routes for Gallery 
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
    $routes->get('courses', 'Academic\CourseController::index');
    $routes->get('courses/create', 'Academic\CourseController::create');
    $routes->post('courses/store', 'Academic\CourseController::store');
  

    // ✅ Fix these 3:
    $routes->get('courses/edit/(:num)', 'Academic\CourseController::edit/$1');
    $routes->post('courses/update/(:num)', 'Academic\CourseController::update/$1');
    $routes->get('courses/delete/(:num)', 'Academic\CourseController::delete/$1');
});


$routes->group('admin/papers', function($routes) {
    $routes->get('/', 'Academic\PaperController::index');
    $routes->get('create', 'Academic\PaperController::create');
    $routes->post('store', 'Academic\PaperController::store');
    $routes->get('edit/(:num)', 'Academic\PaperController::edit/$1');
    $routes->post('update/(:num)', 'Academic\PaperController::update/$1');
    $routes->get('delete/(:num)', 'Academic\PaperController::delete/$1');

    
});

$routes->group('admin/units', function($routes) {
    $routes->get('/', 'Academic\UnitController::index');
    $routes->get('create', 'Academic\UnitController::create');
    $routes->post('store', 'Academic\UnitController::store');
    $routes->get('edit/(:num)', 'Academic\UnitController::edit/$1');
    $routes->post('update/(:num)', 'Academic\UnitController::update/$1');
    $routes->get('delete/(:num)', 'Academic\UnitController::delete/$1');
});

// student ke liye content view karna
    $routes->get('student-content', 'Academic\StudentContentController::index');
    $routes->get('student-content/(:segment)', 'Academic\StudentContentController::viewChapter/$1');
    
    $routes->get('admin/chapters/getUnitsByPaper', 'Admin\ChapterController::getUnitsByPaper');

// routes for fees
$routes->get('admin/fees', 'Admin\Fees::index');
$routes->setAutoRoute(true); // Ensure it's true

$routes->get('admin/fees/create', 'Admin\Fees::create');
$routes->post('admin/fees/store', 'Admin\Fees::store');
$routes->get('admin/fees/edit/(:num)', 'Admin\Fees::edit/$1');
$routes->post('admin/fees/update/(:num)', 'Admin\Fees::update/$1');
$routes->get('admin/fees/delete/(:num)', 'Admin\Fees::delete/$1');
$routes->get('admin/fees/view/(:num)', 'Admin\Fees::view/$1');
$routes->get('admin/fees/receipt/(:num)', 'Admin\Fees::receipt/$1');
$routes->get('admin/fees_total_report', 'Admin\Fees::feesTotalReport');




$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);



$routes->setAutoRoute(true);



