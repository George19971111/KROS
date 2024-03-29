/* 
 * Lazy Line Painter - Path Object 
 * Generated using 'SVG to Lazy Line Converter'
 * 
 * http://lazylinepainter.info 
 * Copyright 2013, Cam O'Connell  
 *  
 */ 
 
var pathObj = {
    "arrowtop": {
        "strokepath": [
            {
                "path": "M2.5,19.393c-0.64,0-1.278-0.244-1.768-0.73c-0.977-0.979-0.977-2.561,0-3.535L15.363,0.498l14.63,14.629   c0.978,0.975,0.978,2.559,0,3.535s-2.56,0.979-3.534,0L15.363,7.568L4.267,18.662C3.781,19.148,3.14,19.393,2.5,19.393z    M29.994,29.496c0.979-0.977,0.979-2.559,0-3.533l-14.63-14.632l-14.63,14.63c-0.978,0.977-0.978,2.561,0,3.535   c0.978,0.977,2.56,0.977,3.535,0L15.363,18.4l11.096,11.096c0.487,0.488,1.129,0.732,1.769,0.732   C28.869,30.229,29.506,29.984,29.994,29.496z",
                "duration": 1000
            }
        ],
        "dimensions": {
            "width": 31,
            "height": 31
        }
    }
}; 
 
 
/* 
 Setup and Paint your lazyline! 
 */ 
 
 $(document).ready(function(){ 
 $('#undefined').lazylinepainter( 
 {
    "svgData": pathObj,
    "strokeWidth": 2,
    "strokeColor": "#e09b99"
}).lazylinepainter('paint'); 
 });
 