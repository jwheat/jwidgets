//--------------------------------------------------------
// Set up listener for Adding a New link

    function selectURL(obj){
        var selectedURL = obj.options[obj.selectedIndex];
        if (selectedURL.value != ""){
                window.location = selectedURL.value;
        }
    }