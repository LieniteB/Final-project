const oncontentchange = () => {
    let xhtpp = new XMLHttpRequest();
    XMLHttpRequest.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById("main").innnerHtml = this.responseText;
        }
    }

    XMLHttpRequest.OPEN("GET", "newContent.html", true);
    XMLHttpRequest.send();
}