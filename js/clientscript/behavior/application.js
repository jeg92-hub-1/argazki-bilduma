//Applies behaviour rules to the classes
//Author: Brian R Miedlar (c) 2006-2009

var AppBehavior = Class.create();

var MyClass = function() {}

MyClass.prototype.albumHorretakoIrudiakBistaratu = function(izenburu){
	/*XMLHttpRequestObject = new XMLHttpRequest();
	XMLHttpRequestObject.onreadystatechange = function(){
		document.getElementById("irudiak").innerHTML="";
		if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
			document.getElementById("irudiak").innerHTML=XMLHttpRequestObject.responseText;
		}
	}
	XMLHttpRequestObject.open("GET","../php/erab/nireArgazkiakerakutsi.php?IZENBURUA="+izenburu, true);
	XMLHttpRequestObject.send();*/
	alert(izenburu);
}

AppBehavior.Load = function() {
    OS.RegisterBehaviour(AppBehavior.CarouselRules);
}
AppBehavior.CarouselRules = {

    '#Carousel': function(element) {
        //Simple profiles
        AppBehavior.ProfileCarousel = new Carousel('ProfileCarousel', element, 200, 30, AppBehavior, {
            setSize: 5,
            duration: .5,
            direction: 'vertical',
            itemParser: function(item) {
                //Given html element you can build a data object for the item if needed for later activation
                var sKey = item.down('.key').innerHTML;
                var sCaption = item.down('.caption').innerHTML;
                var sEmail = item.down('.description').innerHTML;
                return { name: sCaption, email: sEmail };
            },
            setItemEvents: function(carousel, itemElement, carouselItem, observer,item) {
                //This allows you to set events to the item like rollovers/mouse events
                Event.observe(itemElement, 'click', function() {
                    carousel.activate(carouselItem);
					var class1 = new MyClass();
					class1.albumHorretakoIrudiakBistaratu(carouselItem.value.name);
                });
                Event.observe(itemElement, 'mouseover', function() {
                    Element.addClassName(itemElement, 'hover');
                });
                Event.observe(itemElement, 'mouseout', function() {
                    Element.removeClassName(itemElement, 'hover');
                });
            },
            allowAutoLoopOnSet: false,
            allowAutoLoopOnIndividual: true
        });
        AppBehavior.ProfileCarousel.load();
    },
    '#Carousel2': function(element) {
        //Pictures
        AppBehavior.PictureCarousel = new Carousel('PictureCarousel', element, 70, 70, AppBehavior, {
            setSize: 3,
            duration: .5,
            direction: 'horizontal',
            itemParser: function(item) {
                //Given html element you can build a data object for the item if needed for later activation
                var sKey = item.down('.key').innerHTML;
                var sCaption = item.down('.caption').innerHTML;
                var sPictureHtml = item.down('.picture').innerHTML;
                return { name: sCaption, pictureHtml: sPictureHtml };
            },
            setItemEvents: function(carousel, itemElement, carouselItem, observer) {
                //This allows you to set events to the item like rollovers/mouse events
                Event.observe(itemElement, 'click', function() {
                    carousel.activate(carouselItem);
                });
            },
            allowAutoLoopOnSet: true,
            allowAutoLoopOnIndividual: false
        });
        AppBehavior.PictureCarousel.load();
    },
    '#Cmd_NextItem': function(element) {
        Event.observe(element, 'click', function() {
            AppBehavior.ProfileCarousel.next();
        });
    },
    '#Cmd_PreviousItem': function(element) {
        Event.observe(element, 'click', function() {
            AppBehavior.ProfileCarousel.previous();
        });
    }
}

//EVENT OBSERVATION
AppBehavior.fireActiveCarouselLoaded = function(carousel) {
}
AppBehavior.fireActiveCarouselItem = function(carousel, element, item) {
    element.addClassName('selected');

    // Here we can update any part of the DOM to represent our data
    // In this sample we will use the same generic viewer element for all carousels
    switch(carousel.key) {
        case 'ProfileCarousel': 
            $('ViewerCaption').update(item.value.name);
            $('ViewerData').update(item.value.email);
            Element.show('Viewer');
            break;
            
        case 'PictureCarousel':
            $('ViewerCaption1').update(item.value.name);
            $('ViewerData1').update(item.value.pictureHtml);
            Element.show('Viewer1');
            break;

        case 'GroupCarousel':
            $('ViewerCaption').update(item.value.name);
            $('ViewerData').update(item.value.email);
            Element.show('Viewer');
            break;
    }
}
AppBehavior.fireDeactiveCarouselItem = function(carousel, element, item) {
    element.removeClassName('selected');

    switch(carousel.key) {
        case 'ProfileCarousel': 
            Element.hide('Viewer');
            break;

        case 'PictureCarousel': 
            Element.hide('Viewer1');
            break;

        case 'GroupCarousel': 
            Element.hide('Viewer');
            break;
    }
}

AppBehavior.Load();
