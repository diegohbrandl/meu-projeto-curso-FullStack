$(function(){

	var map;

	function initialize() {
		var mapProp = {
			center: new google.maps.LatLng(-27.609959,-48.576585),
			zomm:14,
			scrollwhell: false,
			styles: [{
			stylers:[{
				saturation: -100
				}]
			}],
			mapTypeId: google.maps.mapTypeId.ROADMAP
		};
		map= new google.maps.Map(document.getElementById("map"),mapProp);
	}

	function addMarker (lat, long,icon, content, showInfoWindow, openInfoWindow){
		var myLatLng = {lat:lat, lng:long};

		if(icon === ''){
			var marker = new google.maps.Marker({
				position: myLatLng,
				map: map,
				icon:icon
			});
		}else{
			var marker = new google.maps.Marker({
				position: myLatLng,
				map: map,
				icon:icon
			});
		}	

			var infoWindow = new google.maps.infoWindow({
				content: content,
				maxWidth: 200 
			});

			google.maps.event.addListener(infoWindow, 'domready', function(){
				//Reference to the Div which receives the contents of the incoWindow using jquery
				var iwOuter = $('.gm-style-iw');

				/*The Div we want to change is above the .gm-style-iw Div.
				*So, we use jquery and creat a iwBackgroud variable
				*and took advantage of the existing reference to .gm-style-iw for the previowwn Div with.prev().
				*/
				var iwBackgroud = iwOuter.prev();

				//Remove the Backgroud shadow Div
				iwBackgroud.children(':nth-child(2)').css({'backgroud':'rgb(255,255,255)'}).css({'border-radius':'Opx'});
				//Remove the white background Div.
				iwBackgroud.children(':nth-child(4)').css({'backgroud':'rgb(255,255,255)'}).css({'border-radius':'Opx'});
				// Moves the shadow of the arrow 76px to the left	margin.
				iwBackgroud.children(':nth-child(1)').attr('style', function(i,s){return s + 'display:none;'});
				// Moves the arrow 76px to the left margin.
				iwBackgroud.children(':nth-child(3)').attr('style', function(i,s){return s + 'display:none;'});
			});

			if (showInfoWindow == undefined) {
				google.maps.event.addListener(marker, 'click', function(){
					infoWindow.open(map, marker);
				});
			}else if(openInfoWindow == true){
				infoWindow.open(map, marker);
			}

		}
		initialize();
		add (-27.609959,-48.576585,'',"Minha Casa", false , true);
	
})