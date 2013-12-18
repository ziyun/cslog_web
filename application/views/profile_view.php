<!DOCTYPE html>
<html>
  <head>
    <title>Player Detail</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/cslog/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="col-md-2"></div>
    <div class="col-md-8">
    <p>Headshots: 
      <?php 
        echo $headshots; 
      ?>
    </p>
    <table class="table">
      <tr>
        <th>Hitbox</th>
        <th>Count</th>
      </tr>
      <?php
      foreach ($hitgroups as $row)
      {
        echo '<tr>';
        echo '<td>' . $row->hitgroup . '</td>';
        echo '<td>' . $row->count . '</td>';
        echo '</tr>';
      }
      ?>
    </table>
    </div>
    <div class="col-md-2"></div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>
