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
