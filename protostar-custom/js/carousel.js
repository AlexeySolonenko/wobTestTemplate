console.log('test from coursel js');
function showOneOutOfCollection(startIndex = false,col,dots,prev = false,next = false, parent,auto){
    console.log(arguments);
    //parent.childrenStorage = {};
    if(!col || col.length < 1 || !dots || dots.length < 1) return;

    var currentStart = 0, i = 0, count = 0,width = 0, end = 0;
    var startFound = false;
    /* reset dots  */
    for(i = 0; i < dots.length; i++) {
        dots[i].classList.remove('w3-dark-gray');
        dots[i].classList.add('w3-light-gray');
    }
    /* if startIndex exists in current list, treat it as current start */
    if(startIndex && col[startIndex] && col[startIndex] !== undefined){
        currentStart = startIndex;
        startFound = true;
    }
    /* find width and reset slides */
    for(var i = 0; i < col.length; i ++){
        width = col[i].getAttribute('data-width');
        if(col[i].classList.contains('d-none') == false && !startFound){
            currentStart = i;
            startFound = true; 
        }
        //col[i].classList.add('w3-hide');
    }
    width = parseInt(width);

    if(prev) {
        startIndex = currentStart -1;
    } else if(next) {
        startIndex = currentStart + 1;
    } else if(!startIndex && startIndex !== 0) startIndex = 0;
    
    if(startIndex >= col.length) startIndex = 0;
    if(startIndex <0) startIndex = col.length -1;

    /* reset sub-icons wisibility */
    
    end = startIndex + width;
    if(col.length < end) end = startIndex + width - col.length;
    //console.log("current start: " + currentStart + ", startIndex: " + startIndex+ ", end: " + end + ", width: " + width);

    //var parent = col[0].parentNode;
    var indexes = [];
    
    for(i = 0; i < col.length; i++) {
        if(( startIndex < end && i >= startIndex && i < end) || (startIndex > end && (i >= startIndex) )) {
            col[i].classList.remove('d-none');
            indexes.push(i);
        } else {
            //col[i].classList.add('w3-hide');
        }
    }

    for(i = 0; i < col.length; i++) {
        if(startIndex > end && i < end ) {
            col[i].classList.remove('d-none');
            indexes.push(i);
        } else {
            //col[i].classList.add('w3-hide');
        }
    }

    for(i = 0; i < col.length; i++) {
        if(( startIndex < end && (i < startIndex || i >= end) ) || (startIndex > end && (i < startIndex && i >= end) )) {
            indexes.push(i);
            col[i].classList.add('d-none');
        }
    }
    var newNodes = [];
    for(i = 0; i < col.length; i++){
        newNodes.push(col[indexes[i]].cloneNode(true));
    }

    if(parent) while(parent.firstChild)parent.removeChild(parent.firstChild);
    for(i = 0; i < col.length; i++){
        newNodes[i].addEventListener('click',showOneOutOfCollection.bind(null,null,newNodes,dots,null,true,parent,false));
        parent.appendChild(newNodes[i]);
    }

    var activeDotIndex = parseInt(startIndex / width);
    if (dots && dots[activeDotIndex] && dots[activeDotIndex] !== undefined) {
        dots[activeDotIndex].classList.remove('w3-light-gray');
        dots[activeDotIndex].classList.add('w3-dark-gray');
    }

    for(var j = 0; j < dots.length; j++){
        if (dots[j]) {
            dots[j].addEventListener('click', showOneOutOfCollection.bind(null, j*width, newNodes, dots,null,null,parent));
        }
    }

    if(auto){
        window.setTimeout(delayedFire.bind(null,null,newNodes,dots,null,true,parent,true),3500);
    }

    function delayedFire(startIndex = false,col,dots,prev = false,next = false, parent,auto){
        if(!col || col.length === 0) return;
        showOneOutOfCollection(startIndex,col,dots,prev,next, parent,auto);

    }
}

