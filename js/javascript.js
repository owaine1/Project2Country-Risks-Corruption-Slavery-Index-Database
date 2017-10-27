console.log('loaded');

$(document).ready(setup);

function setup() {
  console.log('Inside setup');
  $('#inside').hide();
  $('#login').click(do_login); // TODO to press enter will log in
  // below right lines but can't get to work https://stackoverflow.com/questions/155188/trigger-a-button-click-with-javascript-on-the-enter-key-in-a-text-box/155263#155263
  $('#logout').click(do_logout);
  $('.restrictedAdmin').hide();
  $('.restrictedContrib').hide();
  $('.restrictedGuest').hide();

  //check_backend();
}

function do_login() {
  console.log('Inside do_login');
  var user = $('#username').val();
  var pass = $('#password').val();

  var signin_creds = {
    user: user,
    pass: pass
  };
  $.get('backend/admin/login.php', signin_creds).done(logged_in);
}

function logged_in(data) {
  console.log('Inside logged_in');
  data = JSON.parse(data);
  console.log(data);

  if (data.logged_in == true) {
    $('#outside').slideUp(800);
    $('#inside').slideDown(800);
  } else {
    $('message').text('Sorry you must be logged in');
  }
  if (data.role == 'admin') {
    $('.restrictedAdmin').show();
  }
  if (data.role == 'contributor') {
    $('.restrictedContrib').show();
  }
  if (data.role == 'guest') {
    $('.restrictedGuest').show();
  }
}

function do_logout() {
  console.log('Inside logged_out');
  $.get('backend/admin/logout.php').done(logged_out).fail(blow_up);
}

function logged_out(data) {
  console.log('Inside logged_out');
  console.log(data);
  // window.location = 'index.php'; // was this
  document.location.href = "index.php"; // redirect to homepage

}


function blow_up(data) {
  console.log('oops...');
  console.log(data);
}
