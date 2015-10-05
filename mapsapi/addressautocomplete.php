<!DOCTYPE html>
<html>
    <head>
        <meta charset="windows-1252">
        <title>Auto Complete</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" />
        <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?signed_in=true&amp;libraries=places&amp;callback=initAutocomplete" async defer></script>
        <script type="text/javascript">
            function initAutocomplete(){
                autocomplete = new google.maps.places.Autocomplete(
                document.getElementById('address_auto'),
                {
                    componentRestrictions: {'country':'us'},
                    types:['geocode']
                }        
                );
            }
        </script>
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <h1>Auto Complete Example</h1>
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="address_auto">Write your address</label>
                        <input name="address_auto" id="address_auto" class="form-control" placeholder="Write address" />
                    </div>
                </form>
            </div>
        </div>        
    </body>
</html>
