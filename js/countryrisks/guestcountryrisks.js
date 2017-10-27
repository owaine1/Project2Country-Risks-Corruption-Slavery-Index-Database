console.log('loaded');

$(document).ready(setup_guestcountryrisks);

function setup_guestcountryrisks(){
    console.log('Inside setup');
    // need to create file show_countryrisks.php???
$.get('backend/manage_countryrisks/show_guestcountryrisks.php').done(show_guestcountryrisks).fail(blow_up);
}

function show_guestcountryrisks(data){
  console.log('Inside show_countryrisks');
  data = JSON.parse(data); // turns string of characters into json objects
  console.log(data);

  for (var counter =0; counter < data.length; counter++){
    console.log(data[counter].Country);
    var tr = $('<tr>'); //create empty table row

    var td = $('<td>'); //make first td
    td.text(data[counter].country_id); // add name of db
    tr.append(td); // add td to row

    var td = $('<td>'); //make first td
    td.text(data[counter].Country); // add name of db
    tr.append(td); // add td to row

    var td = $('<td>');
    td.text(data[counter].Band);
    tr.append(td);

    var td = $('<td>');
    td.text(data[counter].Confidence);
    tr.append(td);

    var td = $('<td>');
    td.text(data[counter].Social_Compliance_Risk_Index);
    tr.append(td);

    $('.table tbody').append(tr);
  }
}
function blow_up(data){
    console.log('oops...');
    console.log(data);
}
