/* 
 * 
 * ... License Headers ...
 * 
 */ 

/*
 * 
 * settings section
 * 
 */

var path = 'http://www.api.zorind.com'; // Landing Control Center

var outObj = {
    op: "write",
    source: document.referrer.replace(/\/$/g, ''), 
    error: []
    };

var dataIPlocation = {};
var dataGeolocation = {};
    
if (window.jQuery) {
    console.log(window.jQuery.fn.jquery);
} else {
    console.log("jQuery not found - communication with LandCC out of order");    
} 

// get name browser and version
outObj.browser = (function(){
    var ua = navigator.userAgent, tem, M = ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];
    if(/trident/i.test(M[1])){
        tem = /\brv[ :]+(\d+)/g.exec(ua) || [];
        return 'IE ' + (tem[1] || '');
    }
    if(M[1] === 'Chrome'){
        tem = ua.match(/\b(OPR|Edge)\/(\d+)/);
        if(tem !== null) {
            return tem.slice(1).join(' ').replace('OPR', 'Opera');
        }            
    }
    M = M[2]? [M[1], M[2]]: [navigator.appName, navigator.appVersion, '-?'];
    if((tem = ua.match(/version\/(\d+)/i)) !== null) {
        M.splice(1, 1, tem[1]);
    }            
    return M.join(' ver. ');
})();

function setCookie(name, value, options) {
    options = options || {};
    var expires = options.expires;
    if (typeof expires === "number" && expires) {
        var d = new Date();
        d.setTime(d.getTime() + expires * 1000);
        expires = options.expires = d;
    }
    if (expires && expires.toUTCString) {
        options.expires = expires.toUTCString();
    }
    value = encodeURIComponent(value);
    var updatedCookie = name + "=" + value;
    for (var propName in options) {
        updatedCookie += "; " + propName;
        var propValue = options[propName];
        if (propValue !== true) {
            updatedCookie += "=" + propValue;
        }
    }
    document.cookie = updatedCookie;
}
      
function getCookie(name) {
    var matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)" ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}  
      
function genUname() { // generator unique names user-xxxx-xxxx
    function s4() {
        return Math.floor((1 + Math.random()) * 0x10000)
            .toString(16)
            .substring(1);
    }
    return 'user-' + s4() + '-' + s4();
}  

var getIP  = $.getJSON('//freegeoip.net/json/?callback=?', function() {                    
                 //          
                });  
            
outObj.code = (function() {
                // from http://stackoverflow.com/questions/5448545/how-to-retrieve-get-parameters-from-javascript               
                var href = window.location.href; // Get the Full href of the page e.g. http://www.google.com/files/script.php?v=1.8.7&country=india               
                var protocol = window.location.protocol + "//"; // Get the protocol e.g. http               
                var hostname = window.location.hostname; // Get the host name e.g. www.google.com               
                var pathname = window.location.pathname; // Get the pathname e.g. /files/script.php               
                var queries = href.replace(protocol, ''); // Remove protocol part               
                queries = queries.replace(hostname, ''); // Remove host part               
                queries = queries.replace(pathname, ''); // Remove pathname part
                // Presently, what is left in the variable queries is : ?v=1.8.7&country=india
                // Perform query functions if present                               

                if (queries !== "" && queries !== "?") {                    
                    queries = queries.slice(1); // Remove question mark ?                    
                    queries = queries.split("&"); // Split all the different queries                    
                    var length = queries.length; // Get the number of queries

                    // Declare global variables to store keys and elements
                    // $_GET_Params = new Array(); // name for analog as global array $_GET in PHP
                    // $_GET = {}; // new object for parameters

                    // Perform functions per query
                    for (var i  = 0; i < length; i++) {                        
                        var key = queries[i]; // Get the present query                        
                        key = key.split("="); // Split the query and the value
                    //    $_GET[key[0]] = [key[1]]; // Assign value to the $_GET variable
                    //    $_GET_Params[i] = key[0]; // Assign value to the $_GET_Params variable
                        if(key[0] == "code") {
                            return 1 * key[1];
                        }                    
                    }
                } // if (queries != "" && queries != "?")
            })(); // function  
   
function getFormattedDate() {
    var date = new Date();

    var month = date.getMonth() + 1;
    var day = date.getDate();
    var hour = date.getHours();
    var min = date.getMinutes();
    var sec = date.getSeconds();

    month = (month < 10 ? "0" : "") + month;
    day = (day < 10 ? "0" : "") + day;
    hour = (hour < 10 ? "0" : "") + hour;
    min = (min < 10 ? "0" : "") + min;
    sec = (sec < 10 ? "0" : "") + sec;

    var str = date.getFullYear() + "-" + month + "-" + day + " " +  hour + ":" + min + ":" + sec;
    return str;
}   
   
function sendData() { 
    if(!getCookie("datetimeSent")) {         
        $.get( path, outObj )
            .done(function(data){                       
                setCookie("datetimeSent", getFormattedDate());
                console.log("Ajax ok at : " + getCookie("datetimeSent"));
                })
            .fail(function(data){
                console.log("Sorry, but Ajax request has error...");          
                }); 
    }  else { 
        var start = new Date(getCookie("datetimeSent"));
        var end = new Date(getFormattedDate());
        var days = (end - start) / 1000 / 60 / 60 / 24;
        days = days - (end.getTimezoneOffset() - start.getTimezoneOffset()) / (60 * 24);        
        
        if(Math.round(days,1) >= 1) {            
            $.get( path, outObj )
              .done(function(data){                       
                  setCookie("datetimeSent", getFormattedDate());
                  console.log("Ajax ok at : " + getCookie("datetimeSent"));
                  })
              .fail(function(data){
                  console.log("Sorry, but Ajax request has error...");          
                  });    
        } else {
            // less than 1 day        
            console.log("data to Ajax had been send \r\n Stmp : " + getCookie("datetimeSent") + "\r\n Now  : " + getFormattedDate());        
        }
    } 
} 
    
if(!getCookie("Uname")) {        
    setCookie("Uname", genUname(), {expires: 94608000}); // set cookie for 3 years       
    outObj.uname = getCookie("Uname");
} else {  
    outObj.uname = getCookie("Uname");
}   

var getGeoLat = new Promise(function(resolve, reject){                     
        navigator.geolocation.getCurrentPosition(geo_success, errorCallback, {enableHighAccuracy: true, timeout: 10 * 1000 * 1000 , maximumAge: 0});                                                                                                                                                           
        setTimeout(function(){
            if(!outObj.lat) {              
                outObj.error.push("error in get cutternt position geolocation - data did not retrieve");
                reject(outObj.error);
            } else {
                resolve(outObj);
            }            
        }, 5000); // 5 sec pause before timeout error    
    });
    
function errorCallback(error) {   
   outObj.error.push(" error in get cutternt position geolocation - code[" + error.code + "] - " + error.message );
};

function geo_success(position) {
    outObj.lat = position.coords.latitude;
    outObj.lng = position.coords.longitude;
    outObj.acc = position.coords.accuracy; 
};

getGeoLat.then( function(result){                  
                    // Вызвать get IP, взять только ip
                    getIP.done(function(data){
                            outObj.ip = data.ip;
                            })
                        .fail(function(){                         
                            outObj.error.push(" error in get IP data " );
                            });
                    }, 
                function(err){                    
                    getIP.done(function(data){
                            outObj.ip = data.ip; 
                            outObj.lat = data.latitude;
                            outObj.lng = data.longitude;
                            outObj.acc = null;                           
                            })
                        .fail(function(){                          
                            outObj.error.push(" error in get IP data " );
                            });
            }).then(function(){                                    
                outObj.result = JSON.stringify(outObj.error);
                //console.log(outObj);
                sendData();  
                });