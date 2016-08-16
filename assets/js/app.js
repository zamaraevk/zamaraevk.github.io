// Define a new module for our app. The array holds the names of dependencies if any.
var app = angular.module("instantSearch", []);

// Create the instant search filter

app.filter('searchFor', function(){

	// All filters must return a function. The first parameter
	// is the data that is to be filtered, and the second is an
	// argument that may be passed with a colon (searchFor:searchString)

	return function(arr, searchString){

		if(!searchString){
			return arr;
		}

		var result = [];

		searchString = searchString.toLowerCase();

		// Using the forEach helper method to loop through the array
		angular.forEach(arr, function(item){

			if(item.title.toLowerCase().indexOf(searchString) !== -1){
				result.push(item);
			}

		});

		return result;
	};

});

// The controller

app.controller('InstantSearchController',function($scope){

	// The data model. These items would normally be requested via AJAX,
	// but are hardcoded here for simplicity. See the next example for
	// tips on using AJAX.

	$scope.items = [
	 {
			url: 'zamaraevk.github.io/portfolio/Map and Makers/v1/index.html',
            image: 'assets/images/thumbnails/map.png',
			title: 'Tiling concept for heavy SVG',
            url_git: 'https://github.com/zamaraevk/zamaraevk.github.io/tree/master/portfolio/Map%20and%20Makers/v1',
            features: [
                {feature:'JavaScript'},
                {feature:'Leaflet'}
                ]
			
		},	
        {
			url: 'http://konstantin.nyc/portfolio/email_portfolio/emailportfolio.html',
            image: 'assets/images/thumbnails/emails.jpg',
			title: 'Email library with mobile/desktop view',
            url_git: 'https://github.com/zamaraevk/zamaraevk.github.io/tree/master/portfolio/email_portfolio',
            features: [
                {feature:'Bootstrap 3'},
                {feature:'HTML Email'}
                ]
			
		},
		{
			url: 'http://www.granser.us',
            image: 'assets/images/thumbnails/granser.jpg',
			title: 'Custom Wordpress theme for construction company',
            url_git: '#',
            features: [
                {feature:'Wordpress Theme Cusomization'}
                ]
			
		},
		{
			url: '/portfolio/js/angularjs/ang.htm',
            image: 'assets/images/thumbnails/angular.jpg',
			title: 'AngularJS Weather application',
            url_git: 'https://github.com/zamaraevk/zamaraevk.github.io/tree/master/portfolio/js/angularjs',
            features: [
                {feature:'AngularJS'},
                {feature:'Bootstrap 3'}
                ]
			
		},
		{
			url: '/portfolio/js/subway_project/subway.html',
            image: 'assets/images/thumbnails/subway.jpg',
			title: 'Type your message for subway passengers',
            url_git: 'https://github.com/zamaraevk/zamaraevk.github.io/tree/master/portfolio/js/subway_project',
            features: [
                {feature:'HTML5'},
                {feature:'CSS3'},
                {feature:'JavaScript'}
                ]
			
		},
		{
			url: '/portfolio/js/color_project/color.html',
            image: 'assets/images/thumbnails/color.jpg',
			title: 'JavaScript Game "Guess the RGB color"',
            url_git: 'https://github.com/zamaraevk/zamaraevk.github.io/tree/master/portfolio/js/color_project',
            features: [
                {feature:'HTML5'},
                {feature:'CSS3'},
                {feature:'JavaScript'}
                ]
			
		},
		{
			url: '/portfolio/js/jquery/to_do_list/todo.html',
            image: 'assets/images/thumbnails/todo.jpg',
			title: 'JQuery To Do List',
            url_git: 'https://github.com/zamaraevk/zamaraevk.github.io/tree/master/portfolio/js/jquery/to_do_list',
            features: [
                {feature:'HTML5'},
                {feature:'CSS3'},
                {feature:'JQuery'}
                ]
			
		},
		{
			url: '/portfolio/css/css_blog_left_push_menu.html',
            image: 'assets/images/thumbnails/blog',
			title: 'Blog Page with left-side menu',
            url_git: 'https://github.com/zamaraevk/zamaraevk.github.io/tree/master/portfolio/css',
            features: [
                {feature:'HTML5'},
                {feature:'CSS3'}
                ]
			
		},
        {
			url: '/portfolio/css/css_effects_img_gallery.html',
            image: 'assets/images/thumbnails/images.jpg',
			title: 'Image Gallery with different CSS effects',
            url_git: 'https://github.com/zamaraevk/zamaraevk.github.io/tree/master/portfolio/css',
            features: [
                {feature:'HTML5'},
                {feature:'CSS3'}
                ]
			
		},
        {
			url: '/portfolio/css/img_fullscreen_slide_show_css.html',
            image: 'assets/images/thumbnails/slider.jpg',
			title: 'Fullscreen CSS Slider',
            url_git: 'https://github.com/zamaraevk/zamaraevk.github.io/tree/master/portfolio/css',
            features: [
                {feature:'HTML5'},
                {feature:'CSS3'}
                ]
			
		}
	];

});
