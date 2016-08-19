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
    var op = "write"; // operation - write to journal


    function getXmlHttp() {
        var xmlhttp;
        try {
            xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
            } 
        catch (e) {
            try {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                } 
            catch (E) {
                xmlhttp = false;
                }
            }
            if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
                xmlhttp = new XMLHttpRequest();
                xmlhttp.withCredentials = true;
            }
            return xmlhttp;
        } // function getXmlHttp() {
            
    function $_GET() {
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
                
        if (queries != "" && queries != "?") {                    
            queries = queries.slice(1); // Remove question mark ?                    
            queries = queries.split("&"); // Split all the different queries                    
            var length = queries.length; // Get the number of queries

            // Declare global variables to store keys and elements
            $_GET_Params = new Array();
            $_GET = {}; // new object for parameters

            // Perform functions per query
            for (var i  = 0; i < length; i++) {                        
                var key = queries[i]; // Get the present query                        
                key = key.split("="); // Split the query and the value
                $_GET[key[0]] = [key[1]]; // Assign value to the $_GET variable
                $_GET_Params[i] = key[0]; // Assign value to the $_GET_Params variable
            }
        } // if (queries != "" && queries != "?")
        } // function $_GET() {

        
    // Execute the function
    $_GET(); // in this case, we must have code=nnnnnn - 6 digits (only)

    var out = "?op=" + op + "&source=" + document.referrer.replace(/\/$/g, '');

    for(i in $_GET){                
        out = out + "&" + i + "=" + $_GET[i]; // complete the string parameters                
    }
    
    var xhr = getXmlHttp(); // put function in variable
             
    // action with Landing Control Center
    
    xhr.open("GET", (path + out), true);
    xhr.send(null); //

    xhr.onload = function() {  
        // action on success
    }

    xhr.onerror = function() {  
        // action on error
    }  