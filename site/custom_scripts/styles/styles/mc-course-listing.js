$(document).ready(function(){
    var directoryData;
    var children = new Array();
    var categoryId = $('#mc-category-id').val();
    var url = '//www.messiah.edu/mcapi/?directoryID=1&live_only=Y&apiKey=a38737a6a302f5f0390169114b6640a6&categoryID=' + categoryId;

    $.ajax({
        url: url,
        dataType: 'jsonp',
        jsonpCallback: 'directory_data',
        jsonp: 'callback',
        success: function (data) {
            directoryData = data;
            
            for (var i = 0; i < directoryData.length; i++) {
                var show = showProgram(directoryData[i]);
                if (show) {                    
                    degreeTypes = new Array();
                    var degreeTypeStr = directoryData[i].degree_type; 
                    if (degreeTypeStr != 'none') {
                        var degreeType = degreeTypeStr.split(", ");
                        for (var j = 0; j < degreeType.length; j++) {
                            var obj = new Object();
                            obj.name = degreeType[j];
                            degreeTypes.push(obj);
                        }
                    }
                    directoryData[i].degree_types = degreeTypes;
                
                    var parentStr = directoryData[i].parent_program;
                    if (parentStr != '') {
                        var parents = parentStr.split(", ");
                        for (var j = 0; j < parents.length; j++) {
                            var key = parents[j];
                            var exist = key in children;
                            if (!exist) {
                                children[key] = new Array();
                            }
                            children[key].push(directoryData[i]);
                        }
                    }
                }
            }

            loadTables();
        },
        error: function(jqXHR, textStatus, errorThrown) { 
            //alert(jqXHR.resultText);
        }
    });
   
    function showProgram(data) {
        var res = (data.live == '1') && (data.grad_program == '');
        return res;
    }
   
    function loadTables() {
        for (var i = 0; i < directoryData.length; i++) {
            if (directoryData[i].parent_program == '') {
                var show = showProgram(directoryData[i]);
                if (show) {                    
                    directoryData[i].expanded = false;
                    $("#programs-template").tmpl(directoryData[i]).appendTo("#expanded");
                    
                    var key = directoryData[i].entry_id;
                    var exist = key in children;
                    if (exist) {
                        for (var j = 0; j < children[key].length; j++) {
                            var show = showProgram(children[key][j]);
                            if (show) {                    
                                children[key][j].expanded = true;
                                $("#programs-template").tmpl(children[key][j]).appendTo("#expanded");
                            }
                        }
                    }
                }
            }
        }
    }
    
});
