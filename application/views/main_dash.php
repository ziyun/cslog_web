   <div class="col-md-2"></div>
    <div class="col-md-8">
    <table class="table table-hover">
      <tr>
        <th class="text-left" width="40%">Alias</th>
        <th class="text-center" width="20%">Kills</th>
        <th class="text-center" width="20%">Deaths</th>
        <th class="text-center" width="20%">Ratio</th>
      </tr>
      <?php
      foreach ($names as $row)
      {
          echo '<tr>';
          echo '<td class="text-left"><a href="profile/detail/' . $row->profile_id . '">' . $row->aliases . '</a></td>';
          echo '<td class="text-center">' . $row->kills . '</td>';
          echo '<td class="text-center">' . $row->deaths . '</td>';
          echo '<td class="text-center">' . $row->ratio . '</td>';
          echo '</tr>';
      }
      ?>
    </table>
    </div>
    <div class="col-md-2"></div>
