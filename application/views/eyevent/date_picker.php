<style>
.down-r-vent img {
    height: 100%;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%);
}
.rx span {
    font-weight: 600;
}
</style>
<div class="container eyv-r mt-10">
    <div class="down-r-vent">
    <h4>Lihat Berdasarkan Tanggal</h4>
        <div class="kalender mt-20">
            <div id="z"></div>
            <!-- <input type="text" id="d" /> -->
            <button class="btn-white-g" type="button" id="btn-date-jadwal">Lihat</button>
        </div>
    </div>
    <div class="container down-r-vent mt-30">
        <div class="fl-l">
            <h4>BERITA TERBARU</h4>
        </div>
        <div class="fl-r bcd">
            <a href="<?= base_url();?>eyenews">
                <span>Berita Lainnya</span>
                <i class="material-icons">keyboard_arrow_right</i>
            </a>
        </div>
        <div class="pd">
            <?php 
            foreach($eyenews_main as $terbaru){
            ?>
            <div>
            <a href="<?php echo base_url(); ?>eyenews/detail/<?= $terbaru['url'];?>" class="container">    
            <div class="container he">
                <div style="width:100px; height:100px; overflow:hidden; position:relative;" class="container">
                    <img src="<?php echo imgUrl(); ?>systems/eyenews_storage/<?= $terbaru['thumb1']; ?>" alt="">
                </div>
                    <div class="container rx">
                            <span><?=$terbaru['title'];?></span>
                        <div class="rr">
                            <span>
                                <?php
                                $date       =  new DateTime($terbaru['createon']);
                                $tanggal    = date_format($date,"Y-m-d H:i:s");

                                echo relative_time($tanggal) . ' lalu - '.$terbaru['news_view'].' views';
                                ?>                                          
                            </span>
                        </div>
                    </div>
                    </div>
                    </a>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
    <div class="container eyv-r fl-r">
    <div class="d-r-v container" id="sidebar" style="background-color: white; width: 450px; float: left;" >
        <div class="fl-l">
            <h4 style="margin-top: 0px;">VIDEO</h4>
        </div>
        <div class="fl-r bcd" style="top: 9px;">
            <a href="">
                <span>Video Lainnya</span>
                <i class="material-icons">keyboard_arrow_right</i>
            </a>
        </div>
        <div class="pd">
            <?php 
            foreach($video_eyetube as $newtube){
            ?>
            <div>
                <div class="container h105" style="height: 100px;">
                    <a href="<?php echo base_url(); ?>eyetube/detail/<?= $newtube['url'];?>" class="container">
                        <img src="<?php echo MEVID.$newtube['thumb']; ?>" alt="">
                    <div class="drn">
                        <span></span>
                    </div>
                    <div class="container rv">
                        
                            <span style="margin-top:7px;"><?= $newtube['title']; ?></span>
                        
                        <div class="rr">
                            <span>
                                <?php
                                    $date       =  new DateTime($newtube['createon']);
                                    $tanggal    = date_format($date,"Y-m-d H:i:s");
                                    echo relative_time($tanggal) . ' ago - '.$newtube['tube_view'].' views';                        
                                ?>                                          
                            </span>
                        </div>
                    </div>
                </a>
                </div>                              
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $("#sidebar").sticky({topSpacing:60, bottomSpacing:0});
    });
</script>