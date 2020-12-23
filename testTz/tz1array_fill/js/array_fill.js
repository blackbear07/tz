function arrayFill (startIndex,count,value) 
{
    var array= new Array();
    
    if(startIndex > 0) {
        if(count != 0) {
            for(startIndex;startIndex<count;startIndex++){
                array[startIndex] = value;
            }
        }
    }
    return array;
}