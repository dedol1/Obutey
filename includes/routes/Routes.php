<?php

Route::set('', function() {
      Index::CreateView('index');

});

Route::set('index.php', function() {
      Index::CreateView('index');

});

Route::set('pages', function() {
      dashboard::CreateView('pages/dashboard');
      //echo "contact-us";

});

Route::set('join', function() {
      register::CreateView('register');
      //echo "contact-us";

});

Route::set('login', function() {
      login::CreateView('login');
      //echo "contact-us";

});
Route::set('logout', function() {
      session_destroy();
    header('location: index.php');
      // logout::CreateView('index');
      //echo "contact-us";

});



Route::set('about-us', function() {
      AboutUs::CreateView('AboutUs');
      // AboutUs::test();

});

Route::set('contact-us', function() {
      ContactUs::CreateView('ContactUs');
      //echo "contact-us";

});

Route::set('404-Not-Found', function() {
      model404::CreateView('model404');
      //echo "404-Not-Found";

});
?>
