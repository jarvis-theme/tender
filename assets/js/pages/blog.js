define(['jquery','js_socials'], function($)
{
	return new function()
	{
		var self = this;
		self.run = function()
		{
			$(window).load(function(){
				share();
			});
		};

		var share = function(){
			var url = document.querySelector("meta[name='url']").getAttribute('content');
			var text = document.querySelector("meta[name='DC.Title']").getAttribute('content');

			$(".share").jsSocials({
				url: url,
				text: text,
				showCount: false,
				showLabel: true,
				shareIn: "popup",
				shares: ["twitter", {share: "facebook", label: "Share"}, "googleplus", "pinterest", "stumbleupon"]
			});
		};

		var sharrreButtons = function(){
			$('#twitter').sharrre({
			  share: {
				twitter: true
			  },
			  enableHover: true,
			  enableTracking: true,
			  enableCounter: false,
			  buttons: { 
				twitter: {via: 'jarvis_store', count: 'vertical'}
			  },
			  click: function(api, options){
				api.simulateClick();
				api.openPopup('twitter');
			  }
			});
			$('#facebook').sharrre({
			  share: {
				facebook: true
			  },
			  buttons: {
				facebook: {layout: 'box_count'}
			  },
			  enableHover: false,
			  enableTracking: true,
			  enableCounter: false,
			  click: function(api, options){
				api.simulateClick();
				api.openPopup('facebook');
			  }
			});
			$('#googleplus').sharrre({
			  share: {
				googlePlus: true
			  },
			  buttons: {
				googlePlus: {size: 'tall', annotation:'bubble'}
			  },
			  enableHover: false,
			  enableTracking: true,
			  enableCounter: false,
			  click: function(api, options){
				api.simulateClick();
				api.openPopup('googlePlus');
			  }
			});
			$('#delicious').sharrre({
			  share: {
				delicious: true
			  },
			  buttons: {
				delicious: {size: 'tall'}
			  },
			  enableHover: true,
			  enableTracking: true,
			  enableCounter: false
			});
			$('#stumbleupon').sharrre({
			  share: {
				stumbleupon: true
			  },
			  buttons: {
				stumbleupon: {layout: '5'}
			  },
			  enableHover: true,
			  enableTracking: true,
			  enableCounter: false
			});
		};
	};
});