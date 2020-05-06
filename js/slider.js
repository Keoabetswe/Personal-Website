$('.slider').each(function()
{
	var $this = $(this),
	var $group = $this.find('.slide-group'),
	var $slides = $this.find('.slide'),
	var buttonArray = [],
	var currentIndex = 0,
	var timeout;

	//call the move function
	function move(newIndex) //creates the slide from the old to new one
	{
		var animateLeft, slideLeft;

		advance(); //when the slide moves, call advance() again

		//if current slide is showing or a slide is animating, then do nothing
		if($group.is(':animated') || currentIndex === newIndex)
		{
			return;
		}

		buttonArray[currentIndex].removeClass('active');
		buttonArray[newIndex].addClass('active');

		if(newIndex > currentIndex)
		{
			slideLeft = '100%';
			animateLeft = '-100%';
		}
		else
		{
			slideLeft = '-100%';
			animateLeft = '100%';
		}

		$slides.eq(newIndex).css( {left: slideLeft, display: 'block'} );
		$group.animate( {left: animateLeft} , function() 
		{
			$slides.eq(currentIndex).css( {display: 'none'} );
			$slides.eq(newIndex).CSS( {left: 0} );
			$group.css( {left: 0} );
			currentIndex = newIndex;
		});
	}

	function advance() 
	{
		clearTimeout(timeout);

		//timer to run an anonymous function every 4 seconds
		timeout = setTimeout(function() 
		{
			if(currentIndex < ($slides.length - 1))
			{
				move(currentIndex + 1);		
			}
			else
			{
				move(0);
			}
		}, 4000);
	}

	$.each($slides, function(index)
	{
		//creates button element for the button
		var $button = $('<button type="button" class="slide-btn">&bull;</button');
		
		if(index === currentIndex) //if index is the current item
		{
			$button.addClass('active'); //adds the active class
		}
		$button.on('click', function()
		{
			move(index);
		}).appendTo('.slide-buttons');
		buttonArray.push($button);
	});

	advance();
});