var currentImageEdit = -1;

var widgetImages = new Array();
var oldsave = $("saveWidgetProperty").onclick;

if (typeof $("saveWidgetProperty").onclick != "function") {
    $("saveWidgetProperty").onclick = commitwidgetImages;
}
else {
    $("saveWidgetProperty").onclick = function ()
    {
        commitwidgetImages();
        oldsave();
    }
}

// Load image carousel widget images into sub table

fetchImages();
iterateImages();
$('image_carousel_widget_images').show();


function addWidgetImage ()
{
    currentImageEdit = -1;
    $("image_carousel_image").value = "";
    $("image_carousel_imagei").src= "../images/no_image.gif";
    $("image_carousel_slide_title").value = "";
    $("lb_widget_content").getElementsByTagName("tfoot")[0].style.display = "";
    $("image_carousel_widget_images").style.display = "none";
    $("widgetImageDelete").style.display = "none";

}

function editWidgetImage (widgetImageID)
{
    currentImageEdit = widgetImageID;

    if (widgetImages[currentImageEdit][0] != null) {
        $("image_carousel_image").value = widgetImages[currentImageEdit][0];
    }
    if (widgetImages[currentImageEdit][0] != null) {
        $("image_carousel_imagei").src = 'http://'+$('DOMAIN').value+'/images/'+widgetImages[currentImageEdit][0];
    }
    if (widgetImages[currentImageEdit][6] != null) {
        $("image_carousel_slide_title").value = widgetImages[currentImageEdit][6];
    }

    $("lb_widget_content").getElementsByTagName("tfoot")[0].style.display = "";
    $("image_carousel_widget_images").style.display = "none";
    $("widgetImageDelete").style.display = "";
}

function saveWidgetImage ()
{
    if ($("image_carousel_image").value == '') {
        alert('Please select an image.');
        return;
    }

    if ($("image_carousel_slide_title").value == '') {
        alert('Please enter a slide title.');
        return;
    }

    if (currentImageEdit == -1) {
        widgetImages.push(new Array($("image_carousel_image").value, '', '', '', '', '', $("image_carousel_slide_title").value, '', ''));

        // add new row
        addImageRow (widgetImages.length - 1, widgetImages[widgetImages.length - 1]);
    }
    else {
        widgetImages[currentImageEdit][0] = $("image_carousel_image").value;
        widgetImages[currentImageEdit][1] = '';
        widgetImages[currentImageEdit][2] = '';
        widgetImages[currentImageEdit][5] = '';
        widgetImages[currentImageEdit][6] = $("image_carousel_slide_title").value;
        widgetImages[currentImageEdit][7] = '';
        widgetImages[currentImageEdit][8] = '';

        $("widgetImageText" + currentImageEdit).title = $("image_carousel_slide_title").value;
        $("widgetImageText" + currentImageEdit).innerHTML = $("image_carousel_slide_title").value;
    }

    $("lb_widget_content").getElementsByTagName("tfoot")[0].style.display = "none";
    $("image_carousel_widget_images").style.display = "";
}

function deleteWidgetImage ()
{
    widgetImages[currentImageEdit] = -1;
    //widgetImages = widgetImages.without(-1);
    $("widgetImageText" + currentImageEdit).parentNode.parentNode.parentNode.removeChild($("widgetImageText" + currentImageEdit).parentNode.parentNode);

    $("lb_widget_content").getElementsByTagName("tfoot")[0].style.display = "none";
    $("image_carousel_widget_images").style.display = "";
}

function addImageRow (ImageID, ImageObj)
{
    var tr = document.createElement("tr");
    var td = document.createElement("td");
    td.className = "label_cell";
    var aLink = document.createElement("a");
    aLink.id = "widgetImageText" + ImageID;
    aLink.href = "#";
    aLink.onclick = function ()
    {
        editWidgetImage(this.id.replace(/widgetImageText/gi, ""));
        return false;
    }
    aLink.innerHTML = ImageObj[6];
    aLink.title = ImageObj[6];
    td.appendChild(aLink);
    tr.appendChild(td);
    td = document.createElement("td");
    td.className = "data_cell";
    var moveButton = document.createElement("a");
    moveButton.href = "#";
    moveButton.id = "widgetLinkDownText" + ImageID;
    moveButton.innerHTML = "Move Down";
    moveButton.onclick = function ()
    {
        moveDown(this.id.replace(/widgetLinkDownText/gi, ""));
        return false;
    }
    td.appendChild(moveButton);
    td.appendChild(document.createTextNode("\u00a0"));
    moveButton = document.createElement("a");
    moveButton.href = "#";
    moveButton.id = "widgetLinkUpText" + ImageID;
    moveButton.innerHTML = "Move Up";
    moveButton.onclick = function ()
    {
        moveUp(this.id.replace(/widgetLinkUpText/gi, ""));
        return false;
    }
    td.appendChild(moveButton);
    tr.appendChild(td);
    $("image_carousel_widget_images").appendChild(tr);
}

function iterateImages ()
{
    for (var i = 0; i < widgetImages.length; i++) {
        addImageRow(i, widgetImages[i]);
    }
}

function fetchImages ()
{
    widgetImages.clear();
    for (var wImage in widgetItems[activeWidget].settings) {
        if (wImage.indexOf("image") >= 0 && wImage.indexOf("slide_title") >= 0) {
            // Get the position of the item in the list from the value in the setting name
            var position = parseInt(wImage.match(/^image(\d+)/i)[1], 10);
            widgetImages.push(new Array(
                widgetItems[activeWidget].settings[wImage.replace(/slide_title/gi, "imageSrc")],
                widgetItems[activeWidget].settings[wImage.replace(/slide_title/gi, "title")],
                widgetItems[activeWidget].settings[wImage.replace(/slide_title/gi, "link")],
                widgetItems[activeWidget].settings[wImage.replace(/slide_title/gi, "description")],
                widgetItems[activeWidget].settings[wImage.replace(/slide_title/gi, "button")],
                widgetItems[activeWidget].settings[wImage.replace(/slide_title/gi, "align")],
                widgetItems[activeWidget].settings[wImage],
                widgetItems[activeWidget].settings[wImage.replace(/slide_title/gi, "imageOverlaySrc")],
                widgetItems[activeWidget].settings[wImage.replace(/slide_title/gi, "html")],
                position

            ));
        }
    }

    // Sort images in the correct order by the position
    /*
    widgetImages.sort(function (a, b) {
        console.log(a);
        if (a[4] < b[4]) {
            return -1;
        } else if (a[4] > b[4]) {
            return 1;
        } else {
            return 0;
        }
    });
*/
}

function commitwidgetImages ()
{
    widgetItems[activeWidget].settings = new Object();

    for (var i = 0; i < widgetImages.length; i++) {
        if (widgetImages[i][0] != undefined) {
            widgetItems[activeWidget].settings["image" + i + "imageSrc"] = widgetImages[i][0];
            widgetItems[activeWidget].settings["image" + i + "title"] = widgetImages[i][1];
            widgetItems[activeWidget].settings["image" + i + "link"] = widgetImages[i][2];
            widgetItems[activeWidget].settings["image" + i + "description"] = widgetImages[i][3];
            widgetItems[activeWidget].settings["image" + i + "button"] = widgetImages[i][4];
            widgetItems[activeWidget].settings["image" + i + "align"] = widgetImages[i][5];
            widgetItems[activeWidget].settings["image" + i + "slide_title"] = widgetImages[i][6];
            widgetItems[activeWidget].settings["image" + i + "imageOverlaySrc"] = widgetImages[i][7];
            widgetItems[activeWidget].settings["image" + i + "html"] = widgetImages[i][8];
        }
    }

    $("image_carousel_image").parentNode.removeChild($("image_carousel_image"));
    $("image_carousel_slide_title").parentNode.removeChild($("image_carousel_slide_title"));
}

function moveUp (widgetImageID)
{
    var tempLink = null;
    if (widgetImageID > 0) {
        tempLink = widgetImages[widgetImageID - 1];
        widgetImages[widgetImageID - 1] = widgetImages[widgetImageID];
        widgetImages[widgetImageID] = tempLink;
        if ( $("image_carousel_widget_images").hasChildNodes() ) {
            while ( $("image_carousel_widget_images").childNodes.length >= 1 ) {
                $("image_carousel_widget_images").removeChild( $("image_carousel_widget_images").firstChild );
            }
        }
        iterateImages();
    }
}

function moveDown (widgetImageID)
{
    var tempLink = null;
    widgetImageID = parseInt(widgetImageID);
    if (widgetImageID < widgetImages.length - 1) {
        tempLink = widgetImages[widgetImageID + 1];
        widgetImages[widgetImageID + 1] = widgetImages[widgetImageID];
        widgetImages[widgetImageID] = tempLink;
        if ($("image_carousel_widget_images").hasChildNodes()) {
            while ($("image_carousel_widget_images").childNodes.length >= 1) {
                $("image_carousel_widget_images").removeChild($("image_carousel_widget_images").firstChild);
            }
        }
        iterateImages();
    }
}