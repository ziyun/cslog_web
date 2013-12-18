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
