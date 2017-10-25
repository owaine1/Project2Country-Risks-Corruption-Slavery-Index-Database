console.log('loaded');

$(document).ready(setup);

function setup(){
    console.log('Inside setup');
$.get('backend/manage_users/show_users.php').done(show_user).fail(blow_up);
}

function show_user(data){
  console.log('Inside show_user');
  data = JSON.parse(data); // turns string of characters into json objects
  console.log(data);

  for (var counter =0; counter < data.length; counter++){
    console.log(data[counter].user_name);
    var tr = $('<tr>'); //create empty table row

    var td = $('<td>'); //make first td
    td.text(data[counter].user_id); // add name of db
    tr.append(td); // add td to row

    var td = $('<td>'); //make first td
    td.text(data[counter].user_name); // add name of db
    tr.append(td); // add td to row

    var td = $('<td>'); //make first td
    td.text(data[counter].role); // add name of db
    tr.append(td); // add td to row

    td = $('<td>'); // make second td to hold edit button
    var btn = '<button class = "edit btn-warning" id="edit_' + data[counter].user_id + '">edit</button>';
    td.append(btn);
    tr.append(td);

    td = $('<td>'); // make second td to hold delete button
    var btn = '<button class = "delete btn-danger" id="delete_' + data[counter].user_id + '">delete</button>';
    td.append(btn);
    tr.append(td);

    $('.table tbody').append(tr);
  }
  $('.edit').click(edit_users);
  $('.delete').click(delete_users);

}
function edit_users(){
  console.log('Inside edit_users');
  console.log($(this));
  // TODO wire this up to edit php backend
}

function delete_users(){
  console.log('Inside delete_users');
  console.log($(this));
// TODO wire this up to delete php backend
}





function blow_up(data){
    console.log('oops...');
    console.log(data);
}
