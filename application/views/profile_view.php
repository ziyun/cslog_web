   <div class="col-md-2"></div>
    <div class="col-md-8">
     <?php
     if (count($aliases) >= 1)
     {
         echo '<h1>' . $aliases[0]->alias . '</h1>';
         for ($i = 1; $i < count($aliases); $i++)
         {
             echo '<p>'.$aliases[$i]->aliase.'</p>';
         }
     }
     ?>
     <table class="table">
      <tr>
       <th class="text-left" width="30%">Weapon</th>
       <th class="text-center" width="17.5%">Damage</th>
       <th class="text-center" width="17.5%">Armor Damage</th>
       <th class="text-center" width="17.5%">Total Damage</th>
       <th class="text-center" width="17.5%">Headshots</th>
      </tr>
      <?php
      foreach ($weapon_performance as $row)
      {
        echo '<tr>';
        echo '<td class="text-left">' . $row->weapon . '</td>';
        echo '<td class="text-center">' . $row->damage . '</td>';
        echo '<td class="text-center">' . $row->damage_armor . '</td>';
        echo '<td class="text-center">' . $row->total_damage . '</td>';
        echo '<td class="text-center">' . $row->headshots . '</td>';
        echo '</tr>';
      }
      ?>
      <tr class="success">
       <th/>
       <th/>
       <th/>
       <th class="text-center">TOTAL:</th>
       <th class="text-center"><?php echo $headshots; ?></th>
      </tr>
     </table>
     <table class="table">
      <tr>
        <th class="text-center" width="50%">Hitbox</th>
        <th class="text-center">Count</th>
      </tr>
      <?php
      foreach ($hitgroups as $row)
      {
        echo '<tr>';
        echo '<td class="text-center">' . $row->hitgroup . '</td>';
        echo '<td class="text-center">' . $row->count . '</td>';
        echo '</tr>';
      }
      ?>
     </table>
     <table class="table">
      <tr>
       <th width="40%">Map</th>
       <th class="text-center" width="20%">Total Kills</th>
       <th class="text-center" width="20%">Count</th>
       <th class="text-center" width="20%">Ratio</th>
      </tr>
      <?php
      foreach ($map_performance as $row)
      {
        echo '<tr>';
        echo '<td>'.$row->map.'</td>';
        echo '<td class="text-center">'.$row->total_kills.'</td>';
        echo '<td class="text-center">'.$row->map_count.'</td>';
        echo '<td class="text-center">'.$row->ratio.'</td>';
        echo '</tr>';
       }
       ?>
     </table>
    </div>
    <div class="col-md-2"></div>
