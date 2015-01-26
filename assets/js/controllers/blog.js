define(['jquery'], function()
{
	return new function()
	{
		var self = this;
		self.run = function()
		{
			$('.counter a').live('click', function(){
				$('.cartbubble').slideToggle();
			});
			$('#closeit').on('click',function(e){
				e.preventDefault;
				$('.cartbubble').slideUp();
			});	
		};		
	};
});