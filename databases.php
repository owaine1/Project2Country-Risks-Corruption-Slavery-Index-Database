<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>php_backend</title>
  <link rel="icon" href="https://www.codester.com/static/uploads/categories/10/icon.png">

  <!-- stylesheets-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">

  <!-- javscript-->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/db/show_db.js" charset="utf-8"></script>
  <script src="js/db/delete_db.js" charset="utf-8"></script>
  <script src="js/db/create_db.js" charset="utf-8"></script>
  <script src="js/db/databases.js" charset="utf-8"></script>
</head>
<body class="container">
  <div class="jumbotron">
    <h1>Manage Databases</h1>
    <p class="alert alert-danger">WARNING - DO NOT DEPLOY!!!</p>
  </div>
  <input id="db_name" class="form-control" type="text">
  <button id="create_db" class="btn btn-primary">create db</button>

<table class="table">
  <thead>
  <tr>
    <th>database name</th>
    <th></th>
  </tr>
  </thead>
  <tbody>
    <tr>
      <td>test_database</td>
      <td><button id="test_database">delete</button></td>
    </tr>
  </tbody>
  <tbody>
    <tr>
      <td>test_database</td>
      <td><button id="test_database">delete</button></td>
    </tr>
  </tbody>
</table>
</body>

</html>