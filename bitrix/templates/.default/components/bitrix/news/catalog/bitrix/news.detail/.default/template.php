<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

$arProperties = $arResult['PROPERTIES'];

if ($arProperties['AGENT']['VALUE']) {
    $rsAgent = CIBlockElement::GetByID($arProperties['AGENT']['VALUE']);
    $obAgent = $rsAgent->GetNextElement();

    $arAgentFields = $obAgent->GetFields();
    $arAgentProperties = $obAgent->GetProperties();

    if ($arAgentFields['PREVIEW_PICTURE']) {
        $arAgentAvatar = CFile::ResizeImageGet($arAgentFields['PREVIEW_PICTURE'],
            ['width' => 38, 'height' => 38], BX_RESIZE_IMAGE_EXACT, true);
    }
}

if($arProperties['PDF']['VALUE']) {
    $fileUrl = CFile::GetPath($arProperties['PDF']['VALUE']);
    $presentationUrl =CFile::GetPath($arProperties['PRESENTATION']['VALUE']);
}
?>

<?php require($arParams['CUSTOM']['LAYOUT_DETAIL_FILE']);?>

<script>
	function initGoogleMap() {
		const map = new google.maps.Map(document.getElementById("detail-build-map"), {
			center           : {
				lat: <?= $arProperties['LAT']['VALUE']; ?>,
				lng: <?= $arProperties['LNG']['VALUE']; ?>
			},
			zoom             : 15,
			zoomControl      : false,
			mapTypeControl   : false,
			scaleControl     : false,
			streetViewControl: false,
			fullscreenControl: false,
			styles           : [{
				"featureType": "administrative",
				"elementType": "labels.text.fill",
				"stylers"    : [{
					"color": "#444444"
				}]
			},
				{
					"featureType": "landscape",
					"elementType": "all",
					"stylers"    : [{
						"color": "#f2f2f2"
					}]
				},
				{
					"featureType": "landscape",
					"elementType": "geometry.fill",
					"stylers"    : [{
						"color": "#d5f0c9"
					}]
				},
				{
					"featureType": "poi",
					"elementType": "all",
					"stylers"    : [{
						"visibility": "off"
					}]
				},
				{
					"featureType": "road",
					"elementType": "all",
					"stylers"    : [{
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
					"stylers"    : [{
						"visibility": "simplified"
					}]
				},
				{
					"featureType": "road.arterial",
					"elementType": "labels.icon",
					"stylers"    : [{
						"visibility": "off"
					}]
				},
				{
					"featureType": "transit",
					"elementType": "all",
					"stylers"    : [{
						"visibility": "off"
					}]
				},
				{
					"featureType": "water",
					"elementType": "all",
					"stylers"    : [{
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
					"stylers"    : [{
						"visibility": "on"
					},
						{
							"color": "#b2eafe"
						}
					]
				}
			]
		});

		new google.maps.Marker({
			position : {
				lat: Number(<?= $arProperties['LAT']['VALUE']; ?>),
				lng: Number(<?= $arProperties['LNG']['VALUE']; ?>)
			},
			map,
			icon    : "/html/assets/svg/map-point.svg"
		});
	}

	$(function () {
		$('#lider_buildings').slick('unslick');

		//activate sliders
		$('.section__product-slider').slick({
			autoplay      : false,
			slidesToShow  : 1,
			slidesToScroll: 1,
			arrows        : false,
			dots          : true,
			draggable     : false,
			swipe         : true,
			adaptiveHeight: true
		});

		setTimeout(function () {
			$('.section__gallery-slider').slick({
				autoplay      : false,
				slidesToShow  : 3,
				slidesToScroll: 1,
				arrows        : true,
				dots          : true,
				draggable     : false,
				swipe         : true,
				adaptiveHeight: true,
				responsive    : [
					{
						breakpoint: 1024,
						settings  : {
							slidesToShow  : 2,
							slidesToScroll: 2
						}
					},
					{
						breakpoint: 765,
						settings  : {
							slidesToShow  : 1,
							slidesToScroll: 1
						}
					}
				]
			});
		}, 0);
	});
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3_b3EhD0YXwMp0q8DObsfavvJTbJ4M7I&callback=initGoogleMap" async defer></script>