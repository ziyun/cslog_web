<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/cslog/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    
    <nav class="navbar navbar-default" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Ambi Cstrike</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="#">Players</a></li>
          <li><a href="#">Matches</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Link</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </nav>
    <div class="col-md-2"></div>
    <div class="col-md-8">
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
    </div>
    <div class="col-md-2"></div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
