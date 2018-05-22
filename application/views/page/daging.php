<div class="wrapper row3">
  <main class="hoc container clear"> 

    <div class="sectiontitle">
      <h6 class="heading">Donec tortor eget mauris sagittis</h6>
      <p>Convallis morbi eget leo elit praesent at libero et arcu</p>
    </div>
    <div class="group">
      <div class="one_half first"><img class="inspace-15 borderedbox" src="<?php echo base_url('assets/images/demo/474x356.png') ?>" alt=""></div>
      <div class="one_half">
        <ul class="nospace group inspace-15">
          <?php 
                foreach ($daging->result() as $in) {
              ?>
          <li class="one_half first btmspace-50">
            <article>
              <h6 class="heading"><a href="#"><?php echo $in->judul ?></a></h6>
              <p class="nospace"><?php echo $in->deskripsi ?></p>
              <br>
              <a href="#" class="btn btn-info">Selengkapnya</a>
            </article>
          </li>
           <?php
                    }
                 ?> 
        </ul>
      </div>
    </div>
    <div class="clear"></div>
  </main>
</div>