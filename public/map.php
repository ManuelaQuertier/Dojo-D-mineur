<?php if (isset($arena)) : ?>
    <div class="map" style="--tiles-number: <?= $arena->getSize() ?>">
        <?php for ($y = 0; $y < $arena->getSize(); $y++) : ?>
            <?php for ($x = 0; $x < $arena->getSize(); $x++) : ?>
                <div>
                    <?php foreach ($arena->getBombs() as $bomb) : ?>
                        <?php if ($bomb->getX() === $x && $bomb->getY() === $y) : ?>
                            <img src="<?= $bomb->getImage(); ?>" alt="">
                        <?php endif; ?>
                    <?php endforeach; ?>
                    <?php foreach ($arena->getTiles() as $id => $tile) : ?>
                        <?php if ($tile->getX() === $x && $tile->getY() === $y) : 
                            $nbBomb= $tile->checkBomb($tile->getX(),$tile->getY(),$bombs)?>
                            
                            <img class="tile" src="<?= $tile->getImage($nbBomb); ?>" alt="">
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            <?php endfor; ?>
        <?php endfor; ?>
    </div>
<?php else : ?>
    <p>Add fighters in Arena</p>
<?php endif; ?>