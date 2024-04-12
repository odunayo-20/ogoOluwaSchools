<?php

use App\Livewire\Admin\AdminDashboard;
use App\Livewire\Admin\Admission\AdAdmission;
use App\Livewire\Admin\Admission\AdAdmissionView;
use App\Livewire\Admin\Assignment\AllAssign;
use App\Livewire\Admin\Assignment\CreateAssign;
use App\Livewire\Admin\AssignSubject\AllAssignSubject;
use App\Livewire\Admin\AssignSubject\CreateAssignSubject;
use App\Livewire\Admin\AssignSubject\EditAssignSubject;
use App\Livewire\Admin\Auth\AdminForget;
use App\Livewire\Admin\Auth\AdminLogin;
use App\Livewire\Admin\Auth\AdminReset;
use App\Livewire\Admin\Class\AllClass;
use App\Livewire\Admin\Class\CreateClass;
use App\Livewire\Admin\Class\EditClass;
use App\Livewire\Admin\Contact\ListContact;
use App\Livewire\Admin\Contact\ViewContact;
use App\Livewire\Admin\Event\EventCreate;
use App\Livewire\Admin\Event\EventEdit;
use App\Livewire\Admin\Event\EventList;
use App\Livewire\Admin\Event\EventView;
use App\Livewire\Admin\Gallary\GallaryCreate;
use App\Livewire\Admin\Gallary\GallaryEdit;
use App\Livewire\Admin\Gallary\GallaryList;
use App\Livewire\Admin\News\CreateNews;
use App\Livewire\Admin\News\EditNews;
use App\Livewire\Admin\News\NewsList;
use App\Livewire\Admin\News\ViewNews;
use App\Livewire\Admin\Profile\AdminChangePassword;
use App\Livewire\Admin\Profile\AdminProfile;
use App\Livewire\Admin\Staff\AdStaffEdit;
use App\Livewire\Admin\Staff\AdStaffList;
use App\Livewire\Admin\Staff\AdStaffView;
use App\Livewire\Admin\Student\AdStudentEdit;
use App\Livewire\Admin\Student\AdStudentList;
use App\Livewire\Admin\Student\AdStudentView;
use App\Livewire\Admin\Subject\AllSubject;
use App\Livewire\Admin\Subject\CreateSubject;
use App\Livewire\Admin\Subject\EditSubject;
use App\Livewire\Frontend\FrontendAbout;
use App\Livewire\Frontend\FrontendAcademics;
use App\Livewire\Frontend\FrontendAdmission;
use App\Livewire\Frontend\FrontendContact;
use App\Livewire\Frontend\FrontendEvent;
use App\Livewire\Frontend\FrontendEventRead;
use App\Livewire\Frontend\FrontendGallery;
use App\Livewire\Frontend\FrontendGuideline;
use App\Livewire\Frontend\FrontendIndex;
use App\Livewire\Frontend\FrontendNews;
use App\Livewire\Frontend\FrontendNewsRead;
use App\Livewire\Frontend\FrontendService;
use App\Livewire\Staff\Assignment\StaffAssignmentCreate;
use App\Livewire\Staff\Assignment\StaffAssignmentEdit;
use App\Livewire\Staff\Assignment\StaffAssignmentList;
use App\Livewire\Staff\Assignment\StaffAssignSubmit;
use App\Livewire\Staff\Auth\StaffForget;
use App\Livewire\Staff\Auth\StaffLogin;
use App\Livewire\Staff\Auth\StaffRegister;
use App\Livewire\Staff\Auth\StaffReset;
use App\Livewire\Staff\Event\StaffEvent;
use App\Livewire\Staff\Event\StaffEventView;
use App\Livewire\Staff\News\StaffNews;
use App\Livewire\Staff\News\StaffNewsView;
use App\Livewire\Staff\Profile\StaffProfile;
use App\Livewire\Staff\StaffDashboard;
use App\Livewire\Student\Assignment\StudentAssignList;
use App\Livewire\Student\Assignment\StudentAssignSubmit;
use App\Livewire\Student\Assignment\StudentAssignSubmitEdit;
use App\Livewire\Student\Assignment\StudentAssignSubmitList;
use App\Livewire\Student\Auth\StudentForget;
use App\Livewire\Student\Auth\StudentLogin;
use App\Livewire\Student\Auth\StudentRegister;
use App\Livewire\Student\Auth\StudentReset;
use App\Livewire\Student\Event\StudentEvent;
use App\Livewire\Student\Event\StudentEventView;
use App\Livewire\Student\News\StudentNews;
use App\Livewire\Student\News\StudentNewsView;
use App\Livewire\Student\Profile\StudentProfile;
use App\Livewire\Student\StudentDashboard;
// use App\Models\AssignSubject;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/admin', Dashboard);
// Route::get('/staff', StaffDashboard::class)->name('staff.dashboard');
// Route::get('/staff-login', StaffLogin::class)->name('staff.staff-login');
// Route::get('/student', StudentDashboard::class)->name('student.dashboard');

Route::prefix('/')->group(function () {
    Route::get('/', FrontendIndex::class)->name('index');
    Route::get('contact', FrontendContact::class)->name('contact');
    Route::get('about', FrontendAbout::class)->name('about');
    Route::get('academics', FrontendAcademics::class)->name('academics');
    Route::get('service', FrontendService::class)->name('service');
    Route::get('admission', FrontendAdmission::class)->name('admission');
    Route::get('gallery', FrontendGallery::class)->name('gallery');
    Route::get('event', FrontendEvent::class)->name('event');
    Route::get('events/view/{event}', FrontendEventRead::class)->name('event_read');
    Route::get('guideline', FrontendGuideline::class)->name('guideline');
    Route::get('news', FrontendNews::class)->name('news');
    Route::get('news/view/{news}', FrontendNewsRead::class)->name('news_read');
});

Route::middleware('guest')->prefix('admin')->group(function () {

    Route::get('/login', AdminLogin::class)->name('admin_login');
    Route::get('/forget-password', AdminForget::class)->name('admin_forget_password');
    Route::get('/reset-password/{token}/{email}', AdminReset::class)->name('admin_reset_password');
});



Route::middleware('admin')->prefix('admin')->group(function () {
    Route::get('/dashboard', AdminDashboard::class)->name('admin_dashboard');
    Route::get('/', AdminDashboard::class)->name('admin');
    Route::get('/subject-create', CreateSubject::class)->name('admin_subject_create');
    Route::get('/subject', AllSubject::class)->name('admin_subject');
    Route::get('/subject/edit/{subject}', EditSubject::class)->name('admin_subject_edit');
    Route::get('/class', AllClass::class)->name('admin_class');
    Route::get('/class/create', CreateClass::class)->name('admin_class_create');
    Route::get('/class/edit/{class}', EditClass::class)->name('admin_class_edit');
    Route::get('/assign/subject/create', CreateAssignSubject::class)->name('admin_assign_subject_create');
    Route::get('/assign/subject/edit/{assignSubject}', EditAssignSubject::class)->name('admin_assign_subject_edit');
    Route::get('/assign/subject', AllAssignSubject::class)->name('admin_assign_subject');
    Route::get('/assignment', AllAssign::class)->name('admin_assignment');
    Route::get('/assignment/create', CreateAssign::class)->name('admin_assignment_create');
    Route::get('/event', EventList::class)->name('admin_event_list');
    Route::get('/event/create', EventCreate::class)->name('admin_event_create');
    Route::get('/event/edit/{event}', EventEdit::class)->name('admin_event_edit');
    Route::get('/event/view/{event}', EventView::class)->name('admin_event_view');
    Route::get('/news', NewsList::class)->name('admin_news');
    Route::get('/news/create', CreateNews::class)->name('admin_news_create');
    Route::get('/news/edit/{news}', EditNews::class)->name('admin_news_edit');
    Route::get('/news/view/{news}', ViewNews::class)->name('admin_news_view');
    Route::get('gallery', GallaryList::class)->name('admin_gallery');
    Route::get('gallery/create', GallaryCreate::class)->name('admin_gallery_create');
    Route::get('gallery/edit/{gallery}', GallaryEdit::class)->name('admin_gallery_edit');
    Route::get('contact', ListContact::class)->name('admin_contact');
    Route::get('contact/view/{contact}', ViewContact::class)->name('admin_contact_view');
    Route::get('staff', AdStaffList::class)->name('admin_staff_list');
    Route::get('staff/view/{staff}', AdStaffView::class)->name('admin_staff_view');
    Route::get('staff/edit/{staff}', AdStaffEdit::class)->name('admin_staff_edit');
    Route::get('student', AdStudentList::class)->name('admin_student_list');
    Route::get('student/view/{student}', AdStudentView::class)->name('admin_student_view');
    Route::get('student/edit/{student}', AdStudentEdit::class)->name('admin_student_edit');
    Route::get('profile', AdminProfile::class)->name('admin_profile');
    Route::get('change/password', AdminChangePassword::class)->name('admin_change_password');
    Route::get('admission', AdAdmission::class)->name('admin_admission');
    Route::get('admission/view/{admission}', AdAdmissionView::class)->name('admin_admission_view');
});

Route::middleware('guest')->prefix('staff')->group(function () {
    Route::get('register', StaffRegister::class)->name('staff_register');
    Route::get('login', StaffLogin::class)->name('staff_login');
    Route::get('forget', StaffForget::class)->name('staff_forget_password');
    Route::get('reset-password/{token}/{email}', StaffReset::class)->name('staff_reset_password');
});



Route::middleware('staff')->prefix('staff')->group(function () {
    Route::get('/', StaffDashboard::class)->name('staff');
    Route::get('dashboard', StaffDashboard::class)->name('staff_dashboard');
    Route::get('assignment', StaffAssignmentList::class)->name('staff_assignment');
    Route::get('assignment/create', StaffAssignmentCreate::class)->name('staff_assignment_create');
    Route::get('assignment/edit/{assignment}', StaffAssignmentEdit::class)->name('staff_assignment_edit');
    Route::get('assignment/submitted', StaffAssignSubmit::class)->name('staff_assignment_submit');
    Route::get('news', StaffNews::class)->name('staff_news');
    Route::get('news/view/{news}',StaffNewsView::class)->name('staff_news_view');
    Route::get('event', StaffEvent::class)->name('staff_event');
    Route::get('event/view/{event}', StaffEventView::class)->name('staff_event_view');
    Route::get('profile', StaffProfile::class)->name('staff_profile');

});


Route::middleware('guest')->prefix('student')->group(function () {
    Route::get('register', StudentRegister::class)->name('student_register');
    Route::get('login', StudentLogin::class)->name('student_login');
    Route::get('forget', StudentForget::class)->name('student_forget_password');
    Route::get('reset-password/{token}/{email}', StudentReset::class)->name('student_reset_password');
});
Route::middleware('student')->prefix('student')->group(function () {
    Route::get('/', StudentDashboard::class)->name('student');
    Route::get('dashboard', StudentDashboard::class)->name('student_dashboard');
    Route::get('assignment', StudentAssignList::class)->name('student_assignment');
    Route::get('assignment/submit', StudentAssignSubmitList::class)->name('student_assignment_submit');
    Route::get('assignment/submit/{assignment}', StudentAssignSubmit::class)->name('student_assignment_submit_create');
    Route::get('assignment/submit/edit/{assignment}', StudentAssignSubmitEdit::class)->name('student_assignment_submit_edit');
    Route::get('news', StudentNews::class)->name('student_news');
    Route::get('news/view/{news}', StudentNewsView::class)->name('student_news_view');
    Route::get('event', StudentEvent::class)->name('student_event');
    Route::get('event/view/{event}', StudentEventView::class)->name('student_event_view');
    Route::get('profile', StudentProfile::class)->name('student_profile');

});