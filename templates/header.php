<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $this->get('title', 'Youtube Downloader'); ?></title>
	<meta name="keywords" content="Video downloader, download youtube, video download, youtube video, youtube downloader, download youtube FLV, download youtube MP4, download youtube 3GP, php video downloader"/>
	<meta name="description" content="Video downloader, download youtube, video download, youtube video, youtube downloader, download youtube FLV, download youtube MP4, download youtube 3GP, php video downloader"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="css/custom.css" rel="stylesheet">
	<style type="text/css">
		#info {
			padding: 0 0 0 130px;
			position: relative;
			height: 100px;
		}
		#info img {
			left: 0;
			position: absolute;
			top: 0;
			width: 120px;
			height: 90px
		}

		body.darkmode {
    background: rgb(57, 57, 57);
    color: rgb(227, 227, 227);
}

body.darkmode a{
    color: rgb(227, 227, 227);
}

.is-hidden{
    display: none;
}

a{
    color: rgb(87, 87, 87);
}
#theme { 
    font-size: 25px;

}

#theme:hover {
    cursor: pointer;
}
	</style>
</head>
<body>
        

        <script>
            
            if(localStorage.getItem('preferredTheme') == 'dark') {
                setDarkMode(true)
            }

            function setDarkMode(isDark) {
                var darkBtn = document.getElementById('darkBtn')
                var lightBtn = document.getElementById('lightBtn')

                if(isDark) {
                    lightBtn.style.display = "block"
                    darkBtn.style.display = "none"
                    localStorage.setItem('preferredTheme', 'dark');
                } else {
                    lightBtn.style.display = "none"
                    darkBtn.style.display = "block"
                    localStorage.removeItem('preferredTheme');
                }

                document.body.classList.toggle("darkmode");
            }
        </script>
<div class="container">
	<div id="theme" align="right" style="">
            <div onclick="setDarkMode(true)" id="darkBtn" class=""> <span>🌚Dark mode</span></div>
            <div onclick="setDarkMode(false)" id="lightBtn" class="is-hidden"> <span>🌝Normal</span></div>
        </div>
        <br>
