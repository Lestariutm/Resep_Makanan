
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <div class="sectiontitle">
      <h6 class="heading">Macam-Macam Resep Minuman</h6>
    </div>
    <div class="group latest">
      <?php 
                foreach ($drink->result() as $in) {
              ?>
      <article class="one_half first">
        <div class="excerpt">
          <h6 class="heading"><?php echo $in->judul_minuman ?></h6>
          <p><?php echo $in->deskripsi ?></p>
          <div class="clear">
            <footer class=" fl_right"><a href="#">Read More</a></footer>
          </div>
        </div>
      </article>
     <?php
                    }
                 ?> 
    </div>
  </section>
</div>

