<style>
	.t-20 td {
    top: 0px;
    position: relative;
	}
	.box-pertandingan img {
    width: 100px;
    height: 100px;
    margin: 0 auto;
    display: block;
	}
	.listmatch:hover{background-color:#fafafa}
	.live_pert{position:inherit;background-color:#ffa7265c;padding:5px;margin: 19px;border-radius:15px;width:200px;}
	.liga_name{background-color:#74747417;}
	.jadwallistresult{font-size:10px;font-weight:500;}
	.sjrh{
		font-size: 1.2em;
		font-weight: 500;
		text-transform: uppercase;
		color: #1d3d8e;
	}
	.m-l-158{
		font-size: .9em;
		text-align: left !important;
		padding-top: 40px;
	}
	.class-W{
		background-color:#1dd163;
		border-radius:15px;
		font-weight:bold;
		padding:5px 0px 5px 0px;
		width:30px;
		margin:-6px -6px 9px -6px;
	}
	.class-L{
		background-color:#d81c1c;
		border-radius:15px;
		font-weight:bold;
		padding:5px 0px 5px 0px;
		width:30px;
		margin:-6px -6px 9px -6px;
	}
	.class-D{
		background-color:#d5b41b;
		border-radius:15px;
		font-weight:bold;
		padding:5px 0px 5px 0px;
		width:30px;
		margin:-6px -6px 9px -6px;
	}
	.class-W:hover{
		background-color:#00ab42;
	}
	.class-L:hover{
		background-color:#a00000;
	}
	.class-D:hover{
		background-color:#c7a400;
	}
	.div-W{width:20px;background-color:#1dd163;padding:3px 0px 3px 0px;border-radius:50px;font-weight:bold;font-size:12px;}
	.div-D{width:20px;background-color:#d5b41b;padding:3px 0px 3px 0px;border-radius:50px;font-weight:bold;font-size:12px}
	.div-L{width:20px;background-color:#d81c1c;padding:3px 0px 3px 0px;border-radius:50px;font-weight:bold;font-size:12px}
	.div-W:hover{background-color:#00a942;}
	.div-D:hover{background-color:#af9000;}
	.div-L:hover{background-color:#bf0000;}
	.listmatch:hover{
		background-color:#fdd79f38;
		}
	.score_style_a{font-weight:bold;font-size:14px;color:#CCC;border:2px solid;border-color:#CCC;border-radius:12px;background-color:#000000bf;padding:10px 5px 10px 5px;width:20px;margin-left:10px;}
	.score_style_b{font-weight:bold;font-size:14px;color:#CCC;border:2px solid;border-color:#CCC;border-radius:12px;background-color:#000000bf;padding:10px 5px 10px 5px;width:20px;margin-right:10px;}
	.score_tim_a{width:35px;border-radius:10px;border:2px solid;border-color:#ffedd2;position:absolute;right:50px;top:35px;font-size:40px;color:#CCC;background-color:#000000bf;}
	.score_tim_b{width:35px;border-radius:10px;border:2px solid;border-color:#ffedd2;position:absolute;left:50px;top:35px;font-size:40px;color:#CCC;background-color:#000000bf;}
	
	span.g-stats{font-size: 1.2em; font-weight: 600;}
	/* .p-stats{background-color:#e2e2e2;}
	.p-stats:hover{background-color:#e2e2e2;}
	.w-stats{background-color:#daf8d2;}
	.w-stats:hover{background-color:#1cc95c;}
	.d-stats{background-color:#f7efd6;}
	.d-stats:hover{background-color:#d5b41b;}
	.l-stats{background-color:#efb9b969;}
	.l-stats:hover{background-color:#d81c1c;}
	.p-L_stats{background-color:#e2e2e2;}
	.w-L_stats{background-color:#b3f9a270;}
	.d-L_stats{background-color:#f4da884d;}
	.l-L_stats{background-color:#f8e2e2;}
	.goalm{background-color:#daf8d2;}
	.goalk{background-color:#f8e2e2;}
	.goalhm{background-color:#b0f9a2;}
	.goalhk{background-color:#e35e5e;}
	.goalak{background-color:#e63f3f;}
	.goalam{background-color:#87fa70;} */





</style>
<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
</div>
<div class="w-blue">
    <img src="<?php echo base_url()?>assets/img/segitiga-putih-01.png" alt="">
</div><div class="desktop">
    <div class="container">
        <div class="garis-banner over-in profile-pemain">
		<?php
			$r = $res->data;
			$players = $res->data->players;
			$official = $res->data->official;
			$cr = $res->data->careers;
			$gallery = $res->data->gallery;
		?>		
			<input type="hidden" class="hidden_title" value="<?php echo $r->id_club; ?>"/>
			<div class="left">
              
                <div class="box-img-radius">
                    <img src="<?php echo $r->url_logo ?>" alt="">                        
                </div>
            </div>
            <div class="right">
                <div class="t-30">
                    <h3>INFO</h3>
                    <table>
                        <tbody>
                            <tr>
                                <td>Nama Klub</td>
                                <td>: <?=$r->name?></td>
                            </tr>
                            <tr>
                                <td>Tanggal Berdiri</td>
                                <td>: <?=$r->establish_date?></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>: <?=strip_tags($r->address)?></td>
                            </tr>
                            <tr>
                                <td>Situs</td>
                                <td>: <?=$r->website?></td>
                            </tr>
							
                        </tbody>
                    </table>
                </div>
                <div class="t-30">
                    <h3><?=$r->competition?></h3>
                    <table>
                        <tbody>
                            <tr>
                                <td>Level Liga</td>
                                <td>: <?=$r->competition?></td>
                            </tr>
                            <tr>
                                <td>No. Telp</td>
                                <td>: <?=$r->phone?></td>
                            </tr>
							<tr>
                                <td>Fax</td>
                                <td>: <?=$r->fax?></td>
                            </tr>
                            <tr>
                                <td>Manajer</td>
                                <td>: <?=$r->manager?></td>
                            </tr>
							<tr>
                                <td>Pelatih</td>
                                <td>: <?=$r->coach?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="t-30 mt-53">
                    <table>
                        <tbody>
                            <tr>
                                <td style="width: 120px;">Jumlah Pemain</td>
                                <td>: <?=$r->number_of_player?> Pemain</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>: <?=$r->email?></td>
                            </tr>
                            <tr>
                                <td>Stadium</td>
                                <td>: <?=$r->stadium?></td>
                            </tr>
                            <tr>
                                <td>Panggilan Klub</td>
                                <td>: <?=$r->nickname?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="menu-2">
            <ul>
                <li class="klubtab active" onclick="openTab(event,'tabs-pemain')">Pemain</li>
                <li class="klubtab" onclick="openTab(event,'tabs-ofisial')">Ofisial</li>
                <li class="klubtab" onclick="openTab(event,'tabs-supporter')">Supporter</li>
            </ul>
        </div>
    </div>
    <div class="desktop">	
		<div class="center-desktop m-l-158">
			<h3 class="sjrh">Sejarah</h3>
			<p>
				<?=$r->description?>
			</p>
		</div>

			<div class="center-desktop m-0 maintab" id="tabs-pemain">
			
			<?php
			$no = 1;
			foreach($players as $p){		
			?>
				<div class="box-pemain">
					<div class="bg-pemain">
						<span><?=$p->back_number?></span>
						<h1><?=$p->name?></h1>
						<span><?=$p->position_a?></span>
					</div>
					<div class="img-pemain">
						<img src="<?=$p->url_pic?>" alt="">                
					</div>
					<table>
						<tbody>
							<tr>
								<td>Kewarganegaraan</td>
								<td><?=$p->nationality?></td>
							</tr>
							<tr>
								<td>Tgl Lahir</td>
								<td><?=$p->birth_date?></td>
							</tr>
							<tr>
								<td>Main</td>
								<td align="left">?</td>
							</tr>
						</tbody>
					</table>
					<a target="_blank" href="<?=$p->share_url?>" ><button class="btn-orange-2" type="button">Lihat Detail Pemain</button></a>
				</div><?php }?>                                      
				<div class="container banner-150 img-banner">
					<img class="lazy" src="<?php echo base_url()?>assets/img/banner-home.jpeg" alt="">
				</div>
		</div>
		
		<div class="center-desktop m-0 pd-t-100 maintab" style="display:none;" id="tabs-ofisial">
			<?php
			$no = 1;
			foreach($official as $o):?>
				<div class="box-pemain">
					<div class="bg-pemain">
						<span></span>
						<h1><?=$o->name?></h1>
						<span><?=$o->position?></span>
					</div>
					<div class="img-pemain">
						<img src="<?=$o->url_pic?>" alt="">                
					</div>
					<table>
						<tbody>
							<tr>
								<td>Kewarganegaraan</td>
								<td><?=$o->nationality?></td>
							</tr>
							<tr>
								<td>Tgl Lahir</td>
								<td><?=$o->birth_date?></td>
							</tr>
							<tr>
								<td>Lisensi</td>
								<td><?=$o->license?></td>
							</tr>
						</tbody>
					</table>
					<a target="_blank" href="<?=$o->share_url?>" ><button class="btn-orange-2" type="button">Lihat Detail Ofisial</button></a>
				</div><?php endforeach;?> 
				<div class="container banner-150 img-banner">
					<img class="lazy" src="<?php echo base_url()?>assets/img/banner-home.jpeg" alt="">
				</div>                                     
		</div>
		
		<div class="center-desktop m-0 pd-t-100 maintab" style="display:none;" id="tabs-supporter">
			<!-- <div style="color: grey;padding-top: 100px;padding-bottom: 100px;">Segera Hadir...</div> -->
			<div class="container comingsoon">
				<img src="<?=base_url()?>assets/img/ComingSoon.png" alt="">
			</div>
		</div>

		<div class="center-desktop m-0">
			<div class="et-content1">
					<?php
					if(!empty($get_result_klub)){
					?>
					<h3 class="h3-oranye" style=";margin-top: 24px;margin-bottom: -10px;width:445px;">Pertandingan <?=$r->name?> Sebelumnya</h3>
					<div class="border-box" style="    border: 1px solid #dcdcdc;margin-top: 22px; overflow-y: auto; height:499px;">
							<div id="result_club">
							<table class="table border-b" width="800px">
							<?php
								if(empty($get_result_klub)){
							?>
							<?php
								}
							else
								{
									foreach($get_result_klub as $row){
							?>
								<tbody>
									<tr class="listmatch">
										<td align="center"><?php
										if ($row['tim_a']==$club_id){
											if($row['score_a'] > $row['score_b'] ){
												$rowform="W";
												$titleform="WIN";
											}elseif($row['score_a'] < $row['score_b'] ){
												$rowform="L";
												$titleform="LOSE";
											}else{
												$rowform="D";
												$titleform="DRAW";
											}
										}
										elseif ($row['tim_b']==$club_id){
											if($row['score_a'] > $row['score_b'] ){
												$rowform="L";
												$titleform="LOSE";
											}elseif($row['score_a'] < $row['score_b'] ){
												$rowform="W";
												$titleform="WIN";
											}else{
												$rowform="D";
												$titleform="DRAW";
											}
										}
										echo "<div title='".$titleform."' align='center' class='div-".$rowform."'>".$rowform."</div>"; 
										?>
										<span class="jadwallistresult"><?=$row['jadwal_pertandingan']?></span>
										</td>
										<td class="tx-r">
										<a href="<?php 
                                                if(($row["liga_a"]=='Liga Lainnya') OR ($row["liga_a"]=='Liga International'))
                                                    {
                                                        $href_a="#no_detail_club_".$row["club_a"];
                                                    }
                                                else
                                                    {
                                                        $href_a=base_url()."eyeprofile/klub_detail/".$row["url_a"];
                                                    }
                                
                                					echo $href_a ?>">
										<span class="clb"><?=$row["club_a"]?></span></a></td>
										<td style="width: 20px;"><span class="i-l"><img style="margin-top: -10px;" class="lazy" src="<?=imgUrl()?>systems/club_logo/<?php print $row['logo_a']; ?>" alt=""></span></td>
										<td width="25">
											<div class="score_style_a" align="center"><?=$row["score_a"]?></div>
										</td>
										<td> X </td>
										<td width="25">	
											<div class="score_style_b" align="center"><?=$row["score_b"]?></div>
										</td>
										<td style="width: 20px;"><span class="i-r"><img style="margin-top: -10px;" class="lazy" src="<?=imgUrl()?>systems/club_logo/<?php print $row['logo_b']; ?>" alt=""></span></td>
										<td class="tx-l">
										<a href="<?php 
                                                if(($row["liga_b"]=='Liga Lainnya') OR ($row["liga_b"]=='Liga International'))
                                                    {
                                                        $href_b="#no_detail_club_".$row["club_b"];
                                                    }
                                                else
                                                    {
                                                        $href_b=base_url()."eyeprofile/klub_detail/".$row["url_b"];
                                                    }
                                
                                					echo $href_b ?>">
										<span class="clb"><?=$row["club_b"]?></a></span></td>
									</tr>
								</tbody>
							<?php
									} 
								}
							?>
							</table>
						</div>
                    </div>
					<?php }else{
					}
					?>
            </div>
				<?php
					if(empty($get_jadw_klub) AND empty($get_hasil_klub)){
					}
					else{
						if(count($get_jadw_klub) >= 1){
					?>
					<div class="w-40 pd-t-20" style="padding-top: 7px;"></style>
						<h3 style="margin: 17px 0px -10px 25px;">Pertandingan Terakhir <?=$r->name?></h3>
						<div class="container box-pertandingan" style="margin:23px 0px 46px 25px;width:440px;height: 500px;">
							<table style="margin-bottom: -4px !important;margin-right: 30px !important;">
								<tbody>
									<tr class="liga_name">
										<td colspan="3">
											<?php foreach($get_klub_detail as $row){ ?>
											<h4 style="font-weight: 600;font-size: 18px;margin:33px;"><?php echo strtoupper($row['competition'])?></h4>
											<?php } ?>
										</td>
									</tr>
									<tr align="center">
										<td colspan="3" style:"padding: 8px 8px 8px 6px;">
										<?php foreach($get_jadw_klub as $row){
												$datetime = new DateTime($row['jadwal_pertandingan']);
												if($datetime->format('l') == 'Monday'){
													$hari = 'Senin';
												}elseif($datetime->format('l') == 'Tuesday'){
													$hari = 'Selasa';
												}elseif($datetime->format('l') == 'Wednesday'){
													$hari = 'Rabu';
												}elseif($datetime->format('l') == 'Thursday'){
													$hari = 'Kamis';
												}elseif($datetime->format('l') == 'Friday'){
													$hari = 'Jumat';
												}elseif($datetime->format('l') == 'Saturday'){
													$hari = 'Sabtu';
												}elseif($datetime->format('l') == 'Sunday'){
													$hari = 'Minggu';
												}else{
													$hari = $datetime->format('l');
												}
											?>
											<span class="date-box-pertandingan" style="line-height: 1.3em;display: block;margin:23px 23px 46px 23px;font-weight:550;">
												<?php echo $hari.", ".$datetime->format('d M Y')?>
												<br><?php echo $datetime->format('H:i')." WIB";?>
												<br><?php echo $row['lokasi_pertandingan']?>
												<div class="live_pert"><?php echo $row['live_pertandingan']?></div>
											</span>
										</td>
									</tr>
									<tr class="t-20">
										<td width="40%">
											<!--<i class="material-icons i-l-pertandingan">keyboard_arrow_left</i>-->
											<img width="50" src="<?php echo imgUrl()?>systems/club_logo/<?php echo $row['logo_a']?>"> 
										</td>
										<td width="20%"></td>
										<td width="40%">
											<img  width="50" src="<?php echo imgUrl()?>systems/club_logo/<?php echo $row['logo_b']?>"> 
											<!--<i class="material-icons i-r-pertandingan">keyboard_arrow_right</i>-->
										</td>
									</tr>
									<tr>
										<td><strong><a href="<?=base_url()?>eyeprofile/klub_detail/<?=$row['url_a']?>"><?php echo $row['club_a'];?></a></strong></td>
										<td></td>
										<td><strong><a href="<?=base_url()?>eyeprofile/klub_detail/<?=$row['url_b']?>"><?php echo $row['club_b'];?></a></strong></td>
									</tr>
									<tr>
										<td>
											<table>
												<tr>
												<?php foreach($get_list_mh as $mh){
														$mhform=0;
														if ($mh['tim_a']==$club_id_a){
															if($mh['score_a'] > $mh['score_b'] ){
																$mhform="W";
															}elseif($mh['score_a'] < $mh['score_b'] ){
																$mhform="L";
															}else{
																$mhform="D";
															}
														}
														elseif ($mh['tim_b']==$club_id_a){
															if($mh['score_a'] > $mh['score_b'] ){
																$mhform="L";
															}elseif($mh['score_a'] < $mh['score_b'] ){
																$mhform="W";
															}else{
																$mhform="D";
															}
														}
													?>
													<td align="center" title="<?php echo $mh['club_a']." ".$mh['score_a']."-".$mh['score_b']." ".$mh['club_b'];?>" align="center">
														<div title="<?php echo $mh['club_a']." ".$mh['score_a']."-".$mh['score_b']." ".$mh['club_b'];?>" class="class-<?=$mhform;?>"><?=$mhform?></div>
													</td>
												<?php }
												?>
												</tr>
											</table>
										</td>
										<td>
										</td>
										<td>
											<table>
												<tr>
												<?php
												foreach($get_list_mv as $mv){
														$mvform="";
														if ($mv['tim_b']==$club_id_b){
															//echo $mv['score_a'].'/'.$mv['score_b'].'<br>';
															if($mv['score_a'] > $mv['score_b'] ){
																$mvform="L";
															}elseif($mv['score_a'] < $mv['score_b'] ){
																$mvform="W";
															}else{
																$mvform="D";
															}
														}
														elseif ($mv['tim_a']==$club_id_b){
															if($mv['score_a'] > $mv['score_b'] ){
																$mvform="W";
															}elseif($mv['score_a'] < $mv['score_b'] ){
																$mvform="L";
															}else{
																$mvform="D";
															}
														}
														?>
													<td align="center" title="<?php echo $mv['club_a']." ".$mv['score_a']."-".$mv['score_b']." ".$mv['club_b'];?>" align="center">
														<div title="<?php echo $mv['club_a']." ".$mv['score_a']."-".$mv['score_b']." ".$mv['club_b'];?>" class="class-<?=$mvform;?>"><?=$mvform?></div>
													</td>
												<?php }
												?>
												</tr>
											</table>								
										</td>
									</tr>
									<!--<tr class="t-20">
										<td width="40%" style="font-size: 2em;font-weight: bold;color: orange;">
											<?php // echo $row['score_a'];?>
										</td>
										<td width="20%" style="font-weight: 600;"></td>
										<td width="40%" style="font-size: 2em;font-weight: bold;color: orange;">
											<?php // echo $row['score_b']?>
										</td>
									</tr>-->
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
					<?php
						}else{
					?>
					<div class="w-40 pd-t-20" style="padding-top: 7px;"></style>
						<h3 style="margin: 17px 0px -10px 25px;">Pertandingan Terakhir <?=$r->name?></h3>
						<div class="container box-pertandingan" style="margin:23px 0px 0px 25px;width:440px; height:500px;">
							<table style="margin-bottom: -4px !important;margin-right: 30px !important;">
								<tbody>
									<tr class="liga_name">
										<td colspan="3">
											<?php foreach($get_klub_detail as $row){ ?>
											<h4 style="font-weight: 600;font-size: 18px;margin:33px;"><?php echo strtoupper($row['competition'])?></h4>
											<?php } ?>
										</td>
									</tr>
									<tr align="center">
										<td colspan="3" style:"padding: 8px 8px 8px 6px;">
										<?php foreach($get_hasil_klub as $row){
												$datetime = new DateTime($row['jadwal_pertandingan']);
												if($datetime->format('l') == 'Monday'){
													$hari = 'Senin';
												}elseif($datetime->format('l') == 'Tuesday'){
													$hari = 'Selasa';
												}elseif($datetime->format('l') == 'Wednesday'){
													$hari = 'Rabu';
												}elseif($datetime->format('l') == 'Thursday'){
													$hari = 'Kamis';
												}elseif($datetime->format('l') == 'Friday'){
													$hari = 'Jumat';
												}elseif($datetime->format('l') == 'Saturday'){
													$hari = 'Sabtu';
												}elseif($datetime->format('l') == 'Sunday'){
													$hari = 'Minggu';
												}else{
													$hari = $datetime->format('l');
												}
											?>
											<span class="date-box-pertandingan" style="line-height: 1.3em;display: block;margin:23px 23px 46px 23px;font-weight:550;">
												<?php echo $hari.", ".$datetime->format('d M Y')?>
												<br><?php echo $datetime->format('H:i')." WIB";?>
												<br><?php echo $row['lokasi_pertandingan']?>
											</span>
										</td>
									</tr>
									<tr class="t-20">
										<td width="40%">
											<!--<i class="material-icons i-l-pertandingan">keyboard_arrow_left</i>-->
											<img  width="50" src="<?php echo imgUrl()?>systems/club_logo/<?php echo $row['logo_a']?>"> 
										</td>
										<td width="20%"><div class="score_tim_a"><?php echo $row['score_a']?></div> <strong style="font-size:20px;">-</strong> <div class="score_tim_b"><?php echo $row['score_b']?></div></td>
										<td width="40%">
											<img  width="50" src="<?php echo imgUrl()?>systems/club_logo/<?php echo $row['logo_b']?>"> 
											<!--<i class="material-icons i-r-pertandingan">keyboard_arrow_right</i>-->
										</td>
									</tr>
									<tr>
										<td><strong><a href="<?=base_url()?>eyeprofile/klub_detail/<?=$row['url_a']?>"><?php echo $row['club_a'];?></a></strong></td>
										<td></td>
										<td><strong><a href="<?=base_url()?>eyeprofile/klub_detail/<?=$row['url_b']?>"><?php echo $row['club_b'];?></a></strong></td>
									</tr>
									<tr>
										<td>
											<table>
												<tr>
												<?php foreach($get_list_mh as $mh){
														$mhform=0;
														if ($mh['tim_a']==$club_id_a){
															if($mh['score_a'] > $mh['score_b'] ){
																$mhform="W";
															}elseif($mh['score_a'] < $mh['score_b'] ){
																$mhform="L";
															}else{
																$mhform="D";
															}
														}
														elseif ($mh['tim_b']==$club_id_a){
															if($mh['score_a'] > $mh['score_b'] ){
																$mhform="L";
															}elseif($mh['score_a'] < $mh['score_b'] ){
																$mhform="W";
															}else{
																$mhform="D";
															}
														}
													?>
													<td align="center" title="<?php echo $mh['club_a']." ".$mh['score_a']."-".$mh['score_b']." ".$mh['club_b'];?>" align="center">
														<div title="<?php echo $mh['club_a']." ".$mh['score_a']."-".$mh['score_b']." ".$mh['club_b'];?>" class="class-<?=$mhform;?>"><?=$mhform?></div>
													</td>
												<?php }
												?>
												</tr>
											</table>
										</td>
										<td>
										</td>
										<td>
											<table>
												<tr>
												<?php
												foreach($get_list_mv as $mv){
														$mvform="";
														if ($mv['tim_b']==$club_id_b){
															//echo $mv['score_a'].'/'.$mv['score_b'].'<br>';
															if($mv['score_a'] > $mv['score_b'] ){
																$mvform="L";
															}elseif($mv['score_a'] < $mv['score_b'] ){
																$mvform="W";
															}else{
																$mvform="D";
															}
														}
														elseif ($mv['tim_a']==$club_id_b){
															if($mv['score_a'] > $mv['score_b'] ){
																$mvform="W";
															}elseif($mv['score_a'] < $mv['score_b'] ){
																$mvform="L";
															}else{
																$mvform="D";
															}
														}
														?>
													<td align="center" title="<?php echo $mv['club_a']." ".$mv['score_a']."-".$mv['score_b']." ".$mv['club_b'];?>" align="center">
														<div title="<?php echo $mv['club_a']." ".$mv['score_a']."-".$mv['score_b']." ".$mv['club_b'];?>" class="class-<?=$mvform;?>"><?=$mvform?></div>
													</td>
												<?php }
												?>
												</tr>
											</table>								
										</td>
									</tr>
									<!--<tr class="t-20">
										<td width="40%" style="font-size: 2em;font-weight: bold;color: orange;">
											<?php // echo $row['score_a'];?>
										</td>
										<td width="20%" style="font-weight: 600;"></td>
										<td width="40%" style="font-size: 2em;font-weight: bold;color: orange;">
											<?php // echo $row['score_b']?>
										</td>
									</tr>-->
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
					<?php
						}
					}
				?>
			<!-- <div class="container banner-eyeprofile5 img-banner fl-r mt-10" style="height: unset; background-color: unset;">
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> -->
			<!-- EyesoccerDekstop 8#EyeprofileKlubSupporter336x280 -->
			<!-- <ins class="adsbygoogle"
				style="display:inline-block;width:336px;height:280px"
				data-ad-client="ca-pub-7635854626605122"
				data-ad-slot="7731736047"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script> -->
				<!-- <img src="../../assets/img/iklanbanner/banner 425x200 px-01.jpg" alt="Right ads"> -->
			<!-- </div> -->
			
			<div class="container">
			<?php $now=getdate();$tahun=$now['year']?>
			<?php
			if(empty($get_hasil_klub)){
							?>
							<?php
								}
							else
								{
							?>
							<h3 class="h3-oranye" style="margin-top: 24px;margin-bottom: -10px;width:445px;">Statistik <?=$r->name?> <?=$tahun?></h3>
							<div class="w-60 m-r-1 pd-t-20 formasi" style="width: 1062px;overflow: hidden;">
								<div class="container box-pertandingan" style="border-radius: 3px;overflow: hidden;">
									<table>
										<thead>
											<tr>
												<th class="p-L_stats" width="40%" align="center" title="Main">Main</th>
												<th class="w-L_stats" width="75" align="center" title="Menang (%Menang)">Menang</th>
												<th class="d-L_stats" width="75" align="center" title="Seri (%Seri)">Seri</th>		
												<th class="l-L_stats" width="75" align="center" title="Kalah (%Kalah)">Kalah</th>	
											</tr>
										</thead>
										<tbody>
											<tr>
												<?php 
												foreach($get_pwdl_stats as $stats)
												{
													$stats['play']=$stats['play_a']+$stats['play_b'];
													$stats['win']=$stats['win_a']+$stats['win_b'];
													$stats['draw']=$stats['draw_a']+$stats['draw_b'];
													$stats['lose']=$stats['lose_a']+$stats['lose_b'];
													$p_win=($stats['win']/$stats['play'])*100;
													$p_draw=($stats['draw']/$stats['play']*100);
													$p_lose=($stats['lose']/$stats['play'])*100;
												?>
												<td class="p-stats" align="center"><span class="g-stats"><?php echo $stats['play'];?>x</span>
												(<?=$stats['play_a']." Kandang & ".$stats['play_b']." Tandang";?>)</td>
												<td class="w-stats" align="center"><span class="g-stats"><?php echo $stats['win'];?>x</span>
												<strong style="font-size:16px;">(<?=number_format($p_win);?>%)</strong></br>
												<?=$stats['win_a']." Kandang & ".$stats['win_b']." Tandang";?></td>	
												<td class="d-stats" align="center"><span class="g-stats"><?php echo $stats['draw'];?>x</span>
												<strong style="font-size:16px;">(<?=number_format($p_draw);?>%)</strong></br>
												<?=$stats['draw_a']." Kandang & ".$stats['draw_b']." Tandang";?></td>
												<td class="l-stats" align="center"><span class="g-stats"><?php echo $stats['lose'];?>x</span>
												<strong style="font-size:16px;">(<?=number_format($p_lose);?>%)</strong></br>
												<?=$stats['lose_a']." Kandang & ".$stats['lose_b']." Tandang";?></td>
												<?php
												}
												?>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="w-60 m-r-1 pd-t-20 formasi" style="width: 1062px;overflow: hidden;">
								<div class="container box-pertandingan" style="border-radius: 3px;overflow: hidden;">
									<table>
										<thead>
											<tr>
												<?php 
												foreach($get_gkgt_stats as $gstats)
												{
													$goalm=$gstats['goalm_kandang']+$gstats['goalm_tandang'];
													$goalk=$gstats['goalk_kandang']+$gstats['goalk_tandang'];
												?>									
												<th class="goalm" align="center" title="Goal Memasukan (%GM)" style="border-right: 1px solid #dcdcdc;">Memasukan
													<table>
														<thead align="center">
														</br><span class="g-stats"><?=$goalm;?></span></br><strong>goal</strong>
														</thead>
													</table>
												</th>	
												<th class="goalk" align="center" title="Goal Kemasukan (%GK)">Kemasukan
													<table>
														<thead align="center">
														</br><span class="g-stats"><?=$goalk;?></span></br><strong>goal</strong>
														</thead>
													</table>
												</th>									
											</tr>
										</thead>
										<tbody>
											<tr>									
												<td align="center">
													<table>
														<tr>
															<td class="goalhm" align="center"><span class="g-stats"><?php echo $gstats['goalm_kandang'];?></span><strong>goal kandang</strong></td>
															<td class="goalam" align="center"><span class="g-stats"><?php echo $gstats['goalm_tandang'];?></span><strong>goal tandang</strong></td>
														</tr>
													</table>
												</td>	
												<td align="center">
													<table>
														<tr>
															<td class="goalhk" align="center"><span class="g-stats"><?php echo $gstats['goalk_kandang'];?></span><strong>goal kandang</strong></td>
															<td class="goalak" align="center"><span class="g-stats"><?php echo $gstats['goalk_tandang'];?></span><strong>goal tandang</strong></td>
														</tr>
													</table>
												</td>									
												<?php
												}
												?>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<?php
								}
							?>
			</div>
			</br>
			</br>
			</br>
			<h3 class="container h3-oranye" style="margin-top: 24px;margin-bottom: -10px;width:445px;">Prestasi Klub</h3>
				<div class="w-60 m-r-1 pd-t-20 formasi" style="width: 1062px;overflow: hidden;">
					<div class="container box-pertandingan">
						<table class="table table-stripped table-hover">
							
							<thead>
								<tr>
									<th>NO</th>
									<th>Bulan</th>
									<th>Tahun</th>
									<th>Turnamen</th>
									<th>peringkat</th>
									<th>pelatih</th>
								</tr>
							</thead>
							<tbody>
								
								<?php
									$no = 0 ;
									for($i= 0 ;$i <count($cr);$i++){
										$no++;
										echo '<tr>';
										echo '<td>'.$no.'</td>';
										echo '<td>'.$cr[$i]->month.'</td>';
										echo '<td>'.$cr[$i]->year.'</td>';
										echo '<td>'.$cr[$i]->tournament.'</td>';
										echo '<td>'.$cr[$i]->rank.'</td>';	
										echo '<td>'.$cr[$i]->coach.'</td>';
										echo '</tr>';
									}
								?>
								
							</tbody>
						</table>
					</div>
					<!-- <div class="box-bg" style="height:200px">
					
					
					</div> -->
				</div>
			<!-- <div class="container pd-b-50" style="padding-bottom: 100px;display:none;">
				<div id="em2Slide" class="carousel slide">
					<div role="listbox" class="carousel-inner">
						<div class="box item active" style="height: 225px;">
							<?php
							foreach ($products as $produk):
							?>					
							<div class="em-box">
								<h4><?=$produk["nama"]?></h4>
								<div class="container">
									<div class="w-40 m-r-1">
										<img class="img-prod" src="<?= MEIMG; ?><?= $produk['image1'] ?>" alt="">
									</div>
									<div class="w-60">
										<span>Harga</span>
										<h5>Rp.<?= number_format($produk['harga'],0,',','.'); ?></h5>
										<a href="<?= base_url(); ?>eyemarket/detail/<?= $produk['toko']; ?>/<?= $produk['title_slug']; ?>" ><button type="submit" class="beli">Beli</a></button>
									</div>
								</div>
							</div>
							<?php endforeach; ?>						
						</div>
						<div class="carousel-indicators bx-dot ep-dot">
							<span data-target="#em2Slide" data-slide-to="0" class="dot active"></span>
							<span data-target="#em2Slide" data-slide-to="1" class="dot"></span>
							<span data-target="#em2Slide" data-slide-to="2" class="dot"></span>
						</div>
					</div>
				</div>
			</div> -->
        </div>
		<div class="center-desktop m-0 mb-30">
			<div class="w-60 m-r-1 pd-t-20 formasi" style="width: 100%;">
				<h3 class="">Galeri</h3>
				<div id="em2Slide" class="carousel slide pemain-foto">
					<div role="listbox" class="carousel-inner">
						<div class="box item active">
							<?php 
								foreach ($gallery as $gl):
									$exp = explode('/',$gl->url_pic);
									$exp_img = explode('-',$exp[6]);
									if(!empty($exp_img[1])):
							?>
										<div class="em-box">
											<img src="<?php echo $gl->url_pic;?>" alt="klub galeri" width="220">
										</div>
							<?php
									endif;
								endforeach;
							?>
						</div>
						<div class="box item">
							<?php 
								foreach ($gallery as $gl):
									$exp = explode('/',$gl->url_pic);
									$exp_img = explode('-',$exp[6]);

									if(!empty($exp_img[1])):
							?>
										<div class="em-box">
											<img src="<?php echo $gl->url_pic;?>" alt="klub galeri" width="220">
										</div>
							<?php
									endif;
								endforeach;
							?>
						</div>
						<div class="carousel-indicators bx-dot ep-dot">
							<span data-target="#em2Slide" data-slide-to="0" class="dot active"></span>
							<span data-target="#em2Slide" data-slide-to="1" class="dot"></span>
							<span data-target="#em2Slide" data-slide-to="2" class="dot"></span>
						</div>
					</div>
                </div>
			</div>
		</div>
	</div>
<script>
		function openTab(evt,tabbing){
			// alert(tabbing);
			var i, maintab, klubtab;
			tabcontent = document.getElementsByClassName("maintab");
			for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}
			tablinks = document.getElementsByClassName("klubtab");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			}
			document.getElementById(tabbing).style.display = "block";
			evt.currentTarget.className += " active";
		}
	var fn = $(".hidden_title").val();
	$('#tbl_karir_klub').DataTable( {
		"order":[[1,"asc"]],
		"processing": true,
		"serverSide": true,
		"ajax":{
			url :"<?php echo base_url()?>eyeprofile/get_list_karir_klub/"+fn, // json datasource
			type: "post",  // method  , by default get
		},
		"language": {
			"url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Indonesian.json"
		}
	} );
</script>