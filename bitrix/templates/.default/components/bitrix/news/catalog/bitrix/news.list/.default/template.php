<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

function cropText($strText, $iLength)
{
    $string = $strText;

    if (strlen($strText) > 550) {
        $string = substr($strText, 0, $iLength);
        $string = rtrim($string, "!,.-");
        $string = substr($string, 0, strrpos($string, ' '));
        $string .= "… ";
    }

    return $string;
}

$jsItems = json_encode($arResult['ITEMS']);
?>


<section class="section catalog mb-3">
    <div class="wrapper">
        <div class="section__content-changer g-flex-column" id="slider_buildings">
            <select data-placeholder="↑↓ По умолчанию" style="width: 200px;">
                <option value="">↑↓ По умолчанию</option>
                <option>цена ↑</option>
                <option>цена ↓</option>
                <option>площадь ↑</option>
                <option>площадь ↓</option>
            </select>
            <div class="section__content-tabs">
                <div class="section__content-tab active">
                    Списком
                </div>
                <div class="section__content-tab">
                    На карте
                </div>
            </div>

            <?php require($arParams['CUSTOM']['LAYOUT_FILE']);?>
        </div>
    </div>
</section>

<style>

    .slider-objects.slick-initialized>.slick-list>.slick-track{
        width: 100% !important;
        max-width: 100% !important;
    }

    .slider-objects.slick-initialized>.slick-list>.slick-track>.slick-slide {
        display: none !important;
        left: 0px !important;
        width: 100% !important;
    }

    .slider-objects.slick-initialized>.slick-list>.slick-track>.slick-slide.slick-active{
        display: block !important;
        left: 0px !important;
        width: 100% !important;
    }

    .highIndex {
        z-index: 9999 !important;
    }
</style>

<script>
	function shortenNumber(num, decimalPlaces) {
		var str, suffix = '';
		decimalPlaces = decimalPlaces || 0;
		num = +num;
		var factor = Math.pow(10, decimalPlaces);
		if (num < 1000) {
			str = num;
		} else if (num < 1000000) {
			str = Math.floor(num / (1000 / factor)) / factor;
			suffix = ' <span>тыс.</span>';
		} else if (num < 1000000000) {
			str = Math.floor(num / (1000000 / factor)) / factor;
			suffix = ' <span>млн.</span>';
		}
		return str + suffix;
	}

	function initGoogleMap() {
		const map = new google.maps.Map(document.getElementById("buildings-map-2"), {
			center: {
				// TODO: Fix this, first element in the list
				lat: 55.7725, lng: 37.6227065
			},
			zoom: 15,
			zoomControl: false,
			mapTypeControl: false,
			scaleControl: false,
			streetViewControl: false,
			fullscreenControl: false,
			styles: [
				{
					"featureType": "administrative",
					"elementType": "labels.text.fill",
					"stylers": [
						{
							"color": "#444444"
						}
					]
				},
				{
					"featureType": "landscape",
					"elementType": "all",
					"stylers": [
						{
							"color": "#f2f2f2"
						}
					]
				},
				{
					"featureType": "landscape",
					"elementType": "geometry.fill",
					"stylers": [
						{
							"color": "#d5f0c9"
						}
					]
				},
				{
					"featureType": "poi",
					"elementType": "all",
					"stylers": [
						{
							"visibility": "off"
						}
					]
				},
				{
					"featureType": "road",
					"elementType": "all",
					"stylers": [
						{
							"saturation": -100
						},
						{
							"lightness": 45
						}
					]
				},
				{
					"featureType": "road.highway",
					"elementType": "all",
					"stylers": [
						{
							"visibility": "simplified"
						}
					]
				},
				{
					"featureType": "road.arterial",
					"elementType": "labels.icon",
					"stylers": [
						{
							"visibility": "off"
						}
					]
				},
				{
					"featureType": "transit",
					"elementType": "all",
					"stylers": [
						{
							"visibility": "off"
						}
					]
				},
				{
					"featureType": "water",
					"elementType": "all",
					"stylers": [
						{
							"color": "#46bcec"
						},
						{
							"visibility": "on"
						}
					]
				},
				{
					"featureType": "water",
					"elementType": "geometry.fill",
					"stylers": [
						{
							"visibility": "on"
						},
						{
							"color": "#b2eafe"
						}
					]
				}
			]
		});


		const obItems = <?= $jsItems; ?>;

		//$('#lider_buildings').slick('unslick');

		obItems.map(item => {
			let marker = new google.maps.Marker({
				position : {
					lat: Number(item['PROPERTIES']['LAT']['VALUE']),
					lng: Number(item['PROPERTIES']['LNG']['VALUE'])
                },
				map,
				optimized: true,
				visible  : false,
			});


			const clearPrice = item['PROPERTIES']['PRICE']['VALUE'].replace(/[^0-9]/g,"");

			let content = shortenNumber(clearPrice, 1)+'<svg class="ruble"><use xlink:href="#Rouble"></use></svg>',
                contentString = "<div class='marker' data-id='" + item['ID'] + "'>" + content + "</div>";

			let infowindow = new google.maps.InfoWindow({
				content: contentString,
			});

			infowindow.open(marker.getMap(), marker);

			google.maps.event.clearListeners(map, 'bounds_changed');

			google.maps.event.addListener(infowindow, 'domready', function () {
				$(".gm-style-iw-a").removeClass("--fixed").addClass("--fixed");
				$(".gm-style-iw-a div[data-id]").on("click", function () {
					let itemId = $(this).data("id");
					let itemObj = $(".section_product[data-id=" + itemId + "]");

					$(".section_product, .gm-style-iw-a div").removeClass("active");
					$(".section_product[data-id=" + itemId + "], .gm-style-iw-a div[data-id=" + itemId + "]").addClass("active");
					map.panTo(new google.maps.LatLng(itemObj.data('mapx'), itemObj.data('mapy')));
				});
			});
		});


		$(".section_product[data-id]").on("click", function () {
			if ($(this).hasClass("active")) {
				$(".section_product, .gm-style-iw-a .marker").removeClass("active");
				map.panTo(new google.maps.LatLng($(this).data('mapx'), $(this).data('mapy')));
				return;
			}

			var id = $(this).data("id");
			$(".section_product, .gm-style-iw-a .marker").removeClass("active");
			$(".gm-style-iw-a .marker").closest('.gm-style-iw-a').parent().removeClass("highIndex");

			$(".section_product[data-id=" + id + "], .gm-style-iw-a .marker[data-id=" + id + "]").addClass("active");
			$(".gm-style-iw-a .marker[data-id=" + id + "]").closest('.gm-style-iw-a').parent().addClass('highIndex');
            map.panTo(new google.maps.LatLng($(this).data('mapx'), $(this).data('mapy')));
		});

		//activate sliders
		/*$('.section__product-slider').slick({
		autoplay      : false,
			slidesToShow  : 1,
			slidesToScroll: 1,
			arrows        : false,
			dots          : true,
			draggable     : false,
			swipe         : true,
			adaptiveHeight: true
	    });

	    $(".slider-objects .slick-list").css("overflow", "visible");*/



		/*marker.addListener("click", () => {
			infowindow.open({
				anchor: marker,
				map,
				shouldFocus: false,
			});
		});*/
	}

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3_b3EhD0YXwMp0q8DObsfavvJTbJ4M7I&callback=initGoogleMap" async defer></script>