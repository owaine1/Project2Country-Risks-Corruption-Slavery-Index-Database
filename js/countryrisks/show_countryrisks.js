console.log('loaded');

$(document).ready(setup_countryrisks);

function setup_countryrisks(){
    console.log('Inside setup');
    // need to create file show_countryrisks.php???
$.get('backend/manage_countryrisks/show_countryrisks.php').done(show_countryrisks).fail(blow_up);
}

function show_countryrisks(data){
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

    var td = $('<td>');
    td.text(data[counter].Social_Vulnerability_Risk_Index_40);
    tr.append(td);

    var td = $('<td>');
    td.text(data[counter].Social_Prevalence_Risk_Index_20);
    tr.append(td);

    var td = $('<td>');
    td.text(data[counter].Social_Protections_Risk_Index_40);
    tr.append(td);
// TODO is it possile (easily to stop edit and delete for guests???)
    td = $('<td>'); // make second td to hold edit button
    var btn = $('<button class = "edit btn-warning" id="' + data[counter].country_id + '">edit</button>');
    td.append(btn);
    tr.append(td);

    td = $('<td>'); // make second td to hold delete button
    var btn = $('<button class = "delete btn-danger" id="' + data[counter].country_id + '">delete</button>');
    td.append(btn);
    tr.append(td);

    $('.table tbody').append(tr);
  }
}
function blow_up(data){
    console.log('oops...');
    console.log(data);
}
