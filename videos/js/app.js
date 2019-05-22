$(document).ready(function(){

	$('#player').videre({
		video: {
			quality: [
				{
					label: '720p',
					src: 'https://www.venukalyan.com/videos/intro.mp4'
				},
				{
					label: '480p',
					src: 'https://www.venukalyan.com/videos/INTRODUCTION.mp4'
				}
			],
			title: ''
		},
		dimensions: 1280
	});

});