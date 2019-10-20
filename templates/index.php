<?php echo $this->inc('header.php', ['title' => 'Youtube Downloader']); ?>
	<div class="border-body" style="border: 1px solid grey; " >
	<div style="margin: 0% auto; width: 90%;">
		<form class="" method="get" id="download" action="getvideo.php">
			<h1 class="form-download-heading">Youtube Downloader</h1>
			<span>(v1.00 beta)</span> <br><br>
				<div class="input-group">
				  <input type="text" name="videoid" id="videoid" class="form-control input-lg" placeholder="YouTube Link or VideoID" autofocus>
					<input type="hidden" name="type" id="type" value="Download"/>
					<span class="input-group-btn">
					<input class="btn btn-primary btn-lg" type="submit" name="submit" value="Convert" />
				  </span>
				</div><!-- /input-group -->
				<br>
			<div class="video-info">
				<h3 style="color: grey;" >Tutorial download</h3>
				<br>
					<ul>
						<li><img src="img/1.png" width="60%" ><br><h4>salin url seperti gambar di atas</h4></li>
						<br>
						<li><img src="img/2.png" width="60%"><br><h4>Lalu pastekan url tadi di kolom input</h4></li>
						<br>
						<li><img src="img/3.png" width="60%"><br><h4>Klik convert</h4></li><br>
					</ul>
			</div>
		<!-- @TODO: Prepend the base URI -->
		<?php
		if ( $this->get('showBrowserExtensions') === true )
		{
			echo '<center><a href="ytdl.user.js" class="btn btn-sm btn-success" title="Install chrome extension to view a \'Download\' link to this application on Youtube video pages."> Install Chrome Extension </a></center>';
		}
		?>
		<hr />
		
		

		<div class="clearfix"></div>
		</form>
	</div>
	</div>
<br>
	<!--footer-->
          <div class="p-footer" style="text-align: center;color: grey;font-size: 15px;">
            <a href="https://twitter.com/fajaragungn25?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-size="large" data-show-count="false">Follow @fajaragungn25</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            <br>
            <a href="app/fajarbaiz.com.apk" download>Unduh fajarbaiz.com di android anda!</a>
            <p > © 2019 | <a class="khusus" href="https://fajarbaiz.com/profile/" target="_blank">@fajar.agungn</a></p>
            </div>
          </div>
          <!--footer-->
<?php echo $this->inc('footer.php'); ?>
