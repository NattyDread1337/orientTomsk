$(document).ready(function() {
	$('.ham').click(function(event) {
		$('.header__menu').toggleClass('active');
	});
	$('.burger-menu__overlay').click(function(event) {
		$('.header__menu').toggleClass('active');
		$('.ham').toggleClass('active');
	});
});

const menuLinks = document.querySelectorAll('.menu > li > a');

menuLinks.forEach((menuItem) => {
	menuItem.addEventListener('click', (event) => {
		
		const target = event.target;

		if (target.classList.contains('activemenu')){
			target.classList.remove('activemenu');
		} else {
			const openLink = document.querySelector('.activemenu');
			target.classList.add('activemenu');
		}
	});
});

var del = document.querySelector('.del').getAttribute('data-attr');
if (del == 1 ){
} 
else if (del==2||3) {
	document.getElementsByClassName('del')[0].innerHTML = "";
}

var del1 = document.querySelector('.del1').getAttribute('data-attr');
if (del1 == 1 ){
} 
else if (del1=='') {
	document.getElementsByClassName('del1')[0].innerHTML = "";
}

var del2 = document.querySelector('.del2').getAttribute('data-attr');
if (del2 == 1 ){
} 
else if (del2=='') {
	document.getElementsByClassName('del2')[0].innerHTML = "";
}

var del3 = document.querySelector('.del3').getAttribute('data-attr');
if (del3 == 1 ){
} 
else if (del3=='') {
	document.getElementsByClassName('del3')[0].innerHTML = "";
}

var del4 = document.querySelector('.del4').getAttribute('data-attr');
if (del4 == 1 ){
} 
else if (del4=='') {
	document.getElementsByClassName('del4')[0].innerHTML = "";
}

