	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/leaflet.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/qgis2web.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/MarkerCluster.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/MarkerCluster.Default.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>ltr/assets/offline/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>ltr/assets/offline/buttons.bootstrap4.min.css">
	<script src="<?php echo base_url() ?>ltr/assets/vendor/datatables/jquery-3.5.1.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
	  rel="stylesheet"
	  href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"
	/>
    <style>
    html,
    body,
    #map {
        width: 100%;
        height: 100%;
        padding: 0;
        margin: 0;
    }
    </style>
    <title></title>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
</head>
<body>
	
	<div id="map">		
	</div>
	<input type="hidden" name="lat" id="lat" value="1">
	<input type="hidden" name="lng" id="lng" value="">
	<script src="<?= base_url() ?>assets/js/qgis2web_expressions.js"></script>
    <script src="<?= base_url() ?>assets/js/leaflet.js"></script>
    <script src="<?= base_url() ?>assets/js/leaflet.rotatedMarker.js"></script>
    <script src="<?= base_url() ?>assets/js/leaflet.pattern.js"></script>
    <script src="<?= base_url() ?>assets/js/leaflet-hash.js"></script>
    <script src="<?= base_url() ?>assets/js/Autolinker.min.js"></script>
    <script src="<?= base_url() ?>assets/js/rbush.min.js"></script>
    <script src="<?= base_url() ?>assets/js/labelgun.min.js"></script>
    <script src="<?= base_url() ?>assets/js/labels.js"></script>
    <script src="<?= base_url() ?>assets/js/leaflet.markercluster.js"></script>
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
	<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
	<script>
		
	</script>
	<script type="text/javascript">
		var map = L.map('map').setView([0,0], 12);
		L.tileLayer('https://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
			maxZoom: 25,attribution: '© OpenStreetMap'
		}).addTo(map);
		var TernakIcon = L.Icon.extend({
			options: {
				iconSize:     [50, 50],
				iconAnchor:   [22, 94],
				popupAnchor:  [-3, -76]
			}
		});

		var Sapi = new TernakIcon({iconUrl: '<?= base_url() ?>assets/img/icons/sapi.png'}),
			Bebek = new TernakIcon({iconUrl: '<?= base_url() ?>assets/img/icons/bebek.png'}),
			Kambing = new TernakIcon({iconUrl: '<?= base_url() ?>assets/img/icons/kambing.png'}),
			Babi = new TernakIcon({iconUrl: '<?= base_url() ?>assets/img/icons/babi.png'}),
			babisapi = new TernakIcon({iconUrl: '<?= base_url() ?>assets/img/icons/babisapi.png'});
			ayamdaging = new TernakIcon({iconUrl: '<?= base_url() ?>assets/img/icons/ayamdaging.png'});
			ayamkampung = new TernakIcon({iconUrl: '<?= base_url() ?>assets/img/icons/ayamkampung.png'});
			ayampetelur = new TernakIcon({iconUrl: '<?= base_url() ?>assets/img/icons/ayampetelur.png'});
			sapiayamtelur = new TernakIcon({iconUrl: '<?= base_url() ?>assets/img/icons/sapiayamtelur.png'});
			sapiayamdaging = new TernakIcon({iconUrl: '<?= base_url() ?>assets/img/icons/sapiayamdaging.png'});
			babiayamtelur = new TernakIcon({iconUrl: '<?= base_url() ?>assets/img/icons/babiayamtelur.png'});
			babiayamdaging = new TernakIcon({iconUrl: '<?= base_url() ?>assets/img/icons/babiayamdaging.png'});
			babiayamkampung = new TernakIcon({iconUrl: '<?= base_url() ?>assets/img/icons/babiayamkampung.png'});

		<?php
		foreach ($lokasi as $row) {
		?>
			L.marker([<?=$row->x?>,<?=$row->y?>], {icon: <?=$row->icon?>}).addTo(map)
			.bindPopup(`Nama Pemilik : <?=$row->pemilik?>
				<br>Jenis Ternak : <?=$row->ternak?>
				<br>Populasi : <?=$row->populasi?>
				<br>Alamat : <?=$row->alamat?>
				<br>Luas : <?=$row->luas?>
				<br>
				<br>
				<center><a  href="#" title="" data-fancybox data-src="<?= base_url() ?>assets/img/uploaded/<?= $row->pict ?>"><img src='<?= base_url() ?>assets/img/uploaded/<?php echo $row->pict ?>' height='150px'/></a></center>
				<br><a href="https://maps.google.com?q=<?= $row->x ?>,<?= $row->y ?>" target="_blank" class="btn btn-primary" style="color:white;" title=""><i class="fa fa-location-arrow"></i> View</a>
			` );
		<?php
		} ?>
		var marker = L.marker([0, 0]);
		var options = {
		  enableHighAccuracy: true,
		  timeout: 5000,
		  maximumAge: 0
		};
		// Mendapatkan lokasi menggunakan Geolocation API
	    if (navigator.geolocation) {
	      navigator.geolocation.getCurrentPosition(showPosition,showError,options);
	    } else {
	      alert("Geolocation is not supported by this browser.");
	      location.reload();
	    }
	    function showPosition(position) {
	    	// console.log('tess show')
	      var lat = position.coords.latitude;
	      var lon = position.coords.longitude;

	      // Menambahkan marker
	      marker.addTo(map)
	        .bindPopup("Lokasi Anda").openPopup().setLatLng(new L.latLng(lat, lon))

	      // Memindahkan peta ke lokasi pengguna
	      map.setView([lat, lon], 13);
	      $('#lat').val(lat);
	      $('#lng').val(lon);
	       try{
		    	window.parent.cc();
		    	window.parent.view_loc_edit();
		    }catch{
		    	
		    }
	    }

		
		  map.on('click', function(e) {
		    var coordinates = e.latlng;
		    marker.addTo(map).setLatLng(coordinates); 
		    $('#lat').val(coordinates.lat);
		    $('#lng').val(coordinates.lng);
		    
		    try{
		    	window.parent.cc();
		    	window.parent.view_loc_edit();
		    }catch{
		    	
		    }
		  });


		  function showError(error) {
			  switch(error.code) {
			    case error.PERMISSION_DENIED:
			      alert("User denied the request for Geolocation.")
			      break;
			    case error.POSITION_UNAVAILABLE:
			      alert("Location information is unavailable.")
			      break;
			    case error.TIMEOUT:
			      alert("The request to get user location timed out.")
			      break;
			    case error.UNKNOWN_ERROR:
			      alert("An unknown error occurred.")
			      break;
			  }
			  location.reload();
			}
		  
	</script>
</body>