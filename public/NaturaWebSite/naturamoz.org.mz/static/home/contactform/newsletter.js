// using jQuery
if(document.getElementById('sendenewsletter')){
    function getCookie(name) {
    var cookieValue = null;
    if (document.cookie && document.cookie !== '') {
        var cookies = document.cookie.split(';');
        for (var i = 0; i < cookies.length; i++) {
            var cookie = jQuery.trim(cookies[i]);
            // Does this cookie string begin with the name we want?
            if (cookie.substring(0, name.length + 1) === (name + '=')) {
                cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
                break;
            }
        }
    }
    return cookieValue;
}
var csrftoken = getCookie('csrftoken');


document.getElementById('sendenewsletter').addEventListener('click', () => {

    const url = 'http://127.0.0.1:8000/api/newsletter/';
    const data = {
            "email": document.getElementById('submit_email').value
        }

    fetch(url, {
        method: "POST",
        headers: {
            "X-CSRFToken": getCookie("csrftoken"),
            "Accept": "application/json",
            'Content-Type': 'application/json'
          },
        body: JSON.stringify(data),
    })
    .then((response)=>{
        //console.log(response)
        if(response.ok){
            $('#newsletterModal').modal('show');
            document.getElementById('submit_email').value = '';
        }
    })
    .catch((error)=>{
        console.log(error)
    })
})
}