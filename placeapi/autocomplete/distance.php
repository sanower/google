<!DOCTYPE html>
<html>
    <head>
        <meta charset="windows-1252">
        <title>Distance Calculating</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" />
        <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?signed_in=true&amp;libraries=places&amp;callback=initAutocomplete" async defer></script>
        <script type="text/javascript">
            var directionService;
            function initAutocomplete() {
                autocomplete = new google.maps.places.Autocomplete(
                        document.getElementById('address_from'),
                        {
                            /* componentRestrictions: {'country':'us'}, */
                            types: ['geocode']
                        }
                );

                autocomplete2 = new google.maps.places.Autocomplete(
                        document.getElementById('address_to'),
                        {
                            /* componentRestrictions: {'country':'us'}, */
                            types: ['geocode']
                        }
                );

                directionService = new google.maps.DirectionsService;
            }

            function calcDistance() {
                options = {
                    origin: document.getElementById("address_from").value,
                    destination: document.getElementById("address_to").value,
                    travelMode: google.maps.TravelMode.DRIVING,
                    unitSystem:google.maps.UnitSystem.METRIC
                };

                directionService.route(
                        options,
                        function (response, status) {
                            if (status === google.maps.DirectionsStatus.OK) {
                                // Alert the distance in meters
                                alert(response.routes[0].legs[0].distance.value);
                                //console.dir(response);
                            } else {
                                window.alert('Directions request failed due to ' + status);
                            }

                        }
                );
                return false;
            }
        </script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-md-offset-3">
                    <div class="jumbotron">
                        <h2>Google Distance Calculator</h2>
                        <form class="" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <div class="form-group">
                                <label for="address_from">Pickup address</label>
                                <input type="tex" id="address_from" name="address_from" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="address_to">Drop off address</label>
                                <input type="text" id="address_to" name="address_to" class="form-control" />
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-primary" onclick="return calcDistance()">Next</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>