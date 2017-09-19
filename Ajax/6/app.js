
function getXMLHttpRequest() {
    if(window.XMLHttpRequest) {
        return new XMLHttpRequest();
    } else {
        return new ActiveObject('Microsoft.XMLHTTP')
    }
}

request = getXMLHttpRequest();
request.onreadystatechange = function() {
    if(request.readyState == 4) {
        responseBody = request.responseText;
        data = JSON.parse(responseBody);

        if(data['status'] == 'Success') {
            for(key in data['msg_info']) {
                document.write(key + ': ');
                document.write(data['msg_info'][key]);
                document.write('<br>');
            }
        } else {
            document.write(data['status']);
        }
        window.stop();
    }
};
request.open('GET', 'index.php', true);
request.send(null);
