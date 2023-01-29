<!DOCTYPE html>
<html lang="en-US" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Epic Writers</title>

        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('assets/img/favicons/favicon-32x32.png'); ?>">

		<meta name="theme-color" content="#ffffff">
		<script src="<?php echo base_url('assets/js/config.js'); ?>"></script>
        
        <script src="<?php echo base_url('assets/plugins/overlayscrollbars/OverlayScrollbars.min.js'); ?>"></script>
        
        <link href="<?php echo  base_url('assets/plugins/overlayscrollbars/OverlayScrollbars.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/theme.min.css'); ?>" rel="stylesheet" id="style-default">
        <link href="<?php echo base_url('assets/css/user.min.css'); ?>" rel="stylesheet" id="user-style-default">

		<script>
			var isRTL = JSON.parse(localStorage.getItem('isRTL'));
			document.documentElement.classList.add('light');
			if (isRTL) {
				var linkDefault = document.getElementById('style-default');
				var userLinkDefault = document.getElementById('user-style-default');
				linkDefault.setAttribute('disabled', true);
				userLinkDefault.setAttribute('disabled', true);
				document.querySelector('html').setAttribute('dir', 'rtl');
			} else {
				var linkRTL = document.getElementById('style-rtl');
				var userLinkRTL = document.getElementById('user-style-rtl');
				linkRTL.setAttribute('disabled', true);
				userLinkRTL.setAttribute('disabled', true);
			}
		</script>
    </head>
    <body>
        
