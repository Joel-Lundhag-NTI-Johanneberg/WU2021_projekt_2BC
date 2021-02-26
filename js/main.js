function typewriter (p){
    var txt = ["Temporär text", "Lorem ipsum dolor sit amet consectetur", "ladidadidada", "änno mer temporär text", "hallååå varför sitter du o kollar på de här så länge"]
    var i = 0;
    var speed = 100;
    var inner = document.getElementById("type")
    if (p[1] == txt.length) {
        p[1] = 0;
    }
    p[0] = 0;
    var type = setInterval(() => {
        if (i <= txt[p[1]].length && p[0] != 1){
            inner.innerHTML += txt[p[1]].charAt(i);
            inner.style.margin = "0 auto"
            i++;
        }
        else {
            clearInterval(type)
            p[0] = 1;
        }
    }, speed);

    var erase = setInterval(() => {
        if (p[0] > 0){
            inner.innerHTML = txt[p[1]].substring(0, i-1);
            inner.style.margin = "0 auto"
            i--;
            if (i==0){
                clearInterval(erase)
                p[1]++;
                typewriter(p);
            }
        }
    }, speed);
}