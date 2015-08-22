/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var req;
var isIE;
var completeField;
var completeTable;
var autoRow;
var name ="fb";


function init() {
 
    completeField = document.getElementById('complete-field');
    completeTable = document.createElement("table");
    completeTable.setAttribute("class", "popupBox");
    completeTable.setAttribute("style", "display: none");
    autoRow = document.getElementById("auto-row");
    autoRow.appendChild(completeTable);
    completeTable.style.top = getElementY(autoRow) + "px";
 
}
function doCompletion() {
   
    var url = "autocomplete.php?action=complete&id=" + escape(completeField.value);
    req = initRequest();
    req.open("GET", url, true);
    req.onreadystatechange = callback;
    req.send(null);
}
function initRequest() {
    //alert("javascript initRequest()");
    if (window.XMLHttpRequest) {
           // alert("javascript XMLHttp");
        if (navigator.userAgent.indexOf('MSIE') !== -1) {
               // alert("javascript XMLHttp/indexOf !=-1");
            isIE = true;
        }
        return new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        //alert("javascript ActiveX");
        isIE = true;
        return new ActiveXObject("Microsoft.XMLHTTP");
    }
}
function callback() {
    //alert("javascript callback()");
    clearTable();
    if (req.readyState === 4) {
        //alert("javascript callback==4");
        if (req.status === 200) {
           // alert("javascript callback==200");
            parseMessages(req.responseXML);
        }
    }
}
function appendComposer(firstName, lastName, composerId) {
    alert("javascript appendComposer()");//nao entra
    var row;
    var cell;
    var linkElement;
    if (isIE) {
         //alert("javascript appendComposer() true");//nao entra
        completeTable.style.display = 'block';
        row = completeTable.insertRow(completeTable.rows.length);
        cell = row.insertCell(0);
    } else {
         //alert("javascript appendComposer()false");//nao entra
        completeTable.style.display = 'table';
        row = document.createElement("tr");
        cell = document.createElement("td");
        row.appendChild(cell);
        completeTable.appendChild(row);
    }
    cell.className = "popupCell";
    linkElement = document.createElement("a");
    linkElement.className = "popupItem";
    linkElement.setAttribute("href", "autocomplete.php?action=lookup&id=" + composerId);
    linkElement.appendChild(document.createTextNode(firstName + " " + lastName));
    cell.appendChild(linkElement);
}
function clearTable() {
    //alert("javascript clearTable()");
    if (completeTable.getElementsByTagName("tr")/*.length > 0*/) {
        //alert("javascript clearTable()tr>0");
      
        completeTable.style.display = 'none';
        //alert(completeTable.childNodes.length);
        for (loop = completeTable.childNodes.length - 1; loop >= 0; loop--) {
            completeTable.removeChild(completeTable.childNodes[loop]);
            alert("javascript clearTable()loop");
        }
    }
}
function getElementY(element) {
    //alert("javascript getElement()");
    var targetTop = 0;
    //var i = 0;
    if (element.offsetParent) {
        //alert("javascript elememt off");
        while (element.offsetParent) {
            targetTop += element.offsetTop;
            element = element.offsetParent;
            
            //i++;
            //alert("while i="+i);
        }
        //alert(i);
    } else if (element.y) {
       // alert("javascript element y");
        targetTop += element.y;
    
    }
       
    return targetTop;
    
}
function parseMessages(responseXML) {
    //alert("javascript parseMessages()");
// no matches returned
var i =0;
  //  if (responseXML === null) {
     //   alert("javascript parseMessages()responseXML==null");
     //   return false;
    //} else {
        
        var composers = responseXML.getElementsByTagName("composers")[0];
        alert("responseXML!=null ");
        
       // if (composers.childNodes.length > 0) {
            alert("javascript parseMessages()responseXML!=null composers>0");
            completeTable.setAttribute("bordercolor", "black");
            completeTable.setAttribute("border", "1");
            for (loop = 0; loop < composers.childNodes.length; loop++) {
                var composer = composers.childNodes[loop];
                var firstName = composer.getElementsByTagName("firstName")[0];
                var lastName = composer.getElementsByTagName("lastName")[0];
                var composerId = composer.getElementsByTagName("id")[0];
                appendComposer(firstName.childNodes[0].nodeValue,lastName.childNodes[0].nodeValue,composerId.childNodes[0].nodeValue);
                i++;
                alert ("loop i="+i);
            }
        //}
   // }
}