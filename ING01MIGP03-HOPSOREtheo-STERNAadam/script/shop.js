$(document).ready(function () {
    $('#submit').click(function () {
        field=$( "#field" ).val();
        value=$( "#value" ).val();
        console.log(field + " : " + value);  
        changeData(field, value);
        updateData(field, value);
    });
});

function changeData(field, value){
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
        if (xhr.readyState == 4){
            if (xhr.status == 200){
                console.log("Data updated successfuly" + xhr.responseText); 
            }
            else {
                console.log("ERROR CODE : " + xhr.status);
                console.log("ERROR MSG : " + xhr.statusText);
            }
        }
    }
    xhr.open("GET", "changeData.php?field=" + field + "$value=" + value);
    xhr.send();
}