<?php include 'header.php'; ?>

		<!-- ========== HEADER END ========== -->

		<!-- ========== TITLE START ========== -->

		<div class="title">
			<div class="title-image"></div>
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						Contact
					</div>
				</div>
			</div>
		</div>

		<!-- ========== TITLE END ========== -->

		<!-- ========== MAP START ========== -->

		<!-- Google Map Script -->
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDoRMxiPsqJ9SUuaK1KsCAjd3gqnecjlBw&amp;sensor=false"></script>
		<script type="text/javascript">

			function initialize() {

				// Create an array of styles.
				var styles = [
					{
						"featureType": "water",
						"stylers": [
							{ "hue": "#89909a" },
							{ "lightness": 60 }
						]
					},{
						featureType: "road",
						elementType: "geometry",
						stylers: [
							{ lightness: 50 },
							{ visibility: "simplified" }
						]
					},{
						featureType: "road",
						elementType: "labels",
						stylers: [
							{ visibility: "off" }
						]
					}
				];

				// Create a new StyledMapType object, passing it the array of styles,
				// as well as the name to be displayed on the map type control.
				var styledMap = new google.maps.StyledMapType(styles,
				{name: "Styled Map"});


							var mapOptions = {
								scrollwheel: false,
								zoom: 12,
								center: new google.maps.LatLng(34.087522, -118.380155),
				mapTypeControlOptions: {
				  mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
				}
				}
				var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

				//Associate the styled map with the MapTypeId and set it to display.
				map.mapTypes.set('map_style', styledMap);
				map.setMapTypeId('map_style');

				setMarkers(map, places);
			}

			var places = [
				['<b>Smartway Learning Centre</b><br>8699 Santa Monica Blvd<br>Los Angeles<br>CA 90069-4109', 34.087522, -118.380155, 1]
			];

			function setMarkers(map, locations) {
				// Add markers to the map
				var image = {
					url: 'images/marker.png',
					// This marker is 40 pixels wide by 42 pixels tall.
					size: new google.maps.Size(40, 42),
					// The origin for this image is 0,0.
					origin: new google.maps.Point(0,0),
					// The anchor for this image is the base of the pin at 20,42.
					anchor: new google.maps.Point(15, 42)
				};

					var infowindow = new google.maps.InfoWindow();

					var marker, i;
					var markers = new Array();

					for (var i = 0; i < locations.length; i++) {
						var place = locations[i];
						var myLatLng = new google.maps.LatLng(place[1], place[2], place[3]);
						var marker = new google.maps.Marker({
							position: myLatLng,
							map: map,
							icon: image,
							title: place[0],
							zIndex: place[3],
							animation: google.maps.Animation.DROP
						});

						markers.push(marker);

						google.maps.event.addListener(marker, 'click', (function(marker, i) {
							return function() {
								infowindow.setContent(locations[i][0]);
								infowindow.open(map, marker);
							}
						})(marker, i));
					}
			}

			google.maps.event.addDomListener(window, 'load', initialize);
		</script>

		<div id="map-canvas"></div>

		<!-- ========== MAP END ========== -->

		<!-- ========== CONTENT START ========== -->

		<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-sm-5">
						<div class="row">
							<div class="col-xs-12">
								<h1>Contact Details</h1>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-2 col-xs-3">
								<i class="fa fa-map-marker fa-5x primary-color"></i>
							</div>
							<div class="col-lg-10 col-xs-9">
								<h3 class="no-margin">Address</h3>
								Shaheed Bhagat Singh State University,<br>
                                Moga Road (NH-95),<br>
                                Firozpur, Punjab 152001,<br>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<hr>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-2 col-xs-3">
								<i class="fa fa-phone fa-5x primary-color"></i>
							</div>
							<div class="col-lg-10 col-xs-9">
								<h3 class="no-margin">Phone &amp; Landline</h3>
								Phone: <a href="tel:91234xxxxx">8427228893</a><br>
								Landline: <a href="tel:292xxxx">2792576</a>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<hr>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-2 col-xs-3">
								<i class="fa fa-envelope fa-4x primary-color"></i>
							</div>
							<div class="col-lg-10 col-xs-9">
								<h3 class="no-margin">Email</h3>
								Email: <a href="mailto:abc123@gmail.com">rs53189@gmail.com</a><br>
								<!-- Email: <a href="mailto:courses@smartway.com">courses@smartway.com</a> -->
							</div>
						</div>
					</div>
					<div class="col-sm-7">
						<p>&nbsp;</p>
						<img src="images/contact.jpg" alt="" class="img-responsive" />
					</div>
				</div>
			</div>
		</section>

		<!-- ========== CONTENT END ========== -->

		<!-- ========== CONTACT FORM START ========== -->

		<section id="contact" class="alt-background">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<h2>Contact Form</h2>
					</div>
				</div>
				<form action="" method="post">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group" id="contact-name-group">
								<label for="contact-input-name">Name</label>
								<input type="text" name="name" class="form-control" id="contact-input-name" placeholder="Enter your name">
							</div>
							<div class="form-group" id="contact-email-group">
								<label for="contact-input-email">Email</label>
								<input type="email" name="email" class="form-control" id="contact-input-email" placeholder="Enter your email">
							</div>
							<div class="form-group" id="contact-subject-group">
								<label for="contact-input-subject">Subject</label>
								<input type="text" name="subject" class="form-control" id="contact-input-subject" placeholder="Enter your subject">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group" id="contact-message-group">
								<label for="contact-input-message">Message</label>
								<textarea class="form-control" name="message" id="contact-input-message" rows="8"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 text-center">
							<input type="submit" name="submit" class="btn btn-primary">
						</div>
					</div>
				</form>
			</div>
		</section>
<?php 
include'config.php';
if (isset($_POST['submit']))
 {

	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	if(!empty($name) && !empty($email) && !empty($subject) && !empty($message)){
		$insert="insert into contact values('','$name','$email','$subject','$message')";
		mysqli_query($con, $insert);
		mail('nitin12447@gmail.com',$subject,$message);
	}


}
 ?>
		<!-- ========== CONTACT FORM END ========== -->



		

		<!-- ========== FOOTER START ========== -->

	<?php include 'footer.php'; ?>

		<!-- ========== FOOTER END ========== -->
