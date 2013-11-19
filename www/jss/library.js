var storage = {
    debug: true,
    set: function()
    {

    },
    get: function()
    {
      if (navigator.geolocation)
    {
    navigator.geolocation.getCurrentPosition(showPosition);
    }
    else
        {
            
        }
 
    },
    
     clear: function()
    {

    },
      reset: function()
    {

    }
};

var gps=
{
     init: function()
    {

    },
    update: function()
    {

    },
    
     get: function()
    {

    },
       _set: function()
    {

    },
    _onError: function()
    {

    }
};

storage.set();