    // current widget that is getting edited
    var x = activeWidget;

//--------------------------------------------------------
// Generate proper number of link boxes when editing a widget

//console.log(widgetItems[x]);

   //var num_of_links = widgetItems[x].settings['number_of_links'];

    //if (num_of_links === undefined) {

        // determine the number of links loop throgh and stop when a url is = ''
        var setting_count = 1;
        for (j = 2; j < 50; j++) {
            var local_param_url = widgetItems[x].settings['param_'+j+'_url'];
console.log(local_param_url);
            if (local_param_url === undefined) {
                local_param_url = '';
            }
            if (local_param_url != '') {
                setting_count++;
                //console.log('Setting Count : ' + setting_count);
            } else {
                //stop at first empty url
                j = 50;
            }
        }

        //var table = document.getElementById("quicklinks");
        var num_of_links = setting_count;

        document.getElementById('number_of_links').value = num_of_links;
    //}



    for (i = 2; i < parseInt(num_of_links)+1; i++) {
        add_rows(i);
        var param_url = widgetItems[x].settings['param_'+i+'_url'];
        var param_link_text = widgetItems[x].settings['param_'+i+'_link_text'];

        document.getElementById('param_'+i+'_url').value = param_url;
        document.getElementById('param_'+i+'_link_text').value = param_link_text;
    }

//--------------------------------------------------------
// Set up listener for Adding a New link

    var myEl = document.getElementsByClassName('btn_add_link');

    for(var i = 0, j=myEl.length; i<j; i++){
        myEl[i].addEventListener('click', function() {

            var number_of_links = document.getElementById("number_of_links").value;
            //number_of_links = parseInt(number_of_links) + 1;

            var new_number = parseInt(number_of_links) + 1;
            document.getElementById("number_of_links").value = new_number;

            add_rows(new_number);

        }, false);
    }
//--------------------------------------------------------
// Set up listener for Removing a link
    var remove_row_buttons = document.getElementsByClassName("remove_row");

    for(var i = 0, j=remove_row_buttons.length; i<j; i++){
        //console.log('rowid : ' + i);
        //console.log('Attribute : ' + remove_row_buttons[i].getAttribute("rowid"));

        remove_row_buttons[i].addEventListener("click", function(){
            rowid = this.getAttribute("rowid");
            remove_row(rowid);
        });

    }

//--------------------------------------------------------
// function to remove a link (2 rows)

    function remove_row(rowid) {
        var table = document.getElementById("quicklinks");
        row_id = parseInt(rowid) * 2;

        var row_one = row_id - 2;
        table.deleteRow(row_one);
        table.deleteRow(row_one);  // same number because the table has 1 less row (dugh)

        // Reorder all Input IDs (oh goodie)
        var shorter_table = document.getElementById("quicklinks");
        var inputs = shorter_table.getElementsByClassName('qlfield');
        var field_number = 0;

        for (var i = 0; i < inputs.length; i += 1) {
            field_number++;
            //inputs[i].value = '';
            inputs[i].id = 'param_'+field_number+'_url';
            i++;
            inputs[i].id = 'param_'+field_number+'_link_text';
        }

        var number_of_links = document.getElementById("number_of_links").value;
        var new_number = parseInt(number_of_links) - 1;
        document.getElementById("number_of_links").value = new_number;
    }

//--------------------------------------------------------
// function to add a new link (2 new rows)
    function add_rows(new_number) {

        var table = document.getElementById("quicklinks");

        var rowCount = table.rows.length;
        var row = table.insertRow(rowCount);
        row.id = "link_row_" + new_number;
        // Insert new cells (<td> elements) at the 1st and 2nd position of the "new" <tr> element:
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);

        new_trow = parseInt(new_number) + 4 + 1;
        // Add some text to the new cells:
        cell1.className = "label_cell";
        cell1.innerHTML = '<label>Link URL (http://....)</label>';
        cell2.className = "data_cell";
        cell2.innerHTML = '<input type="text" size="85" value="" id="param_'+new_number+'_url" name="param_'+new_number+'_url" class="qlfield"><input rowid="'+new_number+'" trow="'+new_trow+'" class="button remove_row" type="button" value="- Remove" />';


        var row = table.insertRow(rowCount +1);
        row.id = "text_row_" + new_number;
        // Insert new cells (<td> elements) at the 1st and 2nd position of the "new" <tr> element:
        var cell3 = row.insertCell(0);
        var cell4 = row.insertCell(1);

        // Add some text to the new cells:
        cell3.className = "label_cell";
        cell3.innerHTML = '<label>Link Text</label>';
        cell4.className = "data_cell";
        cell4.innerHTML = '<input type="text" size="85" value="" id="param_'+new_number+'_link_text" name="param_'+new_number+'_link_text" class="qlfield">';
    }

