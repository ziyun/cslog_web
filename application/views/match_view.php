<div class="col-md-2"></div>
<div class="col-md-8">
    <?php foreach ($matches as $m): ?>
        <h2><?php echo $m->map; ?></h2>
        <div class="row">
            <div class="col-md-5"><h1>CT: <?php echo $m->counter_terrorist; ?></h1></div>
            <div class="col-md-2"></div>
            <div class="col-md-5"><h1>T: <?php echo $m->terrorist; ?></h1></div>
        </div>
        <div class="row">
            <div class="col-md-5">
            <?php for ($i = 0; $i < 2; $i++): ?>
                <div class="row">
                <div class="col-md-4 text-left"><strong>Alias</strong></div>
                <div class="col-md-4 text-center"><strong>Kills</strong></div>
                <div class="col-md-4 text-center"><strong>Deaths</strong></div>
                </div>
                <?php foreach ($match_info[$m->match_id] as $mi): ?>
                    <?php if ($mi->team == $i): ?>
                        <div class="row">
                        <div class="col-md-4 text-left"><?php echo $mi->aliases; ?></div>
                        <div class="col-md-4 text-center"><?php echo $mi->kills; ?></div>
                        <div class="col-md-4 text-center"><?php echo $mi->deaths; ?></div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
                <?php if ($i == 0): ?>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-5">
                <?php endif; ?>
            <?php endfor; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<div class="col-md-2"></div>
