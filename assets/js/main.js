var onScroll = (function(tag){
	if (!document.querySelector){
		return function(){};
	}

	var el = document.querySelector(tag);
	var origOffsetY = el.offsetTop;

	return function onScroll(e) {
		console.log('%s : %s', window.scrollY, origOffsetY);
		window.scrollY >= origOffsetY ? el.classList.add('sticky') :
                                  el.classList.remove('sticky');
	};
})('aside');

document.addEventListener('scroll', onScroll);
