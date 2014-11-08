<main role="main">
  <section class="content">
    <?php
      if($results) {
        echo '<h1>';
          if($itemCount == 0) {
                echo l('no-result');
              }
              elseif($itemCount == 1) {
                echo $itemCount , " ", l('result');
              }
              else {
                echo $itemCount , " ", l('results');
              }
              echo  " ", l('for'), ' “' , $query , '”</h1>';
      } ?>
      <?php if($results->count() != 0): ?>
      <ul class="results">
        <?php foreach($results as $result): ?>
        <li>
          <h2><a href="<?php echo $result->url() ?>"><?php echo $result->title()->html() ?></a></h2>
          <div class="meta">
            <?php snippet('date', array('page' => $result)); ?>
            <?php snippet('tags', array('page' => $result)); ?>
          </div>
        </li>
        <?php endforeach ?>
      </ul>
      <?php endif ?>
      <?php if($pagination->hasPages()): //?>
        <? snippet('prev-next', array('page' => $pagination)); ?>
      <?php endif ?>
    </section>
  </main>
<?php snippet('footer') ?>
