<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <table class="table">
      <tr>
        <th>Alias</th>
        <th>Kills</th>
        <th>Deaths</th>
        <th>Ratio</th>
      </tr>
      <?php
      foreach ($names as $row)
      {
          echo '<tr>';
          echo '<td><a href="profile/detail/' . $row->profile_id . '">' . $row->aliases . '</a></td>';
          echo '<td>' . $row->kills . '</td>';
          echo '<td>' . $row->deaths . '</td>';
          echo '<td>' . $row->ratio . '</td>';
          echo '</tr>';
      }
      ?>
    </table>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>