   <div class="col-md-2"></div>
    <div class="col-md-8">
    <?php foreach ($matches as $m): ?>
    <h2><?php echo $m->map; ?></h2>
    <table class="table">
        <tr>
            <td width="50%"><h1>CT: <?php echo $m->counter_terrorist; ?></h1></td>
            <td width="50%"><h1>T: <?php echo $m->terrorist; ?></h1></td>
        </tr>
    </table>
    <table class="table table-hover">
      <tr>
        <th width="15%">Alias</th>
        <th width="15%">Kills</th>
        <th width="15%">Deaths</th>
        <th width="10%"></th>
        <th width="15%">Alias</th>
        <th width="15%">Kills</th>
        <th width="15%">Deaths</th>
      </tr>
      <?php endforeach; ?>
      <?php
      /*
      foreach ($names as $row)
      {
          echo '<tr>';
          echo '<td><a href="profile/detail/' . $row->profile_id . '">' . $row->aliases . '</a></td>';
          echo '<td>' . $row->kills . '</td>';
          echo '<td>' . $row->deaths . '</td>';
          echo '<td>' . $row->ratio . '</td>';
          echo '</tr>';
      }*/
      ?>
    </table>
    </div>
    <div class="col-md-2"></div>
