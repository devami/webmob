var storage = {
    debug: true,
    set: function(cle, valeur)
    {
        window.localStorage[cle] = valeur;
    },
    get: function(key)
    { 
        var value;
        if (window.localStorage) {
           
            if (window.localStorage.getItem) {
                value = window.localStorage.getItem(key);
            } else {
                value = window.localStorage[key];
            }
        }
return value;
    },
    clear: function()
    {

    },
    reset: function()
    {

    }
};

var gps =
        {
            init: function()
            {
                gps.update();
            },
            update: function()
            {
                if (navigator.geolocation) {                  
                    navigator.geolocation.getCurrentPosition(gps._set, gps._onError);
                } else {
                    alert('Geolocation is not supported in your browser');
                }
            },
            get: function()
            {
                console.log(storage.get("lat"));
                return "Latitude: " + storage.get("lat") + "<br>Longitude: " + storage.get("long");

            },
            _set: function(position)
            {
                var lat = position.coords.latitude;
                var long = position.coords.longitude;
                storage.set("lat", lat);                 
                storage.set("long", long);
                 console.log(storage.get("lat"));
            },
            _onError: function(error)
            {
                switch (error.code)
                {
                    case error.PERMISSION_DENIED:
                        storage.set("PERMISSION_DENIED", "User denied the request for Geolocation.");
                        break;
                    case error.POSITION_UNAVAILABLE:
                        storage.set("POSITION_UNAVAILABLE", "Location information is unavailable.");
                        break;
                    case error.TIMEOUT:
                        storage.set("TIMEOUT", "The request to get user location timed out.");
                        break;
                    case error.UNKNOWN_ERROR:
                        storage.set("UNKNOWN_ERROR", "An unknown error occurred.");
                        break;
                }
            }
        };

gps.update();