// ---------------------------
// GNA iFrame injection
// ---------------------------
// The object must be capable of:
// - Create a new iFrame and append to the document
// - Post params to URL inside the iFrame
// --------------------------------
// --------------------------------
;(function ( window, document, undefined ) {

    // --------------------------------
    // Prevent early calls on rho global namespace
    // --------------------------------
    window.gna = window.gna || {};
    var gna = window.gna;

    // ---------------------------
    // GNA Injection iFrame object
    // ---------------------------
    gna.Iframe = function(options) {

        // Break if helpers are not present
        if (!gna.helpers || !gna.helpers.objects) return this;

        // Default values
        // ---------------------------
        this.defaults = {
            name:           'gna-injected-iframe',                      // STR, The name of the iFrame
            style:          'height: 1px;',                             // STR, Style ATTR
            element:        document.getElementsByTagName('body')[0]    // STR, Style ATTR
        };

        // Merge options with defaults, if they're available
        this.settings = (options) ? gna.helpers.objects.newMergedObject(options, this.defaults) : this.defaults;

        // ---------------------------
        // INIT
        // ---------------------------
        // Must append the iFrame element into the element
        this.init = function() {
            // Abort if we don't have the main element properly initialized
            if (!this.settings.element) return this;
            // Create the iFrame markup
            // Append a newly created proper form into the document
            var iFrame = document.createElement("iframe");
            iFrame.setAttribute("name",               this.settings.name);
            iFrame.setAttribute("style",              this.settings.style);
            iFrame.setAttribute("frameborder",        "0");
            iFrame.setAttribute("allowtransparency",  "true");
            iFrame.setAttribute("scrolling",          "no");
            // Append the iFrame markup to the main element
            this.settings.element.appendChild(iFrame);
            // Save the iFrame selector to the object
            this.iFrame = document.querySelector('iframe[name="' + this.settings.name + '"]') || document.getElementsByName(this.settings.name)[0];
            // Return itself
            return this;
        };

        // ---------------------------
        // SEND PARAMS
        // ---------------------------
        // Must create a form into the document, and send the params to the iFrame using the form POST method
        // The received params has to be an object with a properly stringify JSON inside
        this.sendParams = function(path, params, method) {
            // Set method to post by default if not specified
            method = method || "post";
            // Append a newly created proper form into the document
            var form = document.createElement("form");
            form.setAttribute("method", method);
            form.setAttribute("action", path);
            form.setAttribute("target", this.settings.name);
            for(var key in params) {
                if(params.hasOwnProperty(key)) {
                    var hiddenField = document.createElement("input");
                    hiddenField.setAttribute("type", "hidden");
                    hiddenField.setAttribute("name", key);
                    hiddenField.setAttribute("value", params[key]);
                    form.appendChild(hiddenField);
                }
            }
            // Append a newly created proper form into the document
            document.body.appendChild(form);
            // Submit this form
            form.submit();
            // Return itself
            return this;
        };

        // ---------------------------
        // RESIZE
        // ---------------------------
        // Must change the height of the iFrame element according the received px value (as INT)
        this.resize = function(size) {
            if ( this.iFrame && size ) this.iFrame.style.height = size + 'px';
            return this;
        };

        // INIT NOW
        // ---------------------------
        this.init();
    };

    // ---------------------------
    // GNA Helpers -> object
    // ---------------------------
    gna.helpers = gna.helpers || {};
    gna.helpers.objects = {
        // ---------------------------
        // MERGE OBJECTS
        // ---------------------------
        // Must merge two objects recursively, into the first one
        merge: function(obj1, obj2) {
            for (var p in obj2) {
                try {
                    // Property in destination object set; update its value.
                    if ( obj2[p].constructor==Object ) {
                        obj1[p] = this.merge(obj1[p], obj2[p]);
                    } else {
                        obj1[p] = obj2[p];
                    }
                } catch(e) {
                    // Property in destination object not set; create it and set its value.
                    obj1[p] = obj2[p];
                }
            }
            return obj1;
        },
        // ---------------------------
        // NEW MERGED OBJECT
        // ---------------------------
        // Must create a new object, result as merge two objects recursively, breaking objects origin references
        newMergedObject: function(obj1, obj2) {
            // Create the clones
            var obj1cloned = this.clone(obj1);
            var obj2cloned = this.clone(obj2);
            // Return the merged one
            return this.merge(obj1cloned, obj2cloned);
        },
        // ---------------------------
        // CLONE OBJECT
        // ---------------------------
        // Must clone an object, breaking object origin reference

        clone: function(obj) {
            // Use JSON method to clone the object and return the clone
            return JSON.parse(JSON.stringify(obj));
        }
        // --------------------------------
    };

})( window, document );
