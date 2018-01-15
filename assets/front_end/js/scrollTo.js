function scrollToItem(item) {
    var diff=(item.offsetTop-window.scrollY)/20;
    if(!window._lastDiff){
        window._lastDiff = 0;
    }

    console.log('test')

    if (Math.abs(diff)>2) {
        window.scrollTo(0, (window.scrollY+diff))
        clearTimeout(window._TO)

        if(diff !== window._lastDiff){
            window._lastDiff = diff;
            window._TO=setTimeout(scrollToItem, 15, item);
        }
    } else {
        console.timeEnd('test');
        window.scrollTo(0, item.offsetTop)
    }
}