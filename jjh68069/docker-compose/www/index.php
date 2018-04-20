<html>
 <head>
  <title>Docker Compose</title>

  <meta charset="utf-8"> 

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
    <?php echo "<h1>Welcome to Jason's docker-compose project.</h1>"; ?>
    <?php
    $conn = mysqli_connect('db', 'user', 'test', "myDb");
    $query = 'SELECT * From Messages';
    $result = mysqli_query($conn, $query);
    echo '<table class="table table-striped">';
    echo '<tr><th>Message from database:</th></tr>';
    echo '<tr>';
    echo '<td>hello from DB container</td>';    
    echo '</tr>';
    echo '</table>';
    mysqli_close($conn);
    ?>
    </div>
</body>
</html>
